<?php

namespace Bookkeeper\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	// public function indexAction(){
 //    	// return new Response("Hello");
 //    	return $this->render('BookkeeperHelloWorldBundle:Default:index.html.twig
 //    		',['test'=>'test']);
 //    }

    public function indexAction()
    {
        return $this->render('BookkeeperHelloWorldBundle:Default:index.html.twig');
    }
    public function viewAction()
    {
        return $this->render('BookkeeperHelloWorldBundle:Default:view.html.twig');
    }

    
}
