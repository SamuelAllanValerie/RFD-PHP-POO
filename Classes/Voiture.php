<?php

class Voiture
{
    public $couleur;
    public $marque;

    public function __construct($color)
    {
        $this->couleur = $color;
    }

    public function afficherMessageALaCon() {
        echo "Message inutile";
    }

    public function peindreVoiture($couleur) {
       $this->couleur = $couleur;
    }

    public function __destruct()
    {
        echo "Ich bin tot !";
    }

}