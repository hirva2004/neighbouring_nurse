<?php
include "../../connect.php";

$e = $_SESSION['nurse'];
if (isset($_POST['save'])) {
	echo "done";
	$ser =  $_REQUEST['service'];
	$charge = $_REQUEST['charge'];


	$sql = "UPDATE `nurse_selected_services` SET `s_charge`='$charge' where `service_name`='$ser' AND `email`='$e'";


	if (mysqli_query($con, $sql)) {
		echo "<p>Data updated Successfully.</p>";
	} else
		echo "Error";

	header("location:service.php");
}

mysqli_close($con);
