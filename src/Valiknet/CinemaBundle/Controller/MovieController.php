<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;
use Valiknet\CinemaBundle\Form\Type\AddReviewType;

class MovieController extends Controller
{
    /**
     * @Template()
     */
    public function getAction($slug)
    {
        $movie = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('ValiknetCinemaBundle:Movie')
                    ->findOneBySlug($slug);

        if (!$movie) {
            throw $this->createNotFoundException(
                'Такого фільму немає в базі'
            );
        }

        $form = $this->createForm(new AddReviewType());

        $reviews = $this->get('valiknet.cinema_bundle.services.review_service')
                        ->splitArray($movie->getReviews());

        return [
            "movie" => $movie,
            "form" => $form->createView(),
            "reviews" => $reviews
        ];
    }
}
