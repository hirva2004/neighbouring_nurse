<?php
include "../../connect.php";
$mail = $_SESSION['nurse'];

if (isset($_POST['save'])) {

	$pincode = $_REQUEST['pinId'];
	$sql = "INSERT INTO `nurse_selected_areas` (`email`,`Pincode`) VALUES ('$mail',$pincode)";
	if (mysqli_query($con, $sql)) {
		echo "<p>Data Added Successfully.</p>";
	} else
		die(mysqli_error($con));

	header('location:location.php');
}


mysqli_close($con);
