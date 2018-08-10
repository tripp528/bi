<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
require '../../vendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();

$email->addTo("test@sendgrid.com")
      ->setFrom("you@youremail.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);

?>
