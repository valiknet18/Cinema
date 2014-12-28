<?php
namespace Valiknet\CinemaBundle\Twig;

class ValiknetCinemaExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('filterTypeCinema', array($this, 'filterTypeCinema')),
        );
    }

    public function filterTypeCinema($id)
    {
        switch ($id) {
            case 0:
                return "Фільм";
                break;

            case 1:
                return "Серіал";
                break;

            case 2:
                return "Мультфільм";
                break;

            case 3:
                return "Мультсеріал";
                break;
        }
    }

    public function getName()
    {
        return "valiknet_cinema_extension";
    }
}
