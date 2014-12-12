<?php
namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;

class CategoryController extends Controller
{
    /**
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Template()
     */
    public function indexAction($slug)
    {
        $category = $this->getDoctrine()
                ->getManager()
                ->getRepository('ValiknetCinemaBundle:Category')
                ->findOneBySlug($slug);

        return [
            "category" => $category
        ];
    }
}
