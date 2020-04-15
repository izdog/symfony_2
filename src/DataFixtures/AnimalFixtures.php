<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $a1 = new Animal;
        $a1->setNom('chien')
            ->setImage('chien.png')
            ->setDescription('Un animal qui fait wouaf wouaf')
            ->setEstDangereux(false);
        
        $manager->persist($a1);

        $a2 = new Animal;
        $a2->setNom('cochon')
            ->setImage('cochon.png')
            ->setDescription('Un animal domestique que l\'on mange souvent')
            ->setEstDangereux(false);

        $manager->persist($a2);

        $a3 = new Animal;
        $a3->setNom('crocodile')
            ->setImage('croco.png')
            ->setDescription('Un animal qui a du mordant')
            ->setEstDangereux(true);
        
        $manager->persist($a3);

        $a4 = new Animal;
        $a4->setNom('requin')
            ->setImage('requin.png')
            ->setDescription('Un animal marin qui a fait peur à tout une génération')
            ->setEstDangereux(false);

        $manager->persist($a4);

        $a5 = new Animal;
        $a5->setNom('serpent')
            ->setImage('serpent.png')
            ->setDescription('Un reptile qui rampe et SssSssSs')
            ->setEstDangereux(true);

        $manager->persist($a5);

        $manager->flush();
    }
}
