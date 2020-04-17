<?php

namespace App\Controller;

use App\Repository\FamilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FamilleController extends AbstractController
{
    /**
     * @Route("/famille", name="familles")
     */
    public function index(FamilleRepository $repository)
    {
        $familles = $repository->findAll();
        
        return $this->render('famille/index.html.twig', [
            'familles' => $familles,
        ]);
    }

    /**
     * 
     */
    public function show(){
        
    }
}
