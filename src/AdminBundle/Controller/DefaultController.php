<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function AdminAction()
    {
    	$listePersonne = $this->getDoctrine()->getManager()->getRepository('FormationBundle:Personne')->findSortedByName();  
        return $this->render('FormationBundle:Default:admin-panel.html.twig', array("listePersonne" => $listePersonne));
    }
}
