<?php

namespace App\DataFixtures;

use App\Entity\Fonction;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $fonctionRepo = $manager->getRepository(Fonction::class);
        for ($i = 1; $i <= 5; $i++) {
            $fonction = $fonctionRepo->find($i);
            $user = new User;
            $user->setusername("user$i");
            $user->setPassword("password$i");
            $user->setFunction($fonction);
            $manager->persist($user);
        }
        $manager->flush();
    }
}
