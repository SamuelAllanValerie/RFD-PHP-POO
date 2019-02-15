<?php
include "./classes/Voiture.php";

$gerard = new Voiture( "Jaune");

var_dump($gerard);

$gerard->couleur = "Bleu";
$gerard->marque = "Renault Fuego";
$gerard->afficherMessageALaCon();

var_dump($gerard);

$gerard->peindreVoiture("Vert pomme");

var_dump($gerard);