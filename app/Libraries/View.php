<?php

namespace App\Libraries;

class View
{
    public static function render($view, array $data)
    {
        // 
        helper('html');

        echo view('templates/header');
        echo view($view, $data);
        echo view('templates/footer');
    }
}


