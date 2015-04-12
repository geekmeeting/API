<?php

namespace MovieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MovieController
 * Ce Controller gère toutes les actions liées aux Movies
 *
 * @Route("/movies")
 * @package MovieBundle\Controller
 */
class MovieController extends Controller
{
    /**
     * @Get ("", name="api.getMovieInfo")
     */
    public function getAction()
    {
        return new Response("hello, je suis l'API");
    }
}
