<?php
namespace Valiknet\CinemaBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\DateTime;

class MovieRepository extends EntityRepository
{
    /**
     * @return array
     */
    public function getNewestMovie()
    {
        $date = (new \DateTime())->format("Y-m-d");

        $film = $this->getEntityManager()
                    ->getRepository('ValiknetCinemaBundle:Movie')
                    ->createQueryBuilder('m')
                    ->where("m.releasedAt > :date")
                    ->orderBy('m.releasedAt', 'ASC')
                    ->setParameter('date', $date)
                    ->getQuery()
                    ->getResult();

        return $film;
    }
} 