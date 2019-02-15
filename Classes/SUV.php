<?php

final class SUV extends Voiture
{
     use Parsoleil;

     public $nbrePortes = "3";

     public function setMessage($msg)
     {
         $this->message  = $msg;
     }
}
