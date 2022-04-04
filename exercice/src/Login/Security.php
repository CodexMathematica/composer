<?php

namespace App\Login; //Peut importe le nom

class Security {
    private $privateKey;
    private $publicKey; 

    public function __construct()
    {
        $this->privateKey = '147369';
        $this->publicKey = '258369';
    }

    public function getKeys():void {
        echo 'Mes clefs sont : '.$this->privateKey.' '.$this->publicKey.'.';
    }

    public function forWho():void {
        $people = new Customer(); // Pas besoin de préciser le namespace car les 2 fichiers (celui on l'on est et Customer sont dans le m^me namespace)
        echo $people->presentation();
    }
}
//En conclusion PHP cherche en priorité dans le même namespace que le fichier ou l'on instancie.