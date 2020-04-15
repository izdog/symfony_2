<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $repository)
    {
        //Récupère la liste des animaux présent dans la BDD
        $animaux = $repository->findAll();

        return $this->render('animal/index.html.twig', [
            'animaux' => $animaux
        ]);
    }

    /**
     * @Route("/animal/{id}", name="display_animal")
     */
    public function show(Animal $animal){

        return $this->render('animal/show.html.twig', ['animal' => $animal]);
    }
}
