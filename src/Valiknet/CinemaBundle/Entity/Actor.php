<?php
namespace Valiknet\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="actor")
 */
class Actor
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $surname;

    /**
     * @Gedmo\Slug(fields={"name", "surname"})
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="actor")
     */
    protected $country;

    /**
     * @ORM\ManyToMany(targetEntity="Movie", inversedBy="actors")
     */
    protected $movies;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movies = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Actor
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

    /**
     * Set surname
     *
     * @param string $surname
     * @return Actor
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set country
     *
     * @param \Valiknet\CinemaBundle\Entity\Country $country
     * @return Actor
     */
    public function setCountry(\Valiknet\CinemaBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Valiknet\CinemaBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add movies
     *
     * @param \Valiknet\CinemaBundle\Entity\Movie $movies
     * @return Actor
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
     * Set slug
     *
     * @param string $slug
     * @return Actor
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
