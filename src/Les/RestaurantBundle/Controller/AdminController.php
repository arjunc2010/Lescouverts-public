<?php

namespace Les\RestaurantBundle\Controller;

use Les\DataBundle\Entity\OpeningSchedule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Les\DataBundle\Form\Type\MyInformationType;
use Les\DataBundle\Form\Type\MyPersonalInformationType;


class AdminController extends Controller{

    public function adminAction(){

        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Restaurants');

        $restoId = $this->getUser()->getRestoId();
        if( $restoId != null ){
            $resto = $repository->findOneById( $restoId );
        }else{
            $resto = $repository->findOneById( 1 );
        }

        return $this->render("LesRestaurantBundle:Admin:index.html.twig",
            array( 'resto' => $resto )
        );
    }

    public function myInformationAction( Request $request ){
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Restaurants');
        $repository2 = $this->getDoctrine()->getRepository('LesDataBundle:OpeningSchedule');
        $resto = $repository->findOneById( $this->getUser()->getRestoId() );

//        $resto = $repository->findOneById( 1 );





        $form = $this->createForm(new MyInformationType() , $resto , array(
            'action' => $this->generateUrl('restaurant_my_information'),
            'method' => 'POST',
        ));

// -------------------- FORM HANDLING  -------------------- //
        $form->handleRequest($request);
        if ($form->isValid()){
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();
            $em->flush();
        }

        return $this->render("LesRestaurantBundle:Admin:Information/myInformation.html.twig",
            array( 'form' => $form->createView() )
        );
    }



    //TODO Make Personal Information Table
    public function myPersonalInformationAction( Request $request ){
//        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Restaurants');
//        $person = $repository->findOneByName("Resto du Paris");

        $form = $this->createForm(new MyPersonalInformationType() , array(
            'action' => $this->generateUrl('restaurant_my_information'),
            'method' => 'POST',
        ));

        $form->handleRequest($request);
        if ($form->isValid()){
            $data = $form->getData();
            return new Response(" Test myinformation ");
        }

//                exit(\Doctrine\Common\Util\Debug::dump($this->resto));
        return $this->render("LesRestaurantBundle:Admin:PersonalInformation/myPersonalInformation.html.twig",
            array( 'form' => $form->createView() )
        );
    }

    public function myMenusAction( Request $request ){
        $id = $this->getUser()->getRestoId();

            if ($request->isXMLHttpRequest()) {
                $status = false;
                $action = $request->get('action');
                if($action == 'delete'){
                    $dir = getcwd() . '/bundles/Restaurant/images/' . $id . '/menus';
                    $path = $request->get('path');
                    $path = explode('/',$path);
                    $path = $path[sizeof($path)-1];
                    $file = $dir . '/' . $path ;
                    $output = unlink($file);
                    if( $output == 1 ){
                        $status = true;
                    }
                }
                return new JsonResponse(array( 'status' => $status ,
                            'path' => $request->get('id') ));
            }



        $path = 'bundles/Restaurant/images/'. $id .'/menus';
        $dir = getcwd();
        $dir .= "/" . $path;
        chdir( $dir );
        $i=0;
        if (is_dir($dir)) {
            if ($dh = opendir($dir )) {
                while (($file = readdir($dh)) !== false) {
                    if( filetype( $file ) == "file" ){
                        $filetype = mime_content_type($file);
                        $filetype = explode("/",$filetype);
                        if($filetype[0] == "image" ){
                            $images[$i] = $path . "/". $file;
//                            print_r( $images[$i] . ";;;;;;;");
                            $i++;
                        }
                    }
                }
                closedir($dh);
            }
        }

        $form = $this->createFormBuilder()
                ->add('file','file', array( 'required' => true ) )
                ->add('upload','submit')
                ->getForm();

        //TODO IMAGE EXTENSION HANDLING
        $form->handleRequest( $request );
            if( $form->isValid()){
                $dir = getcwd();

//                $extension = $file->guessExtension();
//                if (!$extension) {
//                    $extension = 'bin';
//                }
                $extension = 'jpg';
                $form['file']->getData()->move($dir, rand(1, 99999).'.'.$extension);
            }
        return $this->render("LesRestaurantBundle:Admin:Menu/myMenus.html.twig" , array ( 'images' => $images , 'id'  => $id ,
                                                                        'form' => $form->createView() ) );
    }

    public function myNewsAction( Request $request ){
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:News');
        $id = $this->getUser()->getRestoId();
//        $query = $this->getDoctrine()->getManager()->createQuery('delete FROM LesDataBundle:News n where n.id = '.$newsID);
//        $result = $query->getResult();
//        print_r($result);

        if ($request->isXMLHttpRequest()) {
                    $status = false;
                    $action = $request->get('action');
                    $newsID = $request->get('id');
                    if($action == 'delete'){
                    $test = $newsID;
                        $qd = $repository->createQueryBuilder('n');
                        $qd->delete()
                            ->where('n.id = :id')
                            ->setParameter('id',$newsID);
                        $query = $qd->getQuery();
                        $result = $query->getResult();
                    }else if($action == 'update'){
                        $string = $request->get('title');
                        $qd = $repository->createQueryBuilder('n');
                        $qd->update()
                            ->set('n.text' , ':text')
                        //TODO MODIFIED DATE
//                            ->set('n.dateModified', new \DateTime("now"))
                            ->where('n.id = :id')
                            ->setParameters( array('id'=> $newsID, 'text' => $string) );
                        $query = $qd->getQuery();
                        $result = $query->getResult();
                    }
                        return new JsonResponse(array(
                        'id' => $request->get('id') , 'request' => $request ));
                }

        $news = $repository->findByrestoId  ( $id );
        $form = $this->createFormBuilder()
            ->add('file','file', array( 'required' => true ) )
            ->add('upload','submit')
            ->getForm();

//        exit(\Doctrine\Common\Util\Debug::dump($news));
        return $this->render("LesRestaurantBundle:Admin:News/myNews.html.twig" ,  array ( 'news' => $news , 'form' => $form->createView() ) );
    }


    public function mySpecialOffersAction(Request $request ){
        $id = $this->getUser()->getRestoId();
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Restaurants');
        $results = $repository->findById($id);
            $special[0] = $results[0]->getSpecial1();
            $special[1] = $results[0]->getSpecial2();
            $special[2] = $results[0]->getSpecial3();

        if ($request->isXMLHttpRequest()) {
            $status = false;
            $action = $request->get('action');
            $specialID = $request->get('id');
            $string = $request->get('text');
            if($action == 'update'){
                $qd = $repository->createQueryBuilder('r');
                $qd->update();
                switch($specialID){
                    case 1 :
                        $qd->set('r.special_1' , ':text');
                        break;
                    case 2 :
                        $qd->set('r.special_2' , ':text');
                        break;
                    case 3:
                        $qd->set('r.special_3' , ':text');
                        break;
                }
                $qd->where('r.id = :id')
                    ->setParameters( array('id'=> $id, 'text' => $string) );
                $query = $qd->getQuery();
                $result = $query->getResult();
            }
            return new JsonResponse(array(
                'id' => $request->get('id') , 'request' => $request ));
        }





        return $this->render("LesRestaurantBundle:Admin:SpecialOffers/mySpecialOffers.html.twig",
                array( 'specials' => $special));
    }

