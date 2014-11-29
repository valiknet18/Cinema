<?php
namespace Valiknet\CinemaBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\DateTime;

class MovieRepository extends EntityRepository
{
    public function getNewestMovie()
    {
        $date = (new \DateTime())->format("Y-m-d");
        $film = $this->getEntityManager()
                ->getRepository('ValiknetCinemaBundle:Movie')
                ->createQueryBuilder('m')
                ->groupBy('m.releasedAt')
                ->orderBy('m.releasedAt', 'DESC')
                ->having("m.releasedAt < " . $date . "")
                ->getQuery()
                ->getFirstResult();

        return $film;
    }
} 