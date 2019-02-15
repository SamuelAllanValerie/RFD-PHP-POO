<?php
require_once "./functions/classautoloader.php";

spl_autoload_register('classAutoLoader');

$gerard = new Voiture( "Jaune",50 );


$gerard->marque = "Renault Fuego";
$gerard->afficherMessageALaCon();


$gerard->peindreVoiture("Vert pomme");


$gerard->vitesse = 30;
$gerard->masse = 1075;

//echo $gerard->calculerEnergieCinetique() . "Joules<br />";

//echo $gerard->calculerKmrestant(   30, 6);

$caisse = new SUV(  "Rouge",  50);
$caisse->setMessage(  "Forever forever");
echo $caisse->getMessage();