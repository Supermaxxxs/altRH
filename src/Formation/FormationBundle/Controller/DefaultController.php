<?php

namespace Formation\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('FormationBundle:Default:index.html.twig');
    }
    
/**
     * @Route("/page1")
     */

    public function pageAction()
    {
        return $this->render('FormationBundle:Default:page_une.html.twig');
    }
}
