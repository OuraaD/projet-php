<!-- Afficher méthode display -->
<?php

require_once '../src/Entity/Test.php';

use App\Entity\Test;

$display = new Test();
echo $display->display();
