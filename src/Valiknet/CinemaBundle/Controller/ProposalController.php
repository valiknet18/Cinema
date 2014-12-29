<?php

namespace Valiknet\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;
use Valiknet\CinemaBundle\Form\Type\AddProposalMovieType;

class ProposalController extends Controller
{
    /**
     * @Template()
     */
    public function listAction()
    {
        return [];
    }

    /**
     * @Template()
     */
    public function movieAction()
    {

        $form = $this->createForm(new AddProposalMovieType());

        return [
            "form" => $form->createView()
        ];
    }

    /**
     * @Template()
     */
    public function actorAction()
    {
        return [];
    }

    /**
     * @Template()
     */
    public function directorAction()
    {
        return [];
    }
}
