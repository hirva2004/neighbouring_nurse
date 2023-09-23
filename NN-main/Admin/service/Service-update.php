<?php
include "../../connect.php";
echo "done";
$user = $_SESSION['admin'];
$s=$_SESSION['current_service'];

if (isset($_POST['save'])) {
	echo "done";
	$service =  $_REQUEST['service'];
	$charge = $_REQUEST['charge'];
	$des = $_REQUEST['des'];

	$sql = "UPDATE `services` SET `service_name`='$service',`s_charge`='$charge',`description`='$des',`Modified_By`='$user',`Modified_time`= current_timestamp() where `service_name`='$s'";


	if (mysqli_query($con, $sql))
		echo "<p>Data updated Successfully.</p>";


	header("location:admin_ser.php");
}

mysqli_close($con);
