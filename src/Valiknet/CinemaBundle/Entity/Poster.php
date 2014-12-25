<?php
namespace Valiknet\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="poster")
 */
class Poster
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $url;

    /**
     * @ORM\ManyToOne(targetEntity="Movie", inversedBy="posters")
     */
    protected $movie;

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
     * Set url
     *
     * @param string $url
     * @return Poster
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set movie
     *
     * @param \Valiknet\CinemaBundle\Entity\Movie $movie
     * @return Poster
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
}
