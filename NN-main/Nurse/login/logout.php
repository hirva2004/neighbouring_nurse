<?php
        include '../../connect.php';              
        session_unset();
?>

<?php

//logout.php

include('config.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:../../Medicio/index.php');
?>