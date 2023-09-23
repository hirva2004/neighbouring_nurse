<?php

include '../../connect.php';


$form=$_POST['form'];
$s=0;
$n=0;
$u=0;
$f=0;

if(isset($_POST['s'])){
    $s=1;
    $f=1;
}else if(isset($_POST['n'])){
    $n=1;
    $f=2;
}else{
    $u=1;
    $f=3;
}

$sql = "select * from `request_form` where `Request_id`=$form";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    $email = $row['nurse_email'];
    $sql_nurse = "SELECT * FROM `requested_nurse` WHERE `email`='$email'";
    $result_nurse = mysqli_query($con, $sql_nurse);
    $row_nurse = mysqli_fetch_assoc($result_nurse);

    $s_f=$row_nurse['Satisfied'];
    $u_f=$row_nurse['Neutral'];
    $n_f=$row_nurse['Unhappy'];

    $s_f+=$s;
    $u_f+=$u;
    $n_f+=$n;

    $sql_nurse = "UPDATE `requested_nurse` SET `Satisfied`=$s_f, `Neutral`=$n_f, `Unhappy`=$u_f  WHERE `email`='$email'";
    $result_nurse = mysqli_query($con, $sql_nurse);

    $sql_form = "UPDATE `request_form` SET `feed`=$f WHERE `Request_id`=$form";
    $result_form = mysqli_query($con, $sql_form);

    header('location:App.php');

}
