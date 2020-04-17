<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $f1 = new Famille;
        $f1->setLibelle('mammifère')
            ->setDescription('Animaux vertébrés nourrisant leurs petits avec du lait');
        
        $manager->persist($f1);

        $f2 = new Famille;
        $f2->setLibelle('reptile')
            ->setDescription('Animaux vertébrés qui rampent...');

        $manager->persist($f2);

        $f3 = new Famille;
        $f3->setLibelle('poisson')
            ->setDescription('Animaux invertébrés du monde aquatique');

        $manager->persist($f3);

        $a1 = new Animal;
        $a1->setNom('chien')
            ->setImage('chien.png')
            ->setDescription('Un animal qui fait wouaf wouaf')
            ->setEstDangereux(false)
            ->setFamille($f1);
        
        $manager->persist($a1);

        $a2 = new Animal;
        $a2->setNom('cochon')
            ->setImage('cochon.png')
            ->setDescription('Un animal domestique que l\'on mange souvent')
            ->setEstDangereux(false)
            ->setFamille($f1);

        $manager->persist($a2);

        $a3 = new Animal;
        $a3->setNom('crocodile')
            ->setImage('croco.png')
            ->setDescription('Un animal qui a du mordant')
            ->setEstDangereux(true)
            ->setFamille($f2);
        
        $manager->persist($a3);

        $a4 = new Animal;
        $a4->setNom('requin')
            ->setImage('requin.png')
            ->setDescription('Un animal marin qui a fait peur à tout une génération')
            ->setEstDangereux(false)
            ->setFamille($f3);

        $manager->persist($a4);

        $a5 = new Animal;
        $a5->setNom('serpent')
            ->setImage('serpent.png')
            ->setDescription('Un reptile qui rampe et SssSssSs')
            ->setEstDangereux(true)
            ->setFamille($f2);

        $manager->persist($a5);

        $manager->flush();
    }
}
