<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use UserBundle\Controller\UserRestController;

class UserRestControllerTest extends WebTestCase
{
	protected $user;
	protected $userRest;
	protected $request;
	protected $parameterBag;

	public function setUp()
	{
		$this->user = \Phake::mock('UserBundle\Entity\User');
		$this->request = \Phake::mock('Symfony\Component\HttpFoundation\Request');
		$this->parameterBag = \Phake::mock('\Symfony\Component\HttpFoundation\ParameterBag');
		
		$this->userRest = new UserRestController();
	}

    public function testPostUser()
    {
  
    	\Phake::when($this->request->request)->get('username')->thenReturn("rogi");

        $this->assertEquals(1, $this->userRest->postUserAction($this->request));

 
    }
}
