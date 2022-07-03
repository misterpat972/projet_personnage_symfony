<?php

namespace App\Entity;

class Arme{

    public $nom;
    public $description;
    public $degats;


    public static $armes = [];

    public function __construct($nom, $description, $degats)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->degats = $degats;
        self::$armes[] = $this;
    }


    public static function create()
    {
        $arme1 = new arme("epee", "une superbe épée tranchante", 10);
        $arme2 = new arme("hache", "un hache de moyen prix", 5);
        $arme3 = new arme("arc", "une superbe arc bien précise", 15);
    }


    public static function getArmeParNom($nom)
    {
        foreach (self::$armes as $arme) {
            if (strtolower($arme->nom) === $nom) {
                return $arme;
            }
        }
    }
}