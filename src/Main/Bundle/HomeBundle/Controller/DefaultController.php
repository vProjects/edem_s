<?php

namespace Main\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainHomeBundle:Default:index.html.twig', array('page' => 'Home') );
    }
	
	public function faqAction()
    {
        return $this->render('MainHomeBundle:Default:faq.html.twig', array('page' => 'FAQ'));
    }
	
	public function aboutAction()
    {
        return $this->render('MainHomeBundle:Default:about.html.twig', array('page' => 'About'));
    }
}
