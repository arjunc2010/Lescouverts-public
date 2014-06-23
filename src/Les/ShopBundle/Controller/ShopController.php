<?php

namespace Les\ShopBundle\Controller;

use Les\DataBundle\Entity\OpeningSchedule;
use Les\DataBundle\Form\Type\ProductType;
use Les\DataBundle\Form\Type\ShopInformationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Les\DataBundle\Form\Type\MyInformationType;
use Les\DataBundle\Form\Type\MyPersonalInformationType;


class ShopController extends Controller{

    //TODO getUSER
    public function indexAction(){
    $id = 1;
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Shop');
        $result = $repository->findOneById( $id );
        return $this->render("LesShopBundle:Admin:index.html.twig", array( 'shop' => $result  )
        );
    }


    public function myOffersAction( Request $request ){
        $id = 1;
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Shop');
        $result = $repository->findOneById( $id );
        $repository2 = $this->getDoctrine()->getRepository('LesDataBundle:Product');
        $products = $repository2->findByShopID( $result->getId()  );

                if ($request->isXMLHttpRequest()) {
                    $status = false;
                    $action = $request->get('action');
                    $productID = $request->get('id');
                    if($action == 'delete'){
                        $test = $productID;
                        $qd = $repository2->createQueryBuilder('n');
                        $qd->delete()
                            ->where('n.id = :id')
                            ->setParameter('id',$productID);
                        $query = $qd->getQuery();
                        $result = $query->getResult();
                        $status = true;
                    }
                    return new JsonResponse(array(
                        'id' => $request->get('id') , 'status' => $status ,'request' => $request ));
                }


        return $this->render("LesShopBundle:Offers:index.html.twig", array( 'products' => $products  )
        );
    }


    public function myInformationAction( Request $request ){
        $id = 1;
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Shop');
        $result = $repository->findOneById( $id );

            $form = $this->createForm(new ShopInformationType(), $result ,  array(
                'action' => $this->generateUrl('shop_my_information'),
                'method' => 'POST' ));

            $form->handleRequest($request);
            if($form->isValid()){
                $data = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($data);
                $em->flush();
                $em->flush();
                return $this->forward('LesShopBundle:Shop:index');
            }

        return $this->render("LesShopBundle:Information:index.html.twig", array( 'form' => $form->createView()   )
        );
    }

    public function focusAction( $id , Request $request ){
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Product');
        $product = $repository->findOneById( $id  );

        $choices = ['meat', 'Chocolate' ,  'diary', 'other'];
        $form = $this->createForm( new ProductType( $choices ), $product , array(
            'action' => $this->generateUrl('offer_focus', array( 'id' => $id ) ),
            'method' => 'POST' ));

            $form->handleRequest($request);
            if($form->isValid()){
                $data = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($data);
                $em->flush();
                $em->flush();
                return $this->forward('LesShopBundle:Shop:myOffers');
            }

            return $this->render( 'LesShopBundle:Offers:Focus/focus.html.twig', array( 'form' => $form->createView() )  );
    }

} 