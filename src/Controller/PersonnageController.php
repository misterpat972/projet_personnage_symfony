<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
          
       
    }

    /**
     * @Route("/perso", name="personnages")
     */
    public function perso(): Response
    {
        return $this->render('personnage/perso.html.twig', [
            "pseudo" => "Bobby",
            "age" => 25,
            "carac" => [
                "force" => 3,
                "agilite" => 2,               
                "intelligence" => 3,               
            ],
        ]);
          
        
    }
}
