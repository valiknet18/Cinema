<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;

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

        switch ($section) {
            case 'movies' : {
                return [
                    'name' => $country->getName(),
                    'movies' => $country->getMovies()
                ];
            }
                break;

            case 'actors' : {

            }
                break;

            case 'producers' : {

            }
                break;
        }
    }
}
