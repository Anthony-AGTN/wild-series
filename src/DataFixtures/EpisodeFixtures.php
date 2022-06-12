<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
//Tout d'abord nous ajoutons la classe Factory de FakerPhp
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        //Puis ici nous demandons à la Factory de nous fournir un Faker
        $faker = Factory::create('fr_FR');

        /**
        * L'objet $faker que tu récupère est l'outil qui va te permettre 
        * de te générer toutes les données que tu souhaites
        */

        for($i = 0; $i < 105; $i++) {
            $episode = new Episode();
            //Ce Faker va nous permettre d'alimenter l'instance de Season que l'on souhaite ajouter en base

            $episode->setSeason($this->getReference('season_' . $faker->numberBetween(1, 21)));

            $episode->setTitle($faker->word());
            $episode->setNumber($faker->numberBetween(1, 10));
            $episode->setSynopsis($faker->paragraphs(3, true));

            $manager->persist($episode);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
           ProgramFixtures::class,
        ];
    }
}