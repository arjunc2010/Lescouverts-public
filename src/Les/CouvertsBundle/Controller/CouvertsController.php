<?php
// src/Sdz/BlogBundle/Controller/BlogController.php

namespace Les\CouvertsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Les\DataBundle\Form\Type\SearchType;

class CouvertsController extends Controller{

	public function indexAction(){
//        print_r( $this->getUser()  );

        $module = $this->get('resto_module');
        $module->init();

		return $this->render('LesCouvertsBundle:Couverts:index.html.twig');
	}


    //Landing on the booking page
	public function bookingAction( Request $request  ){

        //Fetching the list of restaurants
        $repository = $this->getDoctrine()
            ->getRepository('LesDataBundle:Restaurants');
        $restaurants = $repository->findBy( array(), array(
            "name" => 'ASC'
        ) );

        $buff = null;
        $complete = null;

        $qd = $repository->createQueryBuilder('r');
        $results = $qd->add('select',"r")
                ->getQuery()->getResult();
                    for( $i=0; $i < sizeof($results) ; $i++ ){
                            $buff->names[$i] = $results[$i] ->getName();
                            $buff->cuisines[$i] = $results[$i] ->getCuisine();
                    }
        $buff->names = array_unique($buff->names);
        $buff->cuisines = array_unique($buff->cuisines);

            $i=0;
            foreach( $buff->names as $name ){
                $complete->names[$i] = $name;
                $i++;
            }
                $i=0;
                foreach( $buff->cuisines as $cuisine){
                    $complete->cuisines[$i] = $cuisine;
                    $i++;
                }



//                            exit(\Doctrine\Common\Util\Debug::dump($complete->names));

        //creating the form
        $form = $this->createForm(new SearchType(), array(
                'action' => $this->generateUrl('booking_a_table'),
                'method' => 'POST',
        ));


            $form->handleRequest( $request );
                    if ($form->isValid()){
                        $data = $form->getData();
                        return $this->forward("LesCouvertsBundle:Couverts:searchBooking", array( 'data' => $data ,
                                                                                                    'complete' => $complete) );
                    }

        return $this->render('LesCouvertsBundle:Couverts:booking.html.twig' ,
                    array( 'restaurants' =>  $restaurants ,
                                'ourForm' => $form->createView(),
                                'name' => $complete->names,
                                'cuisine' => $complete->cuisines
                    )
        );
    }



    //function handling the form data
    public function searchBookingAction( $data , $complete ){
        $name = $data['name']; $arron = $data['arrondissement']; $cuisine = $data['cuisine'];

        //Data Connection
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Restaurants');
        $qd = $repository->createQueryBuilder('r');

        // IF ALL NULL
        if( $name == null && $arron == null && $cuisine == null){

                $restaurants = $repository->findBy( array(), array(
                        "name" => 'ASC'
                    ) );

        // IF NAME
        }else if( $name != null && $arron == null && $cuisine == null ){


                            $qd->add('select','r')
                                ->add('where','r.name LIKE :name')
                                ->add('orderBy','r.name ASC ')
                                ->setParameter('name', "%".$name."%");


                            $query = $qd->getQuery();
                            $restaurants = $query->getResult();


        // IF ARRONDISSEMENT
        }else if( $name == null && $arron != null && $cuisine == null ){

                            $restaurants = $repository->findBy( array(), array(
                                "name" => 'ASC'
                            ) );


        // IF CUISINE
        }else if ( $name == null && $arron == null && $cuisine != null ){

                            $qd->add('select','r')
                                  ->add('where','r.cuisine = :cuisine')
                                  ->add('orderBy','r.name ASC ')
                                  ->setParameter('cuisine', $cuisine);
                            $query = $qd->getQuery();
                            $restaurants = $query->getResult();


        // IF NAME & ARRONDISSEMENT
        }else if( $name != null && $arron != null && $cuisine == null ){

                            $restaurants = $repository->findBy( array(), array(
                                "name" => 'ASC'
                            ) );

        // IF NAME & CUISINE
        }else if( $name != null && $arron == null && $cuisine != null ){

                            $qd->select(array('r'))
                                ->where("r.name LIKE :name ")
                                ->andWhere("r.cuisine = :cuisine")
                                ->setParameters(array ( 'name'=> "%".$name."%" , 'cuisine'=> $cuisine ) );
                            $query = $qd->getQuery();
                            $restaurants = $query->getResult();

        // IF ARRONDISSEMENT & CUISINE
        }else if( $name == null && $arron != null && $cuisine != null ){

                            $restaurants = $repository->findBy( array(), array(
                                "name" => 'ASC'
                            ) );

        // IF ALL
        }else if( $name != null && $arron != null && $cuisine != null ){

                            $restaurants = $repository->findBy( array(), array(
                            "name" => 'ASC'
                            ) );
         }


            $form = $this->createForm(new SearchType(), $data , array(
                'action' => $this->generateUrl('booking_a_table'),
                'method' => 'POST',
            ));

            return $this->render( 'LesCouvertsBundle:Couverts:booking.html.twig' ,
                           array(
                                'restaurants' => $restaurants ,
                               'ourForm' => $form->createView(),
                                'name' => $complete->names,
                                'cuisine' => $complete->cuisines

                           )
            );
    }

    public function featuredAction(){
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Ranking');
        $qd = $repository->createQueryBuilder('r');
        $order = $qd->add('select','r.restoId')
                    ->orderBy('r.rank','ASC')
                    ->getQuery()
                    ->getResult();
        $results = null;
        $repositoryResto = $this->getDoctrine()->getRepository('LesDataBundle:Restaurants');
             for( $i=0; $i < sizeof($order) ; $i++ ){
                $results[$i] = $repositoryResto->findById($order[$i]);
                 $results[$i] = $results[$i][0];
             }

//            print_r($results);
            return $this->render('LesCouvertsBundle:Featured:featured.html.twig', array( 'restos' => $results ));
    }

}

//        $message = \Swift_Message::newInstance()
//            ->setSubject('Hello Email')
//            ->setFrom('arjruler93@gmail.com')
//            ->setTo('arj196@hotmail.com')
//            ->setBody(
//                "This is a test email"
//            )
//        ;
//        $this->get('mailer')->send($message);
