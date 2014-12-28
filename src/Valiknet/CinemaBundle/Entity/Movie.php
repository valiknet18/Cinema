<?php
namespace Valiknet\CinemaBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Valiknet\CinemaBundle\Entity\MovieRepository")
 * @ORM\Table(name="movie")
 */
class Movie
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=6)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="integer", length=20, name="`like`")
     */
    protected $like;

    /**
     * @ORM\Column(type="integer", length=20)
     */
    protected $dislike;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $trailer;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(type="string", unique=true)
     */
    protected $slug;

    /**
     * @ORM\Column(type="string")
     */
    protected $basePoster;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $releasedAt;

    /**
     * @ORM\Column(type="integer")
     */
    protected $type;

    /**
     * @ORM\ManyToOne(targetEntity="Producer", inversedBy="movies")
     */
    protected $producer;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="movies")
     */
    protected $country;

    /**
     * @ORM\ManyToMany(targetEntity="Actor", mappedBy="movies")
     */
    protected $actors;

    /**
     * @ORM\OneToMany(targetEntity="Review", mappedBy="movie")
     */
    protected $reviews;

    /**
     * @ORM\OneToMany(targetEntity="Poster", mappedBy="movie")
     */
    protected $posters;

    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="movies")
     */
    protected $categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
        $this->posters = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return \6 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Movie
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
     * Set like
     *
     * @param integer $like
     * @return Movie
     */
    public function setLike($like)
    {
        $this->like = $like;

        return $this;
    }

    /**
     * Get like
     *
     * @return integer 
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * Set dislike
     *
     * @param integer $dislike
     * @return Movie
     */
    public function setDislike($dislike)
    {
        $this->dislike = $dislike;

        return $this;
    }

    /**
     * Get dislike
     *
     * @return integer 
     */
    public function getDislike()
    {
        return $this->dislike;
    }

    /**
     * Set trailer
     *
     * @param string $trailer
     * @return Movie
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;

        return $this;
    }

    /**
     * Get trailer
     *
     * @return string 
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Movie
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
     * Set releasedAt
     *
     * @param \DateTime $releasedAt
     * @return Movie
     */
    public function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;

        return $this;
    }

    /**
     * Get releasedAt
     *
     * @return \DateTime 
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }

    /**
     * Set producer
     *
     * @param \Valiknet\CinemaBundle\Entity\Producer $producer
     * @return Movie
     */
    public function setProducer(\Valiknet\CinemaBundle\Entity\Producer $producer = null)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return \Valiknet\CinemaBundle\Entity\Producer 
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Set country
     *
     * @param \Valiknet\CinemaBundle\Entity\Country $country
     * @return Movie
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
     * Add actors
     *
     * @param \Valiknet\CinemaBundle\Entity\Actor $actors
     * @return Movie
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
     * Add reviews
     *
     * @param \Valiknet\CinemaBundle\Entity\Review $reviews
     * @return Movie
     */
    public function addReview(\Valiknet\CinemaBundle\Entity\Review $reviews)
    {
        $this->reviews[] = $reviews;

        return $this;
    }

    /**
     * Remove reviews
     *
     * @param \Valiknet\CinemaBundle\Entity\Review $reviews
     */
    public function removeReview(\Valiknet\CinemaBundle\Entity\Review $reviews)
    {
        $this->reviews->removeElement($reviews);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Add posters
     *
     * @param \Valiknet\CinemaBundle\Entity\Poster $posters
     * @return Movie
     */
    public function addPoster(\Valiknet\CinemaBundle\Entity\Poster $posters)
    {
        $this->posters[] = $posters;

        return $this;
    }

    /**
     * Remove posters
     *
     * @param \Valiknet\CinemaBundle\Entity\Poster $posters
     */
    public function removePoster(\Valiknet\CinemaBundle\Entity\Poster $posters)
    {
        $this->posters->removeElement($posters);
    }

    /**
     * Get posters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosters()
    {
        return $this->posters;
    }

    /**
     * Add categories
     *
     * @param \Valiknet\CinemaBundle\Entity\Category $categories
     * @return Movie
     */
    public function addCategory(\Valiknet\CinemaBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Valiknet\CinemaBundle\Entity\Category $categories
     */
    public function removeCategory(\Valiknet\CinemaBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Movie
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
     * Set basePoster
     *
     * @param string $basePoster
     * @return Movie
     */
    public function setBasePoster($basePoster)
    {
        $this->basePoster = $basePoster;

        return $this;
    }

    /**
     * Get basePoster
     *
     * @return string 
     */
    public function getBasePoster()
    {
        return $this->basePoster;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Movie
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
}
