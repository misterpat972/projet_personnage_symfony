<?php

namespace App\Controller;
use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArmesController extends AbstractController
{

    /**
     * @Route("/armes", name="lesarmes")
     */
    public function listearmes(): Response
    {   Arme::create();
        return $this->render('armes/armes.html.twig', [
            'armes' => Arme::$armes
        ]);
    }


    /**
     * @Route("/armes/{nom}", name="afficher_arme")
     */
    public function afficherArme($nom)
      { Arme::create();
        $arme =  Arme:: getArmeParNom($nom);
        return $this->render('armes/unearme.html.twig', [
            "arme" => $arme
        ]);
    }
}
