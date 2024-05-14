<?php

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('home.html.twig', ['products' => $products]);