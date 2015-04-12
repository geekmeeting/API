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
     * @ORM\ManyToOne(targetEntity="SocialBundle\Entity\Review", cascade={"persist"})
     */
    private $review;
    
    /**
     * @ORM\ManyToOne(targetEntity="SocialBundle\Entity\Comment", cascade={"persist"})
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity="SocialBundle\Entity\LikeType", cascade={"persist"})
     */
    private $likeType;
    
    /**
     * @ORM\ManyToOne(targetEntity="SocialBundle\Entity\LikeStatus", cascade={"persist"})
     */
    private $likeStatus;
    
    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", cascade={"persist"})
     */
    private $user;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set review
     *
     * @param \SocialBundle\Entity\Review $review
     *
     * @return Liked
     */
    public function setReview(\SocialBundle\Entity\Review $review = null)
    {
        $this->review = $review;

        return $this;
    }

    /**
     * Get review
     *
     * @return \SocialBundle\Entity\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Set comment
     *
     * @param \SocialBundle\Entity\Comment $comment
     *
     * @return Liked
     */
    public function setComment(\SocialBundle\Entity\Comment $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \SocialBundle\Entity\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set likeType
     *
     * @param \SocialBundle\Entity\LikeType $likeType
     *
     * @return Liked
     */
    public function setLikeType(\SocialBundle\Entity\LikeType $likeType = null)
    {
        $this->likeType = $likeType;

        return $this;
    }

    /**
     * Get likeType
     *
     * @return \SocialBundle\Entity\LikeType
     */
    public function getLikeType()
    {
        return $this->likeType;
    }

    /**
     * Set likeStatus
     *
     * @param \SocialBundle\Entity\LikeStatus $likeStatus
     *
     * @return Liked
     */
    public function setLikeStatus(\SocialBundle\Entity\LikeStatus $likeStatus = null)
    {
        $this->likeStatus = $likeStatus;

        return $this;
    }

    /**
     * Get likeStatus
     *
     * @return \SocialBundle\Entity\LikeStatus
     */
    public function getLikeStatus()
    {
        return $this->likeStatus;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Liked
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
