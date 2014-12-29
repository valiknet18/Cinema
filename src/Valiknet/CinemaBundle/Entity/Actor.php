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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image;

    /**
     * @Gedmo\Slug(fields={"name", "surname"})
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dateBirthday;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="actors")
     */
    protected $country;

    /**
     * @ORM\ManyToMany(targetEntity="Movie", inversedBy="actors")
     */
    protected $movies;

    /**
     * @ORM\OneToOne(targetEntity="Proposal", mappedBy="actor")
     */
    protected $proposal;

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

    /**
     * Set image
     *
     * @param string $image
     * @return Actor
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Actor
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateBirthday
     *
     * @param \DateTime $dateBirthday
     * @return Actor
     */
    public function setDateBirthday($dateBirthday)
    {
        $this->dateBirthday = $dateBirthday;

        return $this;
    }

    /**
     * Get dateBirthday
     *
     * @return \DateTime 
     */
    public function getDateBirthday()
    {
        return $this->dateBirthday;
    }

    /**
     * Set proposal
     *
     * @param \Valiknet\CinemaBundle\Entity\Proposal $proposal
     * @return Actor
     */
    public function setProposal(\Valiknet\CinemaBundle\Entity\Proposal $proposal = null)
    {
        $this->proposal = $proposal;

        return $this;
    }

    /**
     * Get proposal
     *
     * @return \Valiknet\CinemaBundle\Entity\Proposal 
     */
    public function getProposal()
    {
        return $this->proposal;
    }
}
