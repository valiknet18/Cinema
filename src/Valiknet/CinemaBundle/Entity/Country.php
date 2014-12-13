<?php
namespace Valiknet\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=10)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="Movie", mappedBy="country")
     */
    protected $movies;

    /**
     * @ORM\OneToMany(targetEntity="Actor", mappedBy="country")
     */
    protected $actors;

    /**
     * @ORM\OneToMany(targetEntity="Producer", mappedBy="country")
     */
    protected $producers;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->actors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->producers = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Country
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
     * Add movies
     *
     * @param \Valiknet\CinemaBundle\Entity\Movie $movies
     * @return Country
     */
    public function addMovie(\Valiknet\CinemaBundle\Entity\Movie $movies)
    {
        $this->movies[] = $movies;

        return $this;
    }

    /**
     * Remove movies
     *
     * @param \Valiknet\CinemaBundle\Entity\Movie $movies
     */
    public function removeMovie(\Valiknet\CinemaBundle\Entity\Movie $movies)
    {
        $this->movies->removeElement($movies);
    }

    /**
     * Get movies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * Add actors
     *
     * @param \Valiknet\CinemaBundle\Entity\Actor $actors
     * @return Country
     */
    public function addActor(\Valiknet\CinemaBundle\Entity\Actor $actors)
    {
        $this->actors[] = $actors;

        return $this;
    }

    /**
     * Remove actors
     *
     * @param \Valiknet\CinemaBundle\Entity\Actor $actors
     */
    public function removeActor(\Valiknet\CinemaBundle\Entity\Actor $actors)
    {
        $this->actors->removeElement($actors);
    }

    /**
     * Get actors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Add producers
     *
     * @param \Valiknet\CinemaBundle\Entity\Producer $producers
     * @return Country
     */
    public function addProducer(\Valiknet\CinemaBundle\Entity\Producer $producers)
    {
        $this->producers[] = $producers;

        return $this;
    }

    /**
     * Remove producers
     *
     * @param \Valiknet\CinemaBundle\Entity\Producer $producers
     */
    public function removeProducer(\Valiknet\CinemaBundle\Entity\Producer $producers)
    {
        $this->producers->removeElement($producers);
    }

    /**
     * Get producers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducers()
    {
        return $this->producers;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
