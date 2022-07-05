<?php

namespace App\Entity;

class Arme{

    private $nom;
    private $description;
    private $degats;


    public static $armes = [];

    public function __construct($nom, $description, $degats)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->degats = $degats;
        self::$armes[] = $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDegats()
    {
        return $this->degats;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function setDegats($degats)
    {
        $this->degats = $degats;
    }



    public static function create()
    {
       new arme("épée", "une superbe épée tranchante", 10);
       new arme("hache", "une arme ou un outil", 15);
       new arme("arc", "une arme à distance", 7);
    }


    public static function getArmeParNom($nom)
    {
        foreach (self::$armes as $arme) {
            if (strtolower(str_replace("é", "e",$arme->nom) === $nom)) {
                return $arme;
            }
        }
    }
}