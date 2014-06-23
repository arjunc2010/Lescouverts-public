<?php

namespace Les\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LesCouvertsBundle:Couverts:index.html.twig');
    }
}
