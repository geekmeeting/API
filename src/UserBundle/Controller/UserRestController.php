<?php

namespace UserBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserRestController extends Controller
{

  public function getUsersAction(){
    $users = $this->getDoctrine()->getRepository('UserBundle:User')->findAll();
    
    if(!is_object($users)){
      //throw $this->createNotFoundException();
    }

    return $users;
  }
}