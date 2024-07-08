<!-- Afficher méthode display -->
<?php

// Appeler une function static autoload Autoloader

require_once '../src/Core/Autoloader.php';

use App\Core\Autoloader;
use App\Entity\Test;

Autoloader::autoload();


$display = new Test();
echo $display->display();
