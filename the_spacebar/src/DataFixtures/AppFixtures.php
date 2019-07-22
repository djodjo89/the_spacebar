<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//         $faker = Faker\Factory::create('fr_FR');

//         for ($i = 0; $i < 10; $i++) {
//             $article = new Article();
//             $article->setTitle($faker->title);
//             $article->setContent($faker->text);
//             $manager->persist($article);
//         }

//         $manager->flush();
    }
}
