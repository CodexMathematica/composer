<?php

use App\Payment\Security as Money; // L'alias 'as Money' n'est pas obligatoire.
use App\Login\Security as LoggedIn; 

require_once realpath("vendor/autoload.php"); 

echo '<br>------------ namespace personnaliser et namespace global --------------<br><br>';
// Les namespaces sont comme un sytéme de rangement de fichier qui permet de classer nos éléménts pour les retrouver plus facilement et éviter les confusions lorsqu'ils ont le même nom
// Très utiles pour les gros projets ou les projets qui s'appuye sur des dépendances sans rapport les unes avec les autres (donc risque de même nom de classe...)

var_dump(new App\Contact\Security()); // Par default PHP cherche dans le namespace global qui est \ (ex: \Datetime)

echo '<br><br>------------ use et alias --------------<br><br>';

var_dump(new Money()); // Fonctionne grâce au use de la ligne 3

echo '<br><br>------------ Depuis le même namespace --------------<br><br>';

$jack = new LoggedIn();
$jack->forWho();