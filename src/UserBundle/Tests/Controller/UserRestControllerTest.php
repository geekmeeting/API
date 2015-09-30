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
/*		static::$kernel = static::createKernel();
		static::$kernel->boot();*/

		/*$this->container = static::$kernel->getContainer();*/

		$this->client = static::createClient();
	}

    public function testPostUser()
    {
 		$this->client->request('POST', '/api/user', array('username' => 'rogi', 'password' => 'rogi'));
        $response = $this->client->getResponse();
        $json = json_decode($response->getContent());
        var_dump($response); die();
        $this->assertEquals(1, $json);

 	
    }
}
