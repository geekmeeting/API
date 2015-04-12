<?php

namespace MovieBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class MovieController
 * Ce Controller gère toutes les actions liées aux Movies
 *
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