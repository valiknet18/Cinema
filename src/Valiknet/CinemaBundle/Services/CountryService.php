<?php
namespace Valiknet\CinemaBundle\Services;

class CountryService
{
    public function assertSection($section)
    {
        $sections = array(
            'movies',
            'producers',
            'actors'
        );

        if (in_array($section, $sections)) {
            return true;
        }

        return false;
    }
} 