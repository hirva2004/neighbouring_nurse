<?php
include "../../connect.php";
$user = $_SESSION['admin'];

$state =  $_REQUEST['state'];
$district = $_REQUEST['district'];
$area = $_REQUEST['area'];
$pincode = $_REQUEST['pincode'];
if (mysqli_query($con, "INSERT INTO `location` (`Pincode`, `area_name`, `district`, `state`, `addedby`, `added_time`) VALUES ('$pincode','$area','$district','$state','$user',current_timestamp())"))
	echo "<p>Data Added Successfully.</p>";

header("location:admin_loc.php?admin='$user'");
mysqli_close($con);
