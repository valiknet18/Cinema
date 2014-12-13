<?php
namespace Valiknet\CinemaBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;

class AppFixtures extends DataFixtureLoader
{
    /**
    * {@inheritDoc}
    */
    protected function getFixtures()
    {
        return  array(
            __DIR__ . '/movie.yml',
        );
    }
}