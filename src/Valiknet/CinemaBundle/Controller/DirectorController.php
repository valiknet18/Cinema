<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;

class DirectorController extends Controller
{
    /**
     * @Template()
     */
    public function getAction($slug, Request $request)
    {
        $director = $this->getDoctrine()
                ->getManager()
                ->getRepository('ValiknetCinemaBundle:Director')
                ->findOneBySlug($slug);

        $paginator  = $this->get('knp_paginator');
        $movies = $paginator->paginate(
            $director->getMovies(),
            $request->query->get('page', 1),
            10
        );

        return array(
            'director' => $director,
            'movies' => $movies
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
