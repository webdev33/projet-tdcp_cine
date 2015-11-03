<?php
namespace Acme\HelloBundle\DataFixtures\ORM;

use CineSearch\TdcpBundle\Entity\Cinema;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCinemaData implements FixtureInterface
{
/**
* {@inheritDoc}
*/
    public function load(ObjectManager $manager)
    {
        $cinema1 = new Cinema();
        $cinema1->setNom('Cinéma Le Rex');
        $cinema1->setAdresse('26 pl 11 Août, 28400 NOGENT LE ROTROU');
        $cinema1->setLat(48.322639);
        $cinema1->setLng(0.818083);

        $manager->persist($cinema1);
        $manager->flush();
    }
}