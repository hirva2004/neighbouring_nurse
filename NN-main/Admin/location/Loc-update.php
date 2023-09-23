<?php
include "../../connect.php";
$user = $_SESSION['admin'];
if (isset($_POST['save'])) {
	$state =  $_REQUEST['state'];
	$district = $_REQUEST['district'];
	$area = $_REQUEST['area'];
	$pincode = $_REQUEST['pincode'];
	$sql = "UPDATE `location` SET `Pincode`='$pincode',`area_name`='$area',`district`='$district',`state`='$state',`Modified_By`='$user',`Modified_time`= current_timestamp() where Pincode='$pincode'";
	if (mysqli_query($con, $sql))
		echo "<p>Data updated Successfully.</p>";
	else
		die(mysqli_error($con));
}
header("location:admin_loc.php?admin='$user'");


mysqli_close($con);
