<?php

/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
//   include($php_email_form);
// } else {
//   die('Unable to load the "PHP Email Form" Library!');
// }

$from_name = $_POST['name'];
$from_email = $_POST['email'];
$msg = $_POST['subject'];

$subject = "Neighbouring Nurse";
$body = "From: $from_name 
Message: $msg
Reply: $from_email";
$headers = "From: ht1872004@gmail.com";

if (mail($headers, $subject, $body, $headers)) {
  header('location:../index.php');
} else {
  mysqli_error($con);
}
