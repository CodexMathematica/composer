<?php

use App\Data\Database;
use App\Game\GameController;
use App\Game\Player\Player;

//require('src/Data/Database.php');
require_once realpath("vendor/autoload.php");

new Database();
new Player();
new GameController();