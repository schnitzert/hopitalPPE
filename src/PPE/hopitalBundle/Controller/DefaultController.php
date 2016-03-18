<?php

namespace PPE\hopitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        return $this->render('PPEhopitalBundle:Default:accueil.html.twig');
    }
    public function chirurgieAction()
    {
        return $this->render('PPEhopitalBundle:Default:chirurgie.html.twig');
    }
    public function radiologieAction()
    {
        return $this->render('PPEhopitalBundle:Default:radiologie.html.twig');
    }
    public function informationsAction()
    {
        return $this->render('PPEhopitalBundle:Default:informations.html.twig');
    }
    public function profileAction()
    {
        return $this->render('PPEhopitalBundle:Default:profile.html.twig');
    }

}
