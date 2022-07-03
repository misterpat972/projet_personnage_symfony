<?php

namespace App\Entity;

class Personnage{


    public $nom;
    public $age;
    public $sexe;
    public $carac = [];


    public static $personnages = [];

    public function __construct($nom, $age, $sexe, $carac)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnages[] = $this;
    }

    public static function create()
    {
        $personnage1 = new personnage("Marc", 25, true, [
            "force" => 3,
            "agilite" => 2,
            "intelligence" => 3
        ]);
        $personnage2 = new personnage("Milo", 30, true, [
            "force" => 5,
            "agilite" => 1,
            "intelligence" => 2
        ]);
        $personnage3 = new personnage("Tya", 22, false, [
            "force" => 1,
            "agilite" => 2,
            "intelligence" => 5
        ]);
       
    }

    public static function getPersonnageParNom($nom) 
    {
        foreach (self::$personnages as $personnage) {
            if (strtolower($personnage->nom) === $nom) {
                return $personnage;             
            }
        }
    }
    
}