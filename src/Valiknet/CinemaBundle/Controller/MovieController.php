<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovieController extends Controller
{
    public function getAction($slug)
    {
        $movie = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('ValiknetCinemaBundle:Movie')
                    ->findOneBySlug($slug);

        return $this->render(
            "ValiknetCinemaBundle:movie:get.html.twig",
            [
                "movie" => $movie
            ]
        );
    }
} 