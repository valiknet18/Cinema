<?php
namespace Valiknet\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="producer")
 */
class Producer
{
    /**
     * @ORM\Column(type="integer", length=6)
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
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="producers")
     */
    protected $country;

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
     * @return Producer
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
     * @return Producer
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
     * @param \Valiknet\CinemaBundle\Entity\Movie $country
     * @return Producer
     */
    public function setCountry(\Valiknet\CinemaBundle\Entity\Movie $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Valiknet\CinemaBundle\Entity\Movie 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Producer
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
