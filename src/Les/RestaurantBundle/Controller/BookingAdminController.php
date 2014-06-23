<?php

namespace Les\RestaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Les\DataBundle\Form\Type\MyInformationType;
use Les\DataBundle\Form\Type\MyPersonalInformationType;


class BookingAdminController extends Controller
{

    public function indexAction(){
        return $this->render("LesRestaurantBundle:BookingAdmin:index.html.twig");
    }


}



























