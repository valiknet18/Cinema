<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;

class MovieController extends Controller
{
    /**
     * @Template()
     */
    public function getAction($slug)
    {
        $movie = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('ValiknetCinemaBundle:Movie')
                    ->findOneBySlug($slug);

        if(!$movie){
            throw $this->createNotFoundException(
                'Такого фільму немає в базі'
            );
        }

        return [
                "movie" => $movie
        ];
    }
} 