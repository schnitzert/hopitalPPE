<?php

namespace PPE\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PPEUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
