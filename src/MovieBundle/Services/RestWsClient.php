<?php
/**
 * Created by PhpStorm.
 * User: Mostafa.FATAH.ext
 * Date: 09/07/14
 * Time: 11:27
 */

namespace MovieBundle\Services;

use Doctrine\ORM\EntityManager;
use Sodexo\Bundle\Beneficiaire\ApiBundle\Content\AbstractContent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\Client;

/**
 * Class RestApi
 * Le rôle de ce service est de gérer tous les appels aux différents web service REST
 * fournisseurs de données. Ensuite, il appelle un autre web service pour la transformation
 * du résultat du web service aux formats des données qui correspond dans le respertoire "Content"
 *
 * @package MovieBundle\Services
 */
class RestWsClient
{
    /**
     * @var GuzzleHttp\Client
     */
    protected $client;

    /**
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param   $title
     * @return AbstractContent
     */
    public function getMovieByTitle($title) {
        $response = $this->client->request('GET', 'http://www.omdbapi.com/?t='.$title.'&y=&plot=short&r=json');

        $movie = $response->getBody();

        return $movie;
    }
}