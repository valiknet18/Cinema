<?php
namespace Valiknet\CinemaBundle\Services;

use Valiknet\CinemaBundle\Entity\Review;

class ReviewService
{
    public function splitArray($reviews)
    {
        $splitReviews = [
            [],
            [],
        ];

        foreach ($reviews as $review) {
            if ($review->getType()) {
                $splitReviews[1][] = $review;
            } else {
                $splitReviews[0][] = $review;
            }
        }

        return $splitReviews;
    }
}
