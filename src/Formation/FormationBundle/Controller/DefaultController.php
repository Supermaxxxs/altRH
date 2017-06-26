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
     * @Route("/about-us")
     */

    public function aboutUsAction()
    {
        return $this->render('FormationBundle:Default:about-us.html.twig');
    }
    /**
     * @Route("/blog-detail")
     */

    public function blogDetailAction()
    {
        return $this->render('FormationBundle:Default:blog-detail.html.twig');
    }
    /**
     * @Route("/blog-detail-wls")
     */

    public function blogDetailWlsAction()
    {
        return $this->render('FormationBundle:Default:blog-detail-wls.html.twig');
    }
    /**
     * @Route("/blog-grid")
     */

    public function blogGridAction()
    {
        return $this->render('FormationBundle:Default:blog-grid.html.twig');
    }
    /**
     * @Route("/blog-grid-wls")
     */

    public function blogGridWlsAction()
    {
        return $this->render('FormationBundle:Default:blog-grid-wls.html.twig');
    }
    /**
     * @Route("/blog-grid-wrs")
     */

    public function blogGridWrsAction()
    {
        return $this->render('FormationBundle:Default:blog-grid-wrs.html.twig');
    }
    /**
     * @Route("/blog-large")
     */

    public function blogLargeAction()
    {
        return $this->render('FormationBundle:Default:blog-large.html.twig');
    }
    /**
     * @Route("/blog-large-wls")
     */

    public function blogLargeWlsAction()
    {
        return $this->render('FormationBundle:Default:blog-large-wls.html.twig');
    }
    /**
     * @Route("/blog-medium")
     */

    public function blogMediumAction()
    {
        return $this->render('FormationBundle:Default:blog-medium.html.twig');
    }
    /**
     * @Route("/contact-us")
     */

    public function contactUsAction()
    {
        return $this->render('FormationBundle:Default:contact-us.html.twig');
    }
    /**
     * @Route("/course-detail")
     */

    public function courseDetailAction()
    {
        return $this->render('FormationBundle:Default:course-detail.html.twig');
    }
    /**
     * @Route("/course-detail-wls")
     */

    public function courseDetailWlsAction()
    {
        return $this->render('FormationBundle:Default:course-detail-wls.html.twig');
    }
    /**
     * @Route("/course-grid")
     */

    public function courseGridAction()
    {
        return $this->render('FormationBundle:Default:course-grid.html.twig');
    }
    /**
     * @Route("/course-grid-wls")
     */

    public function courseGridWlsAction()
    {
        return $this->render('FormationBundle:Default:course-grid-wls.html.twig');
    }
    /**
     * @Route("/course-grid-wrs")
     */

    public function courseGridWrsAction()
    {
        return $this->render('FormationBundle:Default:course-grid-wrs.html.twig');
    }
    /**
     * @Route("/course-list")
     */

    public function courseListAction()
    {
        return $this->render('FormationBundle:Default:course-list.html.twig');
    }
    /**
     * @Route("/course-list-wls")
     */

    public function courseListWlsAction()
    {
        return $this->render('FormationBundle:Default:course-list-wls.html.twig');
    }
    /**
     * @Route("/course-modren")
     */

    public function courseModrenAction()
    {
        return $this->render('FormationBundle:Default:course-modren.html.twig');
    }
    /**
     * @Route("/course-modren-wls")
     */

    public function courseModrenWlsAction()
    {
        return $this->render('FormationBundle:Default:course-modren-wls.html.twig');
    }
    /**
     * @Route("/course-modren-wrs")
     */

    public function courseModrenWrsAction()
    {
        return $this->render('FormationBundle:Default:course-modren-wrs.html.twig');
    }
    /**
     * @Route("/event-detail")
     */

    public function eventDetailAction()
    {
        return $this->render('FormationBundle:Default:event-detail.html.twig');
    }
    /**
     * @Route("/event-detail-wls")
     */

    public function eventDetailWlsAction()
    {
        return $this->render('FormationBundle:Default:event-detail-wls.html.twig');
    }
    /**
     * @Route("/event-grid")
     */

    public function eventGridAction()
    {
        return $this->render('FormationBundle:Default:event-grid.html.twig');
    }
    /**
     * @Route("/event-grid-wls")
     */

    public function eventGridWlsAction()
    {
        return $this->render('FormationBundle:Default:event-grid-wls.html.twig');
    }
    /**
     * @Route("/event-grid-wrs")
     */

    public function eventGridWrsAction()
    {
        return $this->render('FormationBundle:Default:event-grid-wrs.html.twig');
    }
    /**
     * @Route("/event-list")
     */

    public function eventListAction()
    {
        return $this->render('FormationBundle:Default:event-list.html.twig');
    }
    /**
     * @Route("/event-list-wls")
     */

    public function eventListWlsAction()
    {
        return $this->render('FormationBundle:Default:event-list-wls.html.twig');
    }
    /**
     * @Route("/event-medium")
     */

    public function eventMediumAction()
    {
        return $this->render('FormationBundle:Default:event-medium.html.twig');
    }
    /**
     * @Route("/faq")
     */

    public function faqAction()
    {
        return $this->render('FormationBundle:Default:faq.html.twig');
    }
    /**
     * @Route("/gallery")
     */

    public function galleryAction()
    {
        return $this->render('FormationBundle:Default:gallery.html.twig');
    }
    /**
     * @Route("/gallery-view-two")
     */

    public function galleryViewTwoAction()
    {
        return $this->render('FormationBundle:Default:gallery-view-two.html.twig');
    }
    /**
     * @Route("/index-two")
     */

    public function indexTwoAction()
    {
        return $this->render('FormationBundle:Default:index-two.html.twig');
    }
    /**
     * @Route("/search-result")
     */

    public function searchResultAction()
    {
        return $this->render('FormationBundle:Default:search-result.html.twig');
    }
    /**
     * @Route("/shop-detail")
     */

    public function shopDetailAction()
    {
        return $this->render('FormationBundle:Default:shop-detail.html.twig');
    }
    /**
     * @Route("/shop-detail-wls")
     */

    public function shopDetailWlsAction()
    {
        return $this->render('FormationBundle:Default:shop-detail-wls.html.twig');
    }
    /**
     * @Route("/shop-grid")
     */

    public function shopGridAction()
    {
        return $this->render('FormationBundle:Default:shop-grid.html.twig');
    }
    /**
     * @Route("/shop-grid-wls")
     */

    public function shopGridWlsAction()
    {
        return $this->render('FormationBundle:Default:shop-grid-wls.html.twig');
    }
    /**
     * @Route("/shop-grid-wrs")
     */

    public function shopGridWrsAction()
    {
        return $this->render('FormationBundle:Default:shop-grid-wrs.html.twig');
    }
    /**
     * @Route("/shop-list")
     */

    public function shopListAction()
    {
        return $this->render('FormationBundle:Default:shop-list.html.twig');
    }
    /**
     * @Route("/shop-list-wls")
     */

    public function shopListWlsAction()
    {
        return $this->render('FormationBundle:Default:shop-list-wls.html.twig');
    }
    /**
     * @Route("/shop-list-wrs")
     */

    public function shopListWrsAction()
    {
        return $this->render('FormationBundle:Default:shop-list-wrs.html.twig');
    }
    /**
     * @Route("/team-grid")
     */

    public function teamGridAction()
    {
        return $this->render('FormationBundle:Default:team-grid.html.twig');
    }
    /**
     * @Route("/team-grid-wls")
     */

    public function teamGridWlsAction()
    {
        return $this->render('FormationBundle:Default:team-grid-wls.html.twig');
    }
    /**
     * @Route("/team-grid-wrs")
     */

    public function teamGridWrsAction()
    {
        return $this->render('FormationBundle:Default:team-grid-wrs.html.twig');
    }
    
}
