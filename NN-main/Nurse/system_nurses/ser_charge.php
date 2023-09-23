<?php
include '../../connect.php';
$e = $_SESSION['nurse'];
$t = $_POST['service'];
$sql = "SELECT `s_charge` from `services` WHERE `service_name`='$t'";

if ($con) {
	$result = mysqli_query($con, $sql);

	if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "{$row['s_charge']}";
?>
			<?php
		}
	} else {
		die('Query problem! in area name');
	}
} else {
	die('Db Problem!');
}

			?>