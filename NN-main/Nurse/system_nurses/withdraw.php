<?php
include '../../connect.php';

print_r($_REQUEST);
print_r($_SESSION);

if (!$con) {
    die("Not connected to db");
}

$email = $_SESSION['nurse'];
$sql = "SELECT * FROM `requested_nurse` WHERE `email`='$email'";
$result = mysqli_query($con, $sql);

if (!$result) {
    die(mysqli_error($con));
}
$row = mysqli_fetch_assoc($result);
$a=$_REQUEST['a'];
$amount=$row['acc_balance']-$a;
$sql = "UPDATE `requested_nurse` SET `acc_balance`=$amount,`Modified_Time`=CURRENT_TIMESTAMP() WHERE `email`='$email'";
$result = mysqli_query($con, $sql);

if (!$result) {
    die(mysqli_error($con));
}

header("location:profile.php");