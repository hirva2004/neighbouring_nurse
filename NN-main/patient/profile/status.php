<?php

include "../../connect.php";

$formId = $_REQUEST['formid'];
$service = $_REQUEST['service'];

$sql = "UPDATE `request_form` SET `Status`=4 where `Request_id`=$formId";
$result=mysqli_query($con, $sql);

$sql = "select * from `request_form` where `Request_id`=$formId";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$user=$row['User_Email'];
$n=$row['nurse_email'];

if (!$result)
    die('Not Executed');

$sql_u = "select * from `patient` where `Email`='$user'";
$result_u = mysqli_query($con, $sql_u);
$row_n = mysqli_fetch_assoc($result_u);
$u_name = $row_n['Name'];
$u_email = $row_n['email2'];
$u_mail = $row_n['Email'];

$sql_u = "select * from `requested_nurse` where `email`='$n'";
$result_u = mysqli_query($con, $sql_u);
$row_n = mysqli_fetch_assoc($result_u);
$nurse_mail = $row_n['email2'];


$subject = "Neighbouring Nurse ";
$link="http://localhost/Project/NN/Nurse/system_nurses/offline_app.php?user=$u_mail&id=$formId";
$body = "You will get an Offline Payment By $u_name [$u_email] for $service

Click Here If you recieved the payemnt : $link
";
$headers = "From: ht1872004@gmail.com";

if (mail($nurse_mail, $subject, $body, $headers)) {
    echo "alert('Email sent');";
} else {
    echo "alert('Email sent Error');";
}

header('location:App.php');

mysqli_close($con);
