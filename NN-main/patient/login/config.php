<?php
//config.php

//Include Google Client Library for PHP autoload file
require_once '../../vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
// $google_client->setClientId('231554672595-s64on8aajclp9uo2eph849hnbqghdjqj.apps.googleusercontent.com');
// $google_client->setClientId('231554672595-o3gcrdl3l8fh9tld21vt8jg7artierqd.apps.googleusercontent.com');
$google_client->setClientId('255277120943-vr65qf14b9l7nbd9rgfsedm5cc2vu3bn.apps.googleusercontent.com');


//Set the OAuth 2.0 Client Secret key
// $google_client->setClientSecret('x8xOrFHwBOa-PQfUb7kxR2Is');
// $google_client->setClientSecret('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');
$google_client->setClientSecret('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');



//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Project/NN/patient/login/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>