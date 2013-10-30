<?php

namespace HU\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction($id, $min_number = 0, $max_number = 1000)
    {
        // save changed model
        $user = array('id' => $id);
        return $this->render('HUBackendBundle:User:index.html.twig', array('user' => $user, 'min_number' => $min_number, 'max_number' => $max_number));
    }

    public function createAction($id)
    {
        // save changed model
        $user = array('id' => $id);
    	return $this->render('HUBackendBundle:User:create.html.twig', array('user' => $user));
    }

    public function newAction()
    {
    	// call create form
    	return $this->render('HUBackendBundle:User:new.html.twig');
    }

    public function updateAction($id)
    {
    	// save changed model
        $user = array('id' => $id);
        return $this->render('HUBackendBundle:User:update.html.twig', array('user' => $user));
    }

    public function deleteAction($id)
    {
    	// delete model
        $user = array('id' => $id);
        return $this->render('HUBackendBundle:User:delete.html.twig', array('user' => $user));
    }

    public function showAction($id)
    {
    	// show data of the user model
        $user = array('id' => $id);
        return $this->render('HUBackendBundle:User:show.html.twig', array('user' => $user));
    }

    public function editAction($id)
    {
    	// show data for editing	
         $user = array('id' => $id);
        return $this->render('HUBackendBundle:User:edit.html.twig', array('user' => $user));
    }

     public function registerAction($role_id, $pp_id)
    {
    	// show data for editing	
        return $this->render('HUBackendBundle:User:register.html.twig', array('role_id' => $role_id, 'pp_id' => $pp_id));
    }

}
