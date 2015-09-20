<?php

namespace UserBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserRestController extends Controller
{

  /**
   * @Post ("/user")
   */
  public function postUserAction(Request $request){

  	$username = $request->request->get('username');
  	$password = $request->request->get('password');  // il faut régler le pb du mot de pass crypté et salt

  	$password ="rogi{g8sg9ivlcz4sw4go8o84488wg8cws8o}";
    
    $user = $this->getDoctrine()->getRepository('UserBundle:User')->findBy(array(
                                                                                  'username' => $username,
    																		                                          'password' => $password)
 																	                                        );

    if(!is_object($user)){
      //throw $this->createNotFoundException();
    }

    return $user;

  }
}