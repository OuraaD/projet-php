<?php

namespace App\Controller\Front;

abstract class AbstractController
{
    protected function render(string $path, array $param = [])
    {
        extract($param);
        ob_start();
        require_once "../templates/front/{$path}.php";
        $content = ob_get_clean();
        require_once '../templates/front/base.php';
    }
}
