<?php

include '../../connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM `request_form` where `Request_id`='$id'";
if ($con) {
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $u_mail = $row['User_Email'];
        $n_mail = $row['nurse_email'];
        $form = $row['Request_id'];
        $ser = $row['service_name'];
        $loc = $row['Address'];
        $time=$row['Service_Date_Time'];

        $sql_user = "SELECT * FROM `patient` WHERE `Email`='$u_mail'";
        $result_user = mysqli_query($con, $sql_user);
        $row_user = mysqli_fetch_assoc($result_user);

        $sql_nurse = "SELECT * FROM `requested_nurse` WHERE `email`='$n_mail'";
        $result_nurse = mysqli_query($con, $sql_nurse);
        $row_nurse = mysqli_fetch_assoc($result_nurse);

        $n_name = $row_nurse['name'];
        $n_email = $row_nurse['email2'];

        $u_mail=$row_user['email2'];
        $u_name=$row_user['Name'];

        $subject = "Neighbouring Nurse";
        $body = "$u_mail [$u_name] has cancled it's requested appointment, for $ser at $loc @$time";
        $headers = "From: ht1872004@gmail.com";
        $to_email =$n_email;

        if (!mail($to_email, $subject, $body, $headers)) {
            die(mysqli_error($con));
        } else {

            $sql_update = "UPDATE `request_form` SET `Status`=-2 WHERE `Request_id`=$form";
            $result_update = mysqli_query($con, $sql_update);

            header('location:App.php');
        }
    }
}
