<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;

class IndexController extends Controller
{
    /**
     * @Template()
     */
    public function showAction()
    {
        $movies = $this->getDoctrine()->getManager()->getRepository('ValiknetCinemaBundle:Movie')->getNewestMovie();

        return [
                "movies" => $movies
        ];
    }
} 