<?php

namespace MMM\Bundle\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MMMFrontEndBundle:Default:index.html.twig', array('name' => $name));
    }
}
