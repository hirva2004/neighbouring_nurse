<?php
include "../../connect.php";

//$user= $_SESSION['admin'];
$mail = $_SESSION['nurse'];
if (isset($_POST['save'])) {
	$t = $_POST['serviceeg'];
	$charge = $_REQUEST['charge'];

	echo "done";

	$sql = "INSERT INTO `nurse_selected_services` ( `email`,`service_name`,`s_charge`) VALUES  ('$mail','$t','$charge') ";
	if (mysqli_query($con, $sql)) {
		echo "<p>Data Added Successfully.</p>";
		header("location:service.php");
	} else
		echo "error";
}


mysqli_close($con);
