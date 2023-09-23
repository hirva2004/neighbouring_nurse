<?php
include "../../connect.php";
echo "done";
$user = $_SESSION['admin'];
if (isset($_POST['save'])) {
	$service = $_REQUEST['service'];
	$charge = $_REQUEST['charge'];
	$des = $_REQUEST['des'];
	echo "done";
	$sql = "INSERT INTO `services` (`service_name`, `s_charge`, `description`,`Added_by`, `Added_time`) VALUES  ('$service','$charge','$des','$user', current_timestamp()) ";
	if (mysqli_query($con, $sql)) {
		echo "<p>Data Added Successfully.</p>";
		header("location:admin_ser.php");
	} else
		echo "error";
}

mysqli_close($con);
