<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CountryController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction($slug, $section)
    {
        $country = $this->getDoctrine()
                ->getManager()
                ->getRepository('ValiknetCinemaBundle:Country')
                ->findOneBySlug($slug);

        if ($this->get('valiknet.cinema_bundle.services.country_service')->assertSection($section) && $country) {
            return [
                'country' => $country,
                'section' => $section
            ];
        }

        throw new NotFoundHttpException();
    }
}
