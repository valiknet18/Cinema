<?php
namespace Valiknet\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="proposal")
 */
class Proposal
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    protected $type;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     * @Assert\Email
     */
    protected $email;

    /**
     * @ORM\OneToOne(targetEntity="Movie", inversedBy="proposal")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $movie;

    /**
     * @ORM\OneToOne(targetEntity="Actor", inversedBy="proposal")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $actor;

    /**
     * @ORM\OneToOne(targetEntity="Director", inversedBy="proposal")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $director;

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
     * Set type
     *
     * @param integer $type
     * @return Proposal
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set movie
     *
     * @param \Valiknet\CinemaBundle\Entity\Movie $movie
     * @return Proposal
     */
    public function setMovie(\Valiknet\CinemaBundle\Entity\Movie $movie = null)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return \Valiknet\CinemaBundle\Entity\Movie 
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * Set actor
     *
     * @param \Valiknet\CinemaBundle\Entity\Actor $actor
     * @return Proposal
     */
    public function setActor(\Valiknet\CinemaBundle\Entity\Actor $actor = null)
    {
        $this->actor = $actor;

        return $this;
    }

    /**
     * Get actor
     *
     * @return \Valiknet\CinemaBundle\Entity\Actor 
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Set director
     *
     * @param \Valiknet\CinemaBundle\Entity\Director $director
     * @return Proposal
     */
    public function setDirector(\Valiknet\CinemaBundle\Entity\Director $director = null)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return \Valiknet\CinemaBundle\Entity\Director 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Proposal
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
