<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;

class ActorController extends Controller
{
    /**
     * @Template()
     */
    public function getAction($slug, Request $request)
    {
        $actor = $this->getDoctrine()
                ->getManager()
                ->getRepository('ValiknetCinemaBundle:Actor')
                ->findOneBySlug($slug);

        $paginator  = $this->get('knp_paginator');
        $movies = $paginator->paginate(
            $actor->getMovies(),
            $request->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return array(
            'actor' => $actor,
            'movies' => $movies
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
