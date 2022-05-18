<?php

require_once 'vendor/autoload.php';

use Intervention\Image\ImageManager;

$manager = new ImageManager(['driver' => 'gd']);

$image = $manager->make("public/cat-2.jpg");

$logo = $manager->make("public/logo.jpeg")->resize(150,150);

//die($logo->response("jpeg",100));
//
//$image->fit("300");
//
//$image->brightness(10);
//
//$image->contrast(15);
//
//$image->greyscale();
//
//$image->rotate(30);

$image->insert($logo,'bottom-right',30,30);

$image->save("public/new-cat.png");

echo $image->response("jpg",100);