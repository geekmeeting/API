<?php

namespace MovieBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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
    	$uri = 'http://www.omdbapi.com/?t='.$title.'&y=&plot=short&r=json';
    	$movie = file_get_contents($uri);
        return new Response($movie);
    }
}