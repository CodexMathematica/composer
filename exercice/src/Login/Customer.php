<?php

namespace App\Login; //Peut importe le nom

class Customer {
    private $name;

    public function __construct()
    {
        $this->name = 'Jacky';

    }

    public function presentation(): string {
        return 'Salut c\'est '.$this->name.' !';
    }
}