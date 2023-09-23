<?php
    include '../../connect.php';

    
    if (!$con) {
        die("Not connected to db");
    }

    $email = $_SESSION['nurse'];

    $sql_select = "SELECT * FROM `requested_nurse` WHERE `email`='$email'";
    $result_select = mysqli_query($con, $sql_select);

    if (!$result_select) {
        die(mysqli_error($con));
    }

    while($row=mysqli_fetch_assoc($result_select)){
        $to_email=$row['email2'];
        $rn=$row['rn_cert'];
        $pic=$row['profile_pic'];
        unlink("../Nurse_signup/".$pic);
        unlink("../Nurse_signup/".$rn);
    }

    $sql_cert = "SELECT * FROM `certificates` WHERE `email`='$email'";
    $result_cert = mysqli_query($con, $sql_cert);

    if (!$result_cert) {
        die(mysqli_error($con));
    }

    while($row=mysqli_fetch_assoc($result_cert)){
        $cert=$row['certificate'];
        unlink("../Nurse_signup/".$rn);
    }

    $sql_exp = "SELECT * FROM `experience` WHERE `email`='$email'";
    $result_exp = mysqli_query($con, $sql_exp);

      if (!$result_exp) {
        die(mysqli_error($con));
    }

    while($row=mysqli_fetch_assoc($result_exp)){
        $cert=$row['Exp_letter'];
        unlink("../Nurse_signup/".$rn);
    }

    $sql_delete = "DELETE FROM `requested_nurse` WHERE `email`='$email'";
    $result_delete = mysqli_query($con, $sql_delete);

    if (!$result_delete) {
        die(mysqli_error($con));
    }

    $subject = "Neighbouring Nurse";
    $body = "Your Account at Neighbouring Nurse has been successfully deleted.";
    $headers = "From: ht1872004@gmail.com";

    if (mail($to_email, $subject, $body, $headers)) {
        echo "
      console.log(
       ";  
       mysqli_error($con);
       echo ");";
    } else {
      echo "
      console.log(
      ";  
      mysqli_error($con);
      echo ");";
    }

    session_unset();
    session_destroy();

  header('location:../../Medicio/index.php');
