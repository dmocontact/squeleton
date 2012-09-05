<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // SiteSiteBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'SiteSiteBundle_homepage');
            }
            return array (  '_controller' => 'Site\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'SiteSiteBundle_homepage',);
        }

        // SiteSiteBundle_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Site\\SiteBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'SiteSiteBundle_about',);
        }

        // SiteSiteBundle_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_SiteSiteBundle_contact;
            }
            return array (  '_controller' => 'Site\\SiteBundle\\Controller\\DefaultController::contactAction',  '_route' => 'SiteSiteBundle_contact',);
        }
        not_SiteSiteBundle_contact:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
