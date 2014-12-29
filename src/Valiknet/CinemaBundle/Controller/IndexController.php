<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Template()
     */
    public function showAction(Request $request)
    {
        $movies = $this->getDoctrine()->getManager()->getRepository('ValiknetCinemaBundle:Movie')->getNewestMovie();


        $paginator  = $this->get('knp_paginator');
        $movies = $paginator->paginate(
            $movies,
            $request->query->get('page', 1),
            10
        );

        return [
                "movies" => $movies
        ];
    }
} 