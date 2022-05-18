<?php
//
require_once 'vendor/autoload.php';
//
//use Intervention\Image\ImageManager;
//
//$manager = new ImageManager(['driver' => 'gd']);
//
//$image = $manager->make("public/cat-2.jpg");
//
//$logo = $manager->make("public/logo.jpeg")->resize(500,500);
//
////die($logo->response("jpeg",100));
////
////$image->fit("300");
////
////$image->brightness(10);
////
////$image->contrast(15);
////
////$image->greyscale();
////
////$image->rotate(30);
//
//$image->insert($logo,'bottom-right',30,30);
//
//$image->save("public/new-cat.png");
//
//echo $image->response("jpg",100);


// Require composer autoload
//require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
//$mpdf->WriteHTML('<h1>Hellow World</h1>');
//$mpdf->WriteHTML('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eveniet ex illum, omnis optio quae reprehenderit. Alias, architecto autem corporis facere libero, nam officiis placeat quam quasi repudiandae, sapiente totam.</p>');

$html = file_get_contents("format-pdf.php");

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
//$mpdf->Output("public/my-pdf.pdf");
$mpdf->Output();

