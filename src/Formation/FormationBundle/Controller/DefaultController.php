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
     * @Route("/404")
     */

    public function errorAction()
    {
        return $this->render('FormationBundle:Default:404.html.twig');
    }

    /**
     * @Route("/gestion-de-carriere")
     */

    public function gestionCarriereAction()
    {
        return $this->render('FormationBundle:Default:gestion-de-carriere.html.twig');
    }
    /**
     * @Route("/gestion-de-carriere/bilan-de-competences")
     */

    public function bilanCompetencesAction()
    {
        return $this->render('FormationBundle:Default:bilan-de-competences.html.twig');
    }
    /**
     * @Route("/gestion-de-carriere/validation-des-acquis-de-l-experience")
     */

    public function validationAcquisExperienceAction()
    {
        return $this->render('FormationBundle:Default:validation-des-acquis-de-l-experience.html.twig');
    }
    /**
     * @Route("/gestion-de-carriere/bilan-mi-carriere")
     */

    public function bilanMiCarriereAction()
    {
        return $this->render('FormationBundle:Default:bilan-mi-carriere.html.twig');
    }
    /**
     * @Route("/gestion-de-carriere/coaching")
     */

    public function coachingAction()
    {
        return $this->render('FormationBundle:Default:coaching.html.twig');
    }
    /**
     * @Route("/formations")
     */

    public function formationsAction()
    {
        return $this->render('FormationBundle:Default:formations.html.twig');
    }
    /**
     * @Route("/formations/informatique")
     */

    public function informatiqueAction()
    {
        return $this->render('FormationBundle:Default:informatique.html.twig');
    }
    /**
     * @Route("/formations/concepteur-developpeur-informatique")
     */

    public function concepteurDeveloppeurInformatiqueAction()
    {
        return $this->render('FormationBundle:Default:concepteur-developpeur-informatique.html.twig');
    }
    /**
     * @Route("/formations/administrateur-systemes-et-reseaux")
     */

    public function administrateurSystemesEtReseauxAction()
    {
        return $this->render('FormationBundle:Default:administrateur-systemes-et-reseaux.html.twig');
    }
    /**
     * @Route("/formations/technicien-d-assistance-en-informatique")
     */

    public function technicienAssistanceEnInformatiqueAction()
    {
        return $this->render('FormationBundle:Default:technicien-d-assistance-en-informatique.html.twig');
    }
    /**
     * @Route("/formations/technicien-superieur-en-support-informatique")
     */

    public function technicienSuperieurEnSupportInformatiqueAction()
    {
        return $this->render('FormationBundle:Default:technicien-superieur-en-support-informatique.html.twig');
    }
    /**
     * @Route("/formations/ressources-humaines")
     */

    public function ressourcesHumainesAction()
    {
        return $this->render('FormationBundle:Default:ressources-humaines.html.twig');
    }
    /**
     * @Route("/formations/management")
     */

    public function managementAction()
    {
        return $this->render('FormationBundle:Default:management.html.twig');
    }
    /**
     * @Route("/formations/finance-et-comptabilite")
     */

    public function financeEtComptabiliteAction()
    {
        return $this->render('FormationBundle:Default:finance-et-comptabilite.html.twig');
    }
    /**
     * @Route("/formations/developpement-personnel")
     */

    public function developpementPersonnelAction()
    {
        return $this->render('FormationBundle:Default:developpement-personnel.html.twig');
    }
    /**
     * @Route("/formations/hygiene-et-securite")
     */

    public function hygieneEtSecuriteAction()
    {
        return $this->render('FormationBundle:Default:hygiene-et-securite.html.twig');
    }
    /**
     * @Route("/formations/langues")
     */

    public function languesAction()
    {
        return $this->render('FormationBundle:Default:langues.html.twig');
    }
    /**
     * @Route("/formations/handicap")
     */

    public function formationHandicapAction()
    {
        return $this->render('FormationBundle:Default:formation-handicap.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise")
     */

    public function creationEntrepriseAction()
    {
        return $this->render('FormationBundle:Default:creation-d-entreprise.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise/methodologie")
     */

    public function methodologieAction()
    {
        return $this->render('FormationBundle:Default:methodologie.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise/financement")
     */

    public function financementAction()
    {
        return $this->render('FormationBundle:Default:financement.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise/formations-et-ateliers")
     */

    public function formationsEtAteliersAction()
    {
        return $this->render('FormationBundle:Default:formations-et-ateliers.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise/handicap")
     */

    public function creationEntrepriseHandicapAction()
    {
        return $this->render('FormationBundle:Default:creation-entreprise-handicap.html.twig');
    }
    /**
     * @Route("/handicap")
     */

    public function handicapAction()
    {
        return $this->render('FormationBundle:Default:handicap.html.twig');
    }
    /**
     * @Route("/handicap/prestations-agefiph")
     */

    public function prestationsAgefiphAction()
    {
        return $this->render('FormationBundle:Default:prestations-agefiph.html.twig');
    }
    /**
     * @Route("/handicap/diagnostic-conseil")
     */

    public function diagnosticConseilAction()
    {
        return $this->render('FormationBundle:Default:diagnostic-conseil.html.twig');
    }
    /**
     * @Route("/handicap/bilan-de-maintien-dans-l-emploi")
     */

    public function bilanDeMaintienDansEmploiAction()
    {
        return $this->render('FormationBundle:Default:bilan-de-maintien-dans-l-emploi.html.twig');
    }
    /**
     * @Route("/handicap/ingenierie-de-formations-th")
     */

    public function ingenierieDeFormationsThAction()
    {
        return $this->render('FormationBundle:Default:ingenierie-de-formations-th.html.twig');
    }
    /**
     * @Route("/handicap/creation-d-activite-handicap")
     */

    public function creationActiviteHandicapAction()
    {
        return $this->render('FormationBundle:Default:creation-d-activite-handicap.html.twig');
    }
    /**
     * @Route("/recrutement")
     */

    public function recrutementAction()
    {
        return $this->render('FormationBundle:Default:recrutement.html.twig');
    }
    /**
     * @Route("recrutement/methodologie")
     */

    public function recrutementMethodologieAction()
    {
        return $this->render('FormationBundle:Default:methodologie.html.twig');
    }
    /**
     * @Route("recrutement/prestations-de-recrutement")
     */

    public function prestationsRecrutementAction()
    {
        return $this->render('FormationBundle:Default:prestations-de-recrutement.html.twig');
    }
    /**
     * @Route("recrutement/recrutement-a-l-international")
     */

    public function recrutementInternationalAction()
    {
        return $this->render('FormationBundle:Default:recrutement-a-l-international.html.twig');
    }
    /**
     * @Route("recrutement/nos-engagements")
     */

    public function nosEngagementsAction()
    {
        return $this->render('FormationBundle:Default:nos-engagements.html.twig');
    }
    /**
     * @Route("/offres-d-emploi")
     */

    public function offresEmploiAction()
    {
        return $this->render('FormationBundle:Default:offres-d-emploi.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/espace-candidats")
     */

    public function espaceCandidatsAction()
    {
        return $this->render('FormationBundle:Default:espace-candidats.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/espace-entreprise")
     */

    public function espaceEntrepriseAction()
    {
        return $this->render('FormationBundle:Default:espace-entreprise.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/offres-d-emploi-et-stage")
     */

    public function offresEmploiEtStageAction()
    {
        return $this->render('FormationBundle:Default:offres-d-emploi-et-stage.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/conseils-du-coach")
     */

    public function conseilsDuCoachAction()
    {
        return $this->render('FormationBundle:Default:conseils-du-coach.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/nos-engagements")
     */

    public function OENosEngagementsAction()
    {
        return $this->render('FormationBundle:Default:nos-engagements.html.twig');
    }
    /**
     * @Route("/contact")
     */

    public function contactAction()
    {
        return $this->render('FormationBundle:Default:contact.html.twig');
    }
    /**
     * @Route("/contact/nos-implantations")
     */

    public function nosImplantationsAction()
    {
        return $this->render('FormationBundle:Default:nos-implantations.html.twig');
    }
    /**
     * @Route("/contact/nous-contacter")
     */

    public function nousContacterAction()
    {
        return $this->render('FormationBundle:Default:nous-contacter.html.twig');
    }
}