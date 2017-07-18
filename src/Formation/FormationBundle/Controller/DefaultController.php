<?php

namespace Formation\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="index")
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
     * @Route("/gestion-de-carriere" , name="gestionCarriere")
     */

    public function gestionCarriereAction()
    {
        return $this->render('FormationBundle:Default:gestion-de-carriere.html.twig');
    }
    /**
     * @Route("/gestion-de-carriere/bilan-de-competences", name="bilanCompetence")
     */

    public function bilanCompetencesAction()
    {
        return $this->render('FormationBundle:Default:bilan-de-competences.html.twig');
    }
    /**
     * @Route("/gestion-de-carriere/validation-des-acquis-de-l-experience", name="validationAcquis")
     */

    public function validationAcquisExperienceAction()
    {
        return $this->render('FormationBundle:Default:validation-des-aquis-experience.html.twig');
    }

    /**
     * @Route("/gestion-de-carriere/bilan-mi-carriere", name="bilanMiCarriere")
     */

    public function bilanMiCarriereAction()
    {
        return $this->render('FormationBundle:Default:bilan-mi-carriere.html.twig');
    }
    /**
     * @Route("/gestion-de-carriere/coaching", name="coching")
     */

    public function coachingAction()
    {
        return $this->render('FormationBundle:Default:coaching.html.twig');
    }
    /**
     * @Route("/formations", name="formation")
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
     * @Route("/formations/concepteur-developpeur-informatique" , name="conceptDev")
     */

    public function concepteurDeveloppeurInformatiqueAction()
    {
        return $this->render('FormationBundle:Default:concepteur-developpeur-informatique.html.twig');
    }
    /**
     * @Route("/formations/administrateur-systemes-et-reseaux", name="adminReso")
     */

    public function administrateurSystemesEtReseauxAction()
    {
        return $this->render('FormationBundle:Default:administrateur-systemes-et-reseaux.html.twig');
    }
    /**
     * @Route("/formations/technicien-d-assistance-en-informatique", name="techAssist")
     */

    public function technicienAssistanceEnInformatiqueAction()
    {
        return $this->render('FormationBundle:Default:technicien-assistance-en-informatique.html.twig');
    }
    /**
     * @Route("/formations/technicien-superieur-en-support-informatique" , name="techSup")
     */

    public function technicienSuperieurEnSupportInformatiqueAction()
    {
        return $this->render('FormationBundle:Default:technicien-superieur-en-support-informatique.html.twig');
    }
    /**
     * @Route("/formations/ressources-humaines" , name="formationRh")
     */

    public function ressourcesHumainesAction()
    {
        return $this->render('FormationBundle:Default:ressources-humaines.html.twig');
    }
    /**
     * @Route("/formations/management", name="management")
     */

    public function managementAction()
    {
        return $this->render('FormationBundle:Default:management.html.twig');
    }
    /**
     * @Route("/formations/finance-et-comptabilite", name="compta")
     */

    public function financeEtComptabiliteAction()
    {
        return $this->render('FormationBundle:Default:finance-et-comptabilite.html.twig');
    }
    /**
     * @Route("/formations/developpement-personnel", name="devPerso")
     */

    public function developpementPersonnelAction()
    {
        return $this->render('FormationBundle:Default:developpement-personnel.html.twig');
    }
    /**
     * @Route("/formations/hygiene-et-securite", name="hygieneSecur")
     */

    public function hygieneEtSecuriteAction()
    {
        return $this->render('FormationBundle:Default:hygiene-et-securite.html.twig');
    }
    /**
     * @Route("/formations/langues", name="langue")
     */

    public function languesAction()
    {
        return $this->render('FormationBundle:Default:langues.html.twig');
    }
    /**
     * @Route("/formations/handicap", name="handicap")
     */

    public function formationHandicapAction()
    {
        return $this->render('FormationBundle:Default:formation-handicap.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise", name="creationEntreprise")
     */

    public function creationEntrepriseAction()
    {
        return $this->render('FormationBundle:Default:creation-activite-entreprise.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise/methodologie", name="methodologieEntrprise")
     */

    public function methodologieAction()
    {
        return $this->render('FormationBundle:Default:methodologie-entreprise.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise/financement", name="financementEentreprise")
     */

    public function financementAction()
    {
        return $this->render('FormationBundle:Default:financement-entreprise.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise/formations-et-ateliers", name="formatioAtelier")
     */

    public function formationsEtAteliersAction()
    {
        return $this->render('FormationBundle:Default:formations-et-ateliers.html.twig');
    }
    /**
     * @Route("/creation-d-entreprise/handicap", name="handicapEntreprise")
     */

    public function creationEntrepriseHandicapAction()
    {
        return $this->render('FormationBundle:Default:creation-entreprise-handicap.html.twig');
    }
    /**
     * @Route("/handicap", name="hadic")
     */

    public function handicapAction()
    {
        return $this->render('FormationBundle:Default:handicap.html.twig');
    }
    /**
     * @Route("/handicap/prestations-agefiph", name="prestationsAgefiph")
     */

    public function prestationsAgefiphAction()
    {
        return $this->render('FormationBundle:Default:prestations-agefiph.html.twig');
    }
    /**
     * @Route("/handicap/diagnostic-conseil", name="diagnostiqueConseil")
     */

    public function diagnosticConseilAction()
    {
        return $this->render('FormationBundle:Default:diagnostic-conseils-handicap.html.twig');
    }
    /**
     * @Route("/handicap/bilan-de-maintien-dans-l-emploi", name="maintienEmploiHandicap")
     */

    public function bilanDeMaintienDansEmploiAction()
    {
        return $this->render('FormationBundle:Default:bilan-de-maintien-emploi.html.twig');
    }
    /**
     * @Route("/handicap/ingenierie-de-formations-th",name="handicapInge")
     */

    public function ingenierieDeFormationsThAction()
    {
        return $this->render('FormationBundle:Default:ingenierie-de-formations-handicap.html.twig');
    }
    /**
     * @Route("/handicap/creation-d-activite-handicap", name="creationActivHandicap")
     */

    public function creationActiviteHandicapAction()
    {
        return $this->render('FormationBundle:Default:creation-activite-handicap.html.twig');
    }
    /**
     * @Route("/recrutement", name="recrutement")
     */

    public function recrutementAction()
    {
        return $this->render('FormationBundle:Default:recrutement.html.twig');
    }
    /**
     * @Route("recrutement/methodologie", name="RecrutMetho")
     */

    public function recrutementMethodologieAction()
    {
        return $this->render('FormationBundle:Default:methodologie.html.twig');
    }
    /**
     * @Route("recrutement/prestations-de-recrutement", name="prestRecrutement")
     */

    public function prestationsRecrutementAction()
    {
        return $this->render('FormationBundle:Default:prestations-de-recrutement.html.twig');
    }
    /**
     * @Route("recrutement/recrutement-a-l-international", name="recrutInternational")
     */

    public function recrutementInternationalAction()
    {
        return $this->render('FormationBundle:Default:recrutements-a-l-international.html.twig');
    }
    /**
     * @Route("recrutement/nos-engagements", name="engagement")
     */

    public function nosEngagementsAction()
    {
        return $this->render('FormationBundle:Default:nos-engagements.html.twig');
    }
    /**
     * @Route("/offres-d-emploi", name="offreEmploi")
     */

    public function offresEmploiAction()
    {
        return $this->render('FormationBundle:Default:offres-d-emploi.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/espace-candidats", name="espaceCandiadat")
     */

    public function espaceCandidatsAction()
    {
        return $this->render('FormationBundle:Default:espace-candidats.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/espace-entreprise",name="espaceEntreprise")
     */

    public function espaceEntrepriseAction()
    {
        return $this->render('FormationBundle:Default:espace-entreprise.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/offres-d-emploi-et-stage", name="offreStage")
     */

    public function offresEmploiEtStageAction()
    {
        return $this->render('FormationBundle:Default:offres-d-emploi-et-stage.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/conseils-du-coach", name="conseilCoach")
     */

    public function conseilsDuCoachAction()
    {
        return $this->render('FormationBundle:Default:conseils-du-coach.html.twig');
    }
    /**
     * @Route("/offres-d-emploi/nos-engagements", name="engagementEmploi")
     */

    public function OENosEngagementsAction()
    {
        return $this->render('FormationBundle:Default:nos-engagements.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
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