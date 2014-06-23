<?php

namespace Les\RestaurantBundle\Controller;

use Les\DataBundle\Entity\Comments;
use Les\DataBundle\Entity\Rating;
use Les\DataBundle\Form\Type\FeedbackType;
use Les\DataBundle\Form\Type\RatingType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Les\DataBundle\Form\Type\MyInformationType;
use Les\DataBundle\Form\Type\MyPersonalInformationType;


class RestaurantController extends Controller
{

    //TODO FEEDBACK TO AJAX
    public function homepageAction($id , Request $request)
    {
                $repository = $this->getDoctrine()->getRepository('LesDataBundle:Restaurants');
                $details = $repository->find($id);

//                $repository = $this->getDoctrine()->getRepository('LesDataBundle:OpeningSchedule');
//                $timings = $repository->findByRestoID($id);

                $repository = $this->getDoctrine()->getRepository('LesDataBundle:Comments');
                $comments = $repository->findByRestoID($id);

                $repository = $this->getDoctrine()->getRepository('LesDataBundle:FosUser');
                  for( $i=0; $i < sizeof($comments); $i++){
                            $user = $repository->findById( $comments[$i]->getUserID() );
                            $comments[$i]->username = $user[0]->getUsername();
                  }


        $path = 'bundles/Restaurant/images/'. $id .'/main-photos';
        $dir = getcwd();
        $checkDir = explode("\\",$dir);
        if( $checkDir[ sizeof($checkDir)-1 ] != "main-photos" ){
            $dir .= "/" . $path;
            chdir( $dir );
        }
        $i=0;
        $images = null;
        if (is_dir($dir)) {
            if ($dh = opendir($dir )) {
                while (($file = readdir($dh)) !== false) {
                    if( filetype( $file ) == "file" ){
                        $filetype = mime_content_type($file);
                        $filetype = explode("/",$filetype);
                        if($filetype[0] == "image" ){
                            $images[$i] = $path . "/". $file;
//                            print_r($file);
                            $i++;
                        }
                    }
                }
                closedir($dh);
            }
        }

        $form = $this->createForm(new FeedbackType(), array(
            'action' => $this->generateUrl('feedback',array( 'id' => $id )),
            'method' => 'POST'
        ));
                $form->handleRequest( $request );
                if( $form->isValid() ){
                    $data = $form->getData();
                    $comment = new Comments();
                    $comment->setRestoID( $id );
                    $comment->setText( $data['text'] );
                    $comment->setDateCreated( new \DateTime("now") );
                    $comment->setUserID(1); //TODO Default Value

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($comment);
                    $em->flush();
                }

//        print_r( $details);
//        print_r( $timings[0]);
        return $this->render('LesRestaurantBundle:Restaurant:homepage.html.twig',
                                                                            array('details' => $details,
//                                                                                  'timings' => $timings[0],
                                                                                  'comments' => $comments,
                                                                                  'id' => $id,
                                                                                  'images' => $images,
                                                                                   'form' => $form->createView()
                                                                            ));
    }


    public function menusAction( $id ){
        $path = 'bundles/Restaurant/images/'. $id .'/menus';
        $dir = getcwd();
        $dir .= "/" . $path;
             chdir( $dir );
        $i=0;
        $images = null;
        if (is_dir($dir)) {
            if ($dh = opendir($dir )) {
                while (($file = readdir($dh)) !== false) {
                    if( filetype( $file ) == "file" ){
                      $filetype = mime_content_type($file);
                      $filetype = explode("/",$filetype);
                            if($filetype[0] == "image" ){
                                $images[$i] = $path . "/". $file;
                                $i++;
                            }
                    }
                }
                closedir($dh);
            }
        }
//                exit(\Doctrine\Common\Util\Debug::dump($finder));
        return $this->render("LesRestaurantBundle:Restaurant:Menu/menu.html.twig" , array ( 'images' => $images ) );
    }

    public function eventsAction( $id , Request $request ){


        $repository = $this->getDoctrine()->getRepository('LesDataBundle:Party');
        $events = $repository->findByRestoID( $id );

        return $this->render("LesRestaurantBundle:Restaurant:Events/events.html.twig", array ( 'events' => $events ) );
    }




    public function newsAction( $id ){

        $repository = $this->getDoctrine()
            ->getRepository('LesDataBundle:News');
        $news = $repository->findByRestoId( $id );


        return $this->render("LesRestaurantBundle:Restaurant:News/news.html.twig", array ( 'news' => $news ) );
    }

    //TODO
    public function similarAction(){

        return $this->render("LesRestaurantBundle:Restaurant:Similar/similar.html.twig");
    }

    //TODO
    public function recommendAction(){

        return $this->render("LesRestaurantBundle:Restaurant:Recommend/recommend.html.twig");
    }


    public function ratingAction( $id , Request $request ){
        $form = $this->createForm(new RatingType(), array(
                'action' => $this->generateUrl('rating', array ( 'id' => $id) ),
                'method' => 'POST'
        ));
                $form->handleRequest( $request );
                        if( $form->isValid() ){
                            $data = $form->getData();
                            $rating = new Rating();
                            $rating->setRestoId( $id );
                            $rating->setDate( new \DateTime("now") );
                            $rating->setService($data['service'] );
                            $rating->setPlatter($data['platter'] );
                            $rating->setQuality($data['quality'] );
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($rating);
                            $em->flush();

                            return $this->forward("LesRestaurantBundle:Restaurant:homepage" , array( 'id' => $id ) );
                        }

        return $this->render("LesRestaurantBundle:Restaurant:Rating/rating.html.twig" , array (
                        'form' => $form->createView()
        ) );
    }

    //TODO UserID set as default, needs to be $this->getUser()
    //TODO finish this
    public function feedbackAction( $id , Request $request ){
           $form = $this->createForm(new FeedbackType(), array(
              'action' => $this->generateUrl('feedback',array( 'id' => $id )),
              'method' => 'POST'
           ));
                $form->handleRequest( $request );
                if( $form->isValid() ){
                    $data = $form->getData();
                    $comment = new Comments();
                        $comment->setRestoID( $id );
                        $comment->setText( $data['text'] );
                        $comment->setDateCreated( new \DateTime("now") );
                        $comment->setUserID( $this->getUser()->getId() ); //TODO Default Value

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($comment);
                    $em->flush();


                    return $this->forward("LesRestaurantBundle:Restaurant:homepage" , array( 'id' => $id ) );
                }
        return $this->render("LesRestaurantBundle:Restaurant:Feedback/feedback.html.twig", array( 'form' => $form->createView()  ));
    }



}



























