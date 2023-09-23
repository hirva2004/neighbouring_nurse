<?php
include "../connect.php";
//$user= $_SESSION['admin'];
//$mail = "diya@5113";
if (isset($_POST['save'])) {

  $t = $_POST['service'];
  $loc = $_POST['location'];
  $pin = '';

  echo $t . "<br>" . $loc . "<br>";

  $query = "SELECT `Pincode` from `location` where `area_name`='$loc'";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
      $pin=$row['Pincode'];
      echo $pin . "<br>";
    }
  }
  $sql = "SELECT `Email` from `nurse_selected_services` where `service_name`='$t'";
  $ans = mysqli_query($con, $sql);

  if (mysqli_num_rows($ans)) {
    while ($ro = mysqli_fetch_assoc($ans)) {
      $email = $ro['Email'];
      echo "$email"."<br>";

      $res = "SELECT `Email` from `nurse_selected_areas` where `Pincode`='$pin' and `Email`='$email'";
      $ans = mysqli_query($con, $res);
      if (mysqli_num_rows($ans)) {
          while ($ro = mysqli_fetch_assoc($ans)) {
              $email = $ro['Email'];
              echo $email;
      }
    }
  }
  }  
}
