<?php

namespace Site\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\SiteBundle\Entity\Enquiry;
use Site\SiteBundle\Form\EnquiryType;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('SiteSiteBundle:Default:index.html.twig');
    }
    
    public function aboutAction()
    {
    	return $this->render('SiteSiteBundle:Default:about.html.twig');
    }
    
    public function contactAction()
    {
    	$enquiry = new Enquiry();
	    $form = $this->createForm(new EnquiryType(), $enquiry);
	
	    $request = $this->getRequest();
	    if ($request->getMethod() == 'POST') {
	        $form->bindRequest($request);
	
		    if ($form->isValid()) {
		        $message = \Swift_Message::newInstance()
		            ->setSubject('Contact enquiry from squeleton')
		            ->setFrom('test@msn.com')
		            ->setTo($this->container->getParameter('site_site.emails.contact_email'))
		            ->setBody($this->renderView('SiteSiteBundle:Default:contactEmail.txt.twig', array('enquiry' => $enquiry)));
		        $this->get('mailer')->send($message);
		
		        $this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');
		
		        // Redirect - This is important to prevent users re-posting
		        // the form if they refresh the page
		        return $this->redirect($this->generateUrl('SiteSiteBundle_contact'));
		    }
	    }
	
	    return $this->render('SiteSiteBundle:Default:contact.html.twig', array(
	        'form' => $form->createView()
	    ));
    }
}
