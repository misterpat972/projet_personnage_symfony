<?php

namespace App\Controller;

use App\Entity\Personnage;
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

        Personnage::create();
        return $this->render('personnage/perso.html.twig', [
            "players" => Personnage::$personnages
        ]);
    }

    /**
     * @Route("/perso/{nom}", name="afficher_personnage")
     */
    public function afficherperso($nom)
    {   
        Personnage::create();
        $perso =  Personnage::getPersonnageParNom($nom);
        return $this->render('personnage/lepersonnage.html.twig', [
            "lepersonnage" => $perso
        ]);
    }
}
