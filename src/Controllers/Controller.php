<?php

namespace App\Controllers;

class Controller extends MainController
{
    public function index(){

        $this->twig->display('products.html.twig', compact('products'));

        // for $products in $product {
        //     echo $product;
        // } 
    }
}