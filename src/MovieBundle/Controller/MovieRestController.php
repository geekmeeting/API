<?php

namespace MovieBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Client;
/**
 * Class MovieRestController
 * Ce Controller gère toutes les actions liées aux Movies
 *
 * @package MovieBundle\Controller
 */
class MovieRestController extends Controller
{
    /**
     * @Get ("/movie/{title}")
     */
    public function getMovieAction($title)
    {
    	$client = $this->get('rest.ws.client');
		$res = $client->getMovieByTitle($title);
		
		return new Response($res);




		/*$uri = 'http://www.omdbapi.com/?t='.$title.'&y=&plot=short&r=json';
		$service_url = $uri;
		$curl = curl_init($service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);

		if ($curl_response === false) 
		{
		    $info = curl_getinfo($curl);
		    curl_close($curl);
		    die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}

		curl_close($curl);
		$movie = json_decode($curl_response);


		if (isset($movie->response->status) && $movie->response->status == 'ERROR') 
		{
    		die('error occured: ' . $movie->response->errormessage);
		}
	
		echo 'response ok!';

        return $movie;*/
    }
}