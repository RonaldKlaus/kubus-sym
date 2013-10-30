<?php

namespace HU\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;

class PermissionController extends Controller
{
  public function loginAction()
  {	
  	$request = $this->getRequest();
  	$email = $request->get("loginEmail");
    $password = $request->get("loginPassword");
    	
    // find User
    // HERE CHECK
    $user = array('id' => 1, 'email' => $email, 'password' => $password, 'name' => 'Ronald Klaus', 'pic' => 'ronald_klaus.jpg');  
    // create $session 
    $session = $request->getRequest()->getSession();
    // 
    if (!$session->start()) return $this->render('HUFrontendBundle::fail.html.twig');
    $session->set('logged_user',$user);
    $request->setSession($session);
    //Load model for user
    //if login was successfull, render homepage
    return $this->render('HUBackendBundle::welcome.html.twig', array('user' => $user));
    //else render "login-fail"	        
  }

  public function logoutAction()
  {
  	$session = $this->getRequest()->getSession();
  	$session->clear();
   	return $this->render('HUBackendBundle::welcome.html.twig');
  }

  /**
	* Generate navigation for User
	*/
  public function generate_navigationAction()
  {


  }
}
