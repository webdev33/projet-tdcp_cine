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

        $cinema2 = new Cinema();
        $cinema2->setNom('Cinéma Les Enfants du Paradis');
        $cinema2->setAdresse('11 pl Porte St Michel, 28000 CHARTRES');
        $cinema2->setLat(48.442194);
        $cinema2->setLng(1.489047);

        $cinema3 = new Cinema();
        $cinema3->setNom('Cinéma Normandie');
        $cinema3->setAdresse('6 r Desire Roussel, 28260 ANET');
        $cinema3->setLat(48.857349);
        $cinema3->setLng(1.439172);

        $cinema4 = new Cinema();
        $cinema4->setNom('CINECENTRE SNCD (SARL)');
        $cinema4->setAdresse('5 pl Champ de Foire, 28100 DREUX');
        $cinema4->setLat(48.731456);
        $cinema4->setLng(1.360632);

        $cinema5 = new Cinema();
        $cinema5->setNom('Cinéma L\'Ambiance');
        $cinema5->setAdresse('10 r Flandres Dunkerque, 28250 SENONCHES');
        $cinema5->setLat(48.561630);
        $cinema5->setLng(1.032991);

        $cinema6 = new Cinema();
        $cinema6->setNom('Cinéma Le Dunois');
        $cinema6->setAdresse('24 r Lambert Licors, 28200 CHATEAUDUN');
        $cinema6->setLat(48.071218);
        $cinema6->setLng(1.331588);

        $cinema7 = new Cinema();
        $cinema7->setNom('Les Prairiales');
        $cinema7->setAdresse('Avenue de la Prairie 28230 EPERNON');
        $cinema7->setLat(48.604807);
        $cinema7->setLng(1.675288);

        $manager->persist($cinema1);
        $manager->flush();
    }
}