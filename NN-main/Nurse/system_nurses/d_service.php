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
        $user_mail=$row_user['email2'];

        $sql_nurse = "SELECT * FROM `requested_nurse` WHERE `email`='$n_mail'";
        $result_nurse = mysqli_query($con, $sql_nurse);
        $row_nurse = mysqli_fetch_assoc($result_nurse);

        $n_name = $row_nurse['name'];
        $n_email = $row_nurse['email2'];

        $subject = "Neighbouring Nurse";
        $body = "$n_email has refused for your requested appointment, for $ser at $loc @$time";
        $headers = "From: ht1872004@gmail.com";
        $to_email =$user_mail;

        if (!mail($to_email, $subject, $body, $headers)) {
            die(mysqli_error($con));
        } else {

            $sql_update = "UPDATE `request_form` SET `Status`=-1 WHERE `Request_id`=$form";
            $result_update = mysqli_query($con, $sql_update);

            header('location:accepted_services.php');
        }
    }
}
