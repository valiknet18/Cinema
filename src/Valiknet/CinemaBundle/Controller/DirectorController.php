<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;

class DirectorController extends Controller
{
    /**
     * @Template()
     */
    public function getAction($slug)
    {
        $director = $this->getDoctrine()
                ->getManager()
                ->getRepository('ValiknetCinemaBundle:Director')
                ->findOneBySlug($slug);

        return array(
            'director' => $director
        );
    }

    /**
     * @Template()
     */
    public function lastAction()
    {
        $directors = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('ValiknetCinemaBundle:Director')
                    ->findBy([], ['id' => 'DESC'], 15);

        return [
            "directors" => $directors
        ];
    }
}
