<?php

namespace UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use UserBundle\Controller\UserRestController;

class UserRestControllerTest extends WebTestCase
{
	protected $container;
	protected $client;

	public function setUp()
	{

		$this->client = static::createClient();
	}

    public function testPostUser()
    {
 		$this->client->request('POST', '/api/user', array('username' => 'rogi', 'password' => 'rogi'));
        $response = $this->client->getResponse();
        $json = json_decode($response->getContent());

        $userStd = new \stdClass();
        $userStd->username = "rogi";
        $userStd->id = 3;

        $user_array = array($userStd);

        $this->assertEquals($user_array, $json);

 	
    }
}
