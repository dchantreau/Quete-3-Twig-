<?php 
require_once __DIR__ . '/../config/twig.php';
$instruments = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', ['instruments'=>$instruments]);