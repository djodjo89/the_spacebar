<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

abstract class BaseFixture extends Fixture
{
    /** @var Generator */
    protected $faker;

    private $manager;

    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;
        $this->faker = Factory::create();
        $this->loadData($manager);
    }
    
    abstract protected function loadData(ObjectManager $manager);
    
    protected function createMany(string $className, int $count, callable $factory)
    {
        for ($i = 0; $i < $count; $i++)
        {
            $entity = new $className();
            $factory($entity, $i);
            
            $this->manager->persist($entity);
            $this->addReference($className . '_' . $i, $entity);
        }
    }
}
