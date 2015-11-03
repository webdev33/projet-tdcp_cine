<?php

namespace CineSearch\TdcpBundle\DataFixtures\ORM;

use CineSearch\TdcpBundle\Entity\Film;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFilmData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $film1 = new Film();
        $film1->setName('Seul sur Mars');
        $film1->setImage('seul_sur_mars.jpg');
        $film1->setGenre('Science fiction');
        $film1->setActeurs('Matt Damon, Jessica Chastain');
        $film1->setCinema('Le Rex');
        $film1->setDate('03-11-2015');
        $film1->setSynopsis('Lors d’une expédition sur Mars, l’astronaute Mark Watney (Matt Damon) est laissé pour mort par ses coéquipiers, une tempête les ayant obligés à décoller en urgence. Mais Mark a survécu et il est désormais seul, sans moyen de repartir, sur une planète hostile.');
        $film1->setTrailer('http://www.allocine.fr/video/player_gen_cmedia=19555821&cfilm=221524.html');

        $manager->persist($film1);
        $manager->flush();
    }
}

