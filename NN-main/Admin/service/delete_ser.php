<?php

include "../../connect.php";

$user = $_SESSION['admin'];
if (isset($_REQUEST['service'])) {
  $sql = "DELETE FROM `services` WHERE `service_name`='" . $_REQUEST['service'] . "'";
  echo "done";
  $result = mysqli_query($con, $sql);
  echo "done";
  if (!$result) {
    die(mysqli_error($con));
  }

  header("location:admin_ser.php");
}
