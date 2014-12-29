<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\VarDumper\VarDumper;
use Valiknet\CinemaBundle\Form\Type\AddReviewType;

class MovieController extends Controller
{
    /**
     * @Template()
     */
    public function getAction($slug, Request $request)
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

        $form = $this->createForm(new AddReviewType());

        $reviews = $movie->getReviews();

        $paginator  = $this->get('knp_paginator');
        $reviews = $paginator->paginate(
            $reviews,
            $request->query->get('page', 1),
            10
        );

        $reviews = $this->get('valiknet.cinema_bundle.services.review_service')
                        ->splitArray($reviews);

        return [
            "movie" => $movie,
            "form" => $form->createView(),
            "reviews" => $reviews
        ];
    }
} 