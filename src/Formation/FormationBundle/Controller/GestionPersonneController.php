<?php

namespace Formation\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Formation\FormationBundle\Entity\Personne;
use Symfony\Component\HttpFoundation\Request;
use Formation\FormationBundle\Form\PersonneType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class GestionPersonneController extends Controller
{
    /**
     * @Route("/Liste")
     */
    public function ListeAction()
    {
        return $this->render('FormationBundle:GestionPersonne:liste.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('FormationBundle:GestionPersonne:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/SupprimerPersonne")
     */
    public function SupprimerPersonneAction()
    {
        return $this->render('FormationBundle:GestionPersonne:supprimer_personne.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/AfficherPersonne")
     */
    public function AfficherPersonneAction()
    {
        return $this->render('FormationBundle:GestionPersonne:afficher_personne.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Connexion", name="connexion")
     */

    public function ConnexionAction(Request $request)
    {
    $connexion = array('mail' => '' , 'mdp' => '' );
      //$form = $this->get('form.factory')->create(ConnexionType::class, $connexion);
    $form=$this->createFormBuilder($connexion)
        ->add('mail' , TextType::class)
        ->add('mdp', PasswordType::class )
         ->add('connecter', SubmitType::class)
        ->getForm();
      $form->handleRequest($request);
        if($form->isValid()){
            $connexion = $form->getData();
            $connexion['mdp']=md5($connexion['mdp']);
            $personne=$this->getDoctrine()->getManager()->getRepository('FormationBundle:Personne')->findOneBy(array('mail' => $connexion['mail']));
           if($personne->getMdp() == $connexion['mdp']){
                $session = $request->getSession();
                $session->set('id', $personne->getId());
                $session->set('nom', $personne->getNom());
                $session->set('prenom', $personne->getPrenom());
                $session->set('isAdmin', $personne->getEstAdmin());
                //$this->getUser()->setAuthenticated(true);
                //$this->getUser()->setAttribute("nom", $personne->getPersonne());
                //$this->getUser()->setAttribute("login", $prenom->getPrenom());

               return $this->redirectToRoute('gestionCarriere', array(
            // ...
       ));

            }
            else
            {
              return $this->render('FormationBundle:GestionPersonne:connexion.html.twig', array('form' => $form->createView(), 
            // ..
                
        ));  
            }
        }
        return $this->render('FormationBundle:GestionPersonne:connexion.html.twig', array('form' => $form->createView(), 'connexion' => $connexion,
            // ...
        ));
    }


    /**
     * @Route("/InsererPersonne", name="insererPersonne")
     */
    public function InsererPersonneAction(Request $request)
    {
        
        $personne = new Personne();
        $form = $this->get('form.factory')->create(PersonneType::class, $personne);
        $form->handleRequest($request);
        if($form->isValid()){
            $personne->setMdp(md5($personne->getMdp()));
            $personne->setEstAdmin(0);
            $em=$this->getDoctrine()->getManager();
            $em->persist($personne);
            $em->flush();
            return $this->redirectToRoute('index', array(
            // ...
        ));

        }

        return $this->render('FormationBundle:GestionPersonne:inserer_personne.html.twig', array('form' => $form->createView(),
            // ...
        ));
    }
    /**
     * @Route("/deconnexion", name="deconnexion")
     */
    public function DeconnexionAction(Request $request)
    {
        //code
        return $this->redirectToRoute('index', array(
            // ...
        ));
    }

}
