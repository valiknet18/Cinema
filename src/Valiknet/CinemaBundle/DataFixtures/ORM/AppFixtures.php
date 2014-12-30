<?php
namespace Valiknet\CinemaBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;

class AppFixtures extends DataFixtureLoader
{
    /**
    * {@inheritDoc}
    */
    protected function getFixtures()
    {
        return  array(
            __DIR__.'/movie.yml',
        );
    }
}
