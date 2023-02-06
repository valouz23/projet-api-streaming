<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Film;
use App\Entity\Platform;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i=0; $i<10; $i++){
            $platform = new Platform();
            $platform->setName($faker->unique()->sentence(1) . "streaming");
            $manager->persist($platform);
        }
        for($i=0; $i<60; $i++){
            $film = new Film();
            $film->setTitle($faker->unique()->sentence(random_int(1,5)));
            $film->setCategory(($faker->randomElements(['Comedy','Historical','Documentary','Reality TV','Romance','Tragedy','Cartoon']))[0]);
            $film->setReleaseDate($faker->dateTime());
            $manager->persist($film);
        }

        $manager->flush();
    }
}
