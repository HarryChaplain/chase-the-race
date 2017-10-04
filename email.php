<?php
require 'vendor/autoload.php';

$sendgrid = new SendGrid("SENDGRID_APIKEY");
$email    = new SendGrid\Email();

$email->addTo("nathanpreen@gmail.com")
      ->setFrom("you@youremail.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);




// // using SendGrid's PHP Library
// // https://github.com/sendgrid/sendgrid-php
// // If you are using Composer (recommended)
// require 'vendor/autoload.php';
// // If you are not using Composer
// // require("path/to/sendgrid-php/sendgrid-php.php");
// $from = new SendGrid\Email("Example User", "test@example.com");
// $subject = "Sending with SendGrid is Fun";
// $to = new SendGrid\Email("Example User", "nathanpreen@gmail.com");
// $content = new SendGrid\Content("text", "and easy to do anywhere, even with PHP");
// $mail = new SendGrid\Mail($from, $subject, $to, $content);
// $apiKey = getenv('SENDGRID_API_KEY');
// $sg = new \SendGrid($apiKey);
// $response = $sg->client->mail()->send()->post($mail);
// echo $response->statusCode();
// print_r($response->headers());
// echo $response->body();
?>