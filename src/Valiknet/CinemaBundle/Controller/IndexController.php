<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function showAction()
    {
        $data = $this->getDoctrine()->getManager()->getRepository('ValiknetCinemaBundle:Movie')->getNewestMovie();
        return $this->render(
            "ValiknetCinemaBundle:Index:show.html.twig",
            [
                "data" => $data
            ]
        );
    }
} 