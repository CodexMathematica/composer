<?php

namespace App\Contact; //Peut importe le nom

class Security {
    private $privateKey;
    private $publicKey; 

    public function __construct()
    {
        $this->privateKey = '789';
        $this->publicKey = '000';
    }

    public function getKeys():void {
        echo 'Mes clefs sont : '.$this->privateKey.' '.$this->publicKey.'.';
    }
}