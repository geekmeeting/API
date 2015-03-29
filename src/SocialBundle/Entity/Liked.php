<?php

namespace SocialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liked
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SocialBundle\Entity\LikedRepository")
 */
class Liked
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
