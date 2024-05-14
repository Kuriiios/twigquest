<?php

namespace App\Controllers;

abstract class MainController
{
    private $loader;
    protected $twig;

    public function __construct()
    {
        $loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
        $twig = new Twig\Environment($loader, ['debug' => true]);
        $twig->addExtension(new Twig\Extension\DebugExtension());
    }

    public function index(){

        $model = new Model();

        for ($i=0; $i<count($products); $i++) {
            $product= $products[$i] . PHP_EOL;
        } 
    }
}

