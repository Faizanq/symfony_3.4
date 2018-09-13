<?php

namespace Bookkeeper\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BookController extends Controller
{
    // public function indexAction()
    // {
    //     return $this->render('BookkeeperManagerBundle:Default:index.html.twig');
    // }
    public function indexAction(){
    	return $this->render('BookkeeperManagerBundle:Book:index.html.twig');
    }

	public function showAction($id){
		return $this->render('BookkeeperManagerBundle:Book:show.html.twig');
    }

    public function newAction(){
    	return $this->render('BookkeeperManagerBundle:Book:new.html.twig');

    }

    public function CreateAction(Request $request){
    	
    }

    public function EditAction($id){
    	return $this->render('BookkeeperManagerBundle:Book:edit.html.twig');
    }

    public function UpdateAction(Request $request,$id){
    	
    }

    public function deleteAction(Request $request,$id){
    	
    }
}
