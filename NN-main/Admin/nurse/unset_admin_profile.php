<?php

    include '../../connect.php';

    unset($_SESSION['admin_profile']);

    if(isset($_REQUEST['re'])){
         header('location:accepted_nurses.php');
    }else{
        header('location:req_nurses.php');
    }

?>