<?php
// src/Sdz/BlogBundle/Controller/BlogController.php

namespace Les\CouvertsBundle\Controller;

use Les\DataBundle\Form\Type\PartyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class PartyController extends Controller{
    private $qd = null;
    private $qd_resto = null;

    public function indexAction( Request $request ){
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Party');
        $this->qd = $repository->createQueryBuilder('p');
        $repository_reto = $this->getDoctrine()->getRepository('LesDataBundle:Restaurants');
        $this->qd_resto = $repository_reto->createQueryBuilder('r');
        $parties = null;
        $restos = null;

        $this->qd->add('select','p');
        $parties = $this->qd->getQuery()->getResult();

            for( $i=0; $i < sizeof($parties) ; $i++ ){
                $restoId = $parties[ $i ]->getRestoId();
                   if( $restoId != null ){
                       $restos[$restoId] = $this->qd_resto->add('select','r.name')
                                                    ->add('where','r.id = :id')
                                                    ->setParameter('id',$restoId)
                                                    ->getQuery()
                                                    ->getResult();
                       $parties[ $i ]->restaurantName = $restos[$restoId][0]['name'];
                   }

            }

                for( $i=0; $i < sizeof($parties) ; $i++ ){
                    $imgPath = 'bundles/Restaurant/images/'. $parties[ $i ]->getRestoId() .'/events/'.$parties[ $i ]->getMenu();
                    if( file_exists( $imgPath ) ) {
                        $parties[ $i ]->imgPath = $imgPath;
                    }else{
                        $parties[ $i ]->imgPath = "null";
                    }

                }

        $organisers = $this->qd->add('select','p.organiser')
            ->getQuery()->getResult();
        $choices = null;
               for( $i=0; $i < sizeof($organisers) ; $i++ ){
                          $choices[ $organisers[$i]['organiser'] ] = $organisers[$i]['organiser']  ;
                  }


        $form = $this->createForm(new PartyType( $choices ) ,array(
            'action' => $this->generateUrl('party_calendar'),
            'method' => 'POST',
        ));
                $form->handleRequest($request);
                    if ($form->isValid()){
                        $data = $form->getData();
                        return $this->forward("LesCouvertsBundle:Party:filter", array( 'data' => $data , 'form' =>$form ));
                    }




        return $this->render('LesCouvertsBundle:Party:index.html.twig', array( 'parties' => $parties,
                                                                                'form' => $form->createView() ));
    }


    public function filterAction( $data , $form ){
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Party');
        $this->qd = $repository->createQueryBuilder('p');
        $repository_reto = $this->getDoctrine()->getRepository('LesDataBundle:Restaurants');
        $this->qd_resto = $repository_reto->createQueryBuilder('r');
        $parties = null;
        $restos = null;
        $from = $data['from'];
        $till = $data['till'];
        $organiser = $data['organisers'];
        $count = 0;

           $this->qd->add('select','p');

                if( $organiser != "" ){
                    $this->qd->add('where','p.organiser = :organiser')
                        ->setParameter('organiser',$organiser);
                }
                if( $from != "" ){
                    $from = date("Y-m-d",strtotime($from));
                    $this->qd->add('having','p.date >= :date')
                           ->setParameter('date',$from);
                    $count=1;
                }
                if( $till != "" ){
                    $till = date("Y-m-d",strtotime($till));
                    if( $count==0 ){
                        $this->qd->add('having','p.date <= :date')
                            ->setParameter('date',$till);
                    }else{
                        $this->qd->andHaving('p.date < :date')
                            ->setParameter('date',$till);
                    }
                }

        $parties = $this->qd->getQuery()->getResult();

           for( $i=0; $i < sizeof($parties) ; $i++ ){
                $restoId = $parties[ $i ]->getRestoId();
                if( $restoId != null ){
                    $restos[$restoId] = $this->qd_resto->add('select','r.name')
                        ->add('where','r.id = :id')
                        ->setParameter('id',$restoId)
                        ->getQuery()
                        ->getResult();
                    $parties[ $i ]->restaurantName = $restos[$restoId][0]['name'];
                }
            }

        return $this->render('LesCouvertsBundle:Party:index.html.twig', array( 'parties' => $parties,
            'form' => $form->createView() ));
    }

    //TODO RESERVATION FOR EVENTS
    public function eventAction(Request $request){
        if ($request->isXMLHttpRequest()) {
            $status = false;
            $action = $request->get('action');
            $eventID = $request->get('id');
            if($action == 'reserve'){
                $date = new \DateTime($request->get('date')) ;

            }
            $test = $action ." + ". $eventID ." + ". $request->get('firstName')  ." + ". $request->get('lastName') ." + ". $request->get('date') . " + ". $request->get('number') ;

            return new JsonResponse(array('id' => $eventID , 'request' => $request , 'test' => $test , 'date' => $date));
        }

        return $this->forward('LesCouvertsBundle:Party:index');
    }
}