    //TODO MODIFY ENTRY
    public function myEventsAction(Request $request){
        $restoID = $this->getUser()->getRestoId();
        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Party');
        $events = $repository->findByrestoID( $restoID );


//        $qd = $repository->createQueryBuilder('p');
//        $date = new \DateTime( $request->get('date') );
//        $qd->update()
//            ->set('p.name' , ':name')
//            ->set('p.date' , ':date')
//            ->set('p.start' , ':from')
//            ->set('p.end' , ':till')
//            ->where('p.id = :id')
//            ->setParameters( array('id'=> '2',
//                'name' => 'hello world',
//                'date' => $date,
//                'from' => '12:06',
//                'till' => '12:06' ) );
////            ->setParameters( array('id'=> $request->get('id'),
////                    'name' => $request->get('title'),
////                    'date' => $request->get('date'),
////                    'from' => $request->get('from'),
////                    'till' => $request->get('till') ) );
//        $query = $qd->getQuery();
//        $result = $query->getResult();
//






        if ($request->isXMLHttpRequest()) {
            $status = false;
            $action = $request->get('action');
            $partyID = $request->get('id');
            if($action == 'delete'){
                $qd = $repository->createQueryBuilder('p');
                $qd->delete()
                    ->where('p.id = :id')
                    ->setParameter('id',$partyID);
                $query = $qd->getQuery();
                $result = $query->getResult();
            }else if($action == 'update'){
//                $qd = $repository->createQueryBuilder('p');
//                $date = new \DateTime( $request->get('date') );
//                $qd->update()
//                    ->set('p.name' , ':name')
//                    ->set('p.date' , ':date')
//                    ->set('p.start' , ':from')
//                    ->set('p.end' , ':till')
//                    ->where('p.id = :id')
//                    ->setParameters( array('id'=> '2',
//                        'name' => 'hello world 2222',
//                        'date' => $date,
//                        'from' => '12:06',
//                        'till' => '12:06' ) );
////            ->setParameters( array('id'=> $request->get('id'),
////                    'name' => $request->get('title'),
////                    'date' => $request->get('date'),
////                    'from' => $request->get('from'),
////                    'till' => $request->get('till') ) );
//                $query = $qd->getQuery();
//                $result = $query->getResult();
            }
            $test = $action ." + ". $partyID ." + ". $request->get('title') ." + " . $request->get('date') ." + " .
                $request->get('from') ." + " . $request->get('till') ." + " . $request->get('description');
            return new JsonResponse(array(
                'id' => $partyID , 'request' => $request , 'test' => $test));
        }

        for( $i=0; $i < sizeof($events) ; $i++ ){
            $imgPath = 'bundles/Restaurant/images/'. $events[ $i ]->getRestoId() .'/events/'.$events[ $i ]->getMenu();
            if( file_exists( $imgPath ) ) {
                $events[ $i ]->imgPath = $imgPath;
            }else{
                $events[ $i ]->imgPath = "null";
            }

        }

        $form = $this->createFormBuilder()
            ->add('file','file', array( 'required' => true ) )
            ->add('upload','submit')
            ->getForm();

        $form->handleRequest( $request );
        if( $form->isValid()){
            $dir = getcwd();

//                $extension = $file->guessExtension();
//                if (!$extension) {
//                    $extension = 'bin';
//                }
            $extension = 'jpg';
//            $form['file']->getData()->move($dir, rand(1, 99999).'.'.$extension);
            print_r( $form );
        }


        return $this->render("LesRestaurantBundle:Admin:Events/myEvents.html.twig",
                    array( 'events' => $events  , 'form' => $form->createView()));
    }









    public function myRankingAction(){
        $id = $this->getUser()->getRestoId();
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


        return $this->render('LesRestaurantBundle:Admin:Ranking/myRanking.html.twig', array( 'restos' => $results , 'id' => $id ));
    }

    public function myCommentsAction(){
        $id = $this->getUser()->getRestoId();

        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Comments');
        $comments = $repository->findByrestoID($id);

        $repository = $this->getDoctrine()->getRepository('LesDataBundle:FosUser');
        for( $i=0; $i < sizeof($comments); $i++){
            $user = $repository->findById( $comments[$i]->getUserID() );
            $comments[$i]->username = $user[0]->getUsername();
        }
//            print_r($comments);
        return $this->render('LesRestaurantBundle:Admin:Comments/myComments.html.twig', array( 'comments' => $comments , 'id' => $id ));
    }

} 