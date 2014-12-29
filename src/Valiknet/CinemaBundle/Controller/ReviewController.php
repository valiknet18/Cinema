<?php

namespace Valiknet\CinemaBundle\Controller;

use Proxies\__CG__\Valiknet\CinemaBundle\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Valiknet\CinemaBundle\Form\Type\AddReviewType;

class ReviewController extends Controller
{
    public function createAction($slug, Request $request)
    {
        $em = $this->getDoctrine()
                ->getManager();

        $review = new Review();

        $form = $this->createForm(new AddReviewType(), $review);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $review->setMovie(
                $em->getRepository('ValiknetCinemaBundle:Movie')
                    ->findOneBySlug($slug)
            );

            $em->persist($review);
            $em->flush();

            return JsonResponse::create([], 200);
        }

        return JsonResponse::create([], 500);
    }
}
