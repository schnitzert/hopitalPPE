<?php

namespace PPE\hopitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        return $this->render('PPEhopitalBundle:Default:accueil.html.twig');
    }
    public function urgencesAction()
    {
        return $this->render('PPEhopitalBundle:services:urgences.html.twig');
    }
    public function pediatrieAction()
    {
        return $this->render('PPEhopitalBundle:services:pediatrie.html.twig');
    }
    public function chirurgieAction()
    {
        return $this->render('PPEhopitalBundle:services:chirurgie.html.twig');
    }
    public function imagerieAction()
    {
        return $this->render('PPEhopitalBundle:services:imagerie.html.twig');
    }
    public function informationsAction()
    {
        return $this->render('PPEhopitalBundle:Default:informations.html.twig');
    }
    public function profileAction()
    {
        return $this->render('PPEhopitalBundle:Default:profile.html.twig');
    }
    public function contactAction()
    {
        return $this->render('PPEhopitalBundle:Default:contact.html.twig');
    }
}
