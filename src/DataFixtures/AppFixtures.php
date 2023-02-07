<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Film;
use App\Entity\Platform;
use App\Entity\User;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher){
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $platform1 = new Platform();
        $platform1->setName($faker->unique()->sentence(1) . "streaming");
        $manager->persist($platform1);

        $platform2 = new Platform();
        $platform2->setName($faker->unique()->sentence(1) . "streaming");
        $manager->persist($platform2);

        $platform3 = new Platform();
        $platform3->setName($faker->unique()->sentence(1) . "streaming");
        $manager->persist($platform3);

        $platform4 = new Platform();
        $platform4->setName($faker->unique()->sentence(1) . "streaming");
        $manager->persist($platform4);

        for($i=0; $i<100; $i++){
            $film = new Film();
            $film->setTitle($faker->unique()->sentence(random_int(1,5)));
            $film->setCategory(($faker->randomElements(['Comedy','Historical','Documentary','Reality TV','Romance','Tragedy','Cartoon']))[0]);
            $film->setReleaseDate($faker->dateTime());
            if(random_int(0,100)<50){
                $film->addPlatform($platform1);
            }
            if(random_int(0,100)<50){
                $film->addPlatform($platform2);
            }
            if(random_int(0,100)<50){
                $film->addPlatform($platform3);
            }
            if(random_int(0,100)<50){
                $film->addPlatform($platform4);
            }
            $manager->persist($film);

        }
        $plainPassword = 'password';
        $user = new User();
        $user->setPseudo('ValouUser');
        $user->setPassword($this->passwordHasher->hashPassword($user, $plainPassword));
        $admin->setRoles(['ROLE_USER']);
        $manager->persist($user);

        $plainPassword = 'admin';
        $admin = new User();
        $admin->setPseudo('ValouAdmin');
        $admin->setPassword($this->passwordHasher->hashPassword($user, $plainPassword));
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);
        $manager->flush();
    }
}
