<?php

include '../../connect.php';

if (!(isset($_SESSION['user']['terms'])) && !(isset($_SESSION['user']['email']) && !(isset($_SESSION['user']['data'])))) {
    header('location:conditions.php');
}

$data = $_SESSION['user']['data'];
$name = $data['fname'];
$password = $data['password'];
$phno = $data['phone'];
$reg_id = $data['reg_id'];
$hos_email = $_SESSION['user']['email'];
$address = $data['address'];

// echo $data;
echo $name . "\n";
echo $password . "\n";
echo $phno . "\n";
echo $reg_id;
echo $hos_email;

$sql = "INSERT INTO `hospital`(`reg_id`, `hos_email`, `hos_password`, `phno`, `hos_name`, `hos_addrtess`,
     `created_time`) VALUES ($reg_id,'$hos_email','$password','$phno','$name','$address',CURRENT_TIMESTAMP())";


$result = mysqli_query($con, $sql);
if (!$result) {
    die(mysqli_error($con));
}

header('location:../login/login.php');

