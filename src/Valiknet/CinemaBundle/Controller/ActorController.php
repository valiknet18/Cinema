<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;

class ActorController extends Controller
{
    /**
     * @Template()
     */
    public function getAction($slug)
    {
        $actor = $this->getDoctrine()
                ->getManager()
                ->getRepository('ValiknetCinemaBundle:Actor')
                ->findOneBySlug($slug);

        return array(
            'actor' => $actor
        );
    }

    /**
     * @Template()
     */
    public function lastAction()
    {
        $actors = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('ValiknetCinemaBundle:Actor')
                    ->findBy([], ['id' => 'DESC'], 15);

        return [
            "actors" => $actors
        ];
    }
}
