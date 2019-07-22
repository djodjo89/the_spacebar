<?php


namespace App\DataFixtures;


use Doctrine\Common\Persistence\ObjectManager;

abstract class BaseFixture
{

    private $manager;

    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;

        $this->loadData($manager);
    }

    abstract protected function loadData(ObjectManager $manager);

}