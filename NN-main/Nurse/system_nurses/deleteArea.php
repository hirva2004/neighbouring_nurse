<?php
include "../../connect.php";

$mail = $_SESSION['nurse'];
$pincode = $_REQUEST['pincode'];

$sql = "DELETE FROM `nurse_selected_areas` WHERE `Pincode`='$pincode' AND `Email`='$mail'";
if (mysqli_query($con, $sql)) {
	echo "<p>Data deleteded Successfully.</p>";
	// header("location:Admin-Service.php?admin='$user'");
} else
	echo "error";

mysqli_close($con);

header('location:location.php');