<?php

include '../../connect.php';

require_once '../../fpdf/fpdf.php';


if ($_REQUEST['nurse']) {
    $n = $_REQUEST['nurse'];
    $id = $_REQUEST['form'];
    $mon = $_REQUEST['mon']/100;

    $sql = "UPDATE `request_form` SET `Status`=2 WHERE `Request_id`=$id";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die(mysqli_error($con));
    }

    $sql_nurse = "select * from `request_form` where `Request_id`=$id";
    $result_nurse = mysqli_query($con, $sql_nurse);
    $row_nurse = mysqli_fetch_assoc($result_nurse);
    $service = $row_nurse['service_name'];
    $ser = "For " . $service;

    $payId = $_REQUEST['payId'];
    $sql_payment = "INSERT INTO `user_payment`(`pay_id`,`request_form`, `Type`, `Tran_amount`) VALUES ('$payId',$id,'$ser','$mon')";
    $result_payment = mysqli_query($con, $sql_payment);

    if (!$result) {
        die(mysqli_error($con) + " So payment not added to Database");
    }

    $sql_update = "UPDATE `requested_nurse` SET `acc_balance`=`acc_balance`+ $mon WHERE `email`='$n'";
    $result_update = mysqli_query($con, $sql_update);

    if (!$result) {
        die(mysqli_error($con) + " So Account Balance not Updated");
    }
}


$sql_nurse = "select * from `request_form` where `Request_id`=$id";
$result_nurse = mysqli_query($con, $sql_nurse);
$row_nurse = mysqli_fetch_assoc($result_nurse);
$service = $row_nurse['service_name'];
$n = $row_nurse['nurse_email'];
$u = $row_nurse['User_Email'];


$sql_n = "SELECT * FROM `user_payment` WHERE `request_form`=$id";
$result_n = mysqli_query($con, $sql_n);


if (!$result_nurse || !$result_n) {
    die(mysqli_error($con));
}

ob_end_clean();
$pdf = new FPDF('p', 'mm', 'A4');
$pdf->AddPage();

$pdf->Image('../../logo.jpeg', 35, 6, 30, 0, '', 'http://localhost/Project/NN/Medicio/index.php');

$pdf->SetFont('Arial', 'B', 20);
$pdf->SetTextColor(0, 204, 204);
$pdf->Cell(0, 30, "Neighbouring Nurse", 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln(20);

$row = mysqli_fetch_assoc($result_n);
$pdf->Cell(0, 10, "Payment Date :", 0, 0, 'L');
$pdf->Cell(0, 10, $row['Time'], 0, 1, 'R');
$pdf->Cell(0, 10, "Payment Id :", 0, 0, 'L');
$pdf->Cell(0, 10, $row['pay_id'], 0, 1, 'R');
$pdf->Cell(0, 10, "Pay Amount :", 0, 0, 'L');
$pdf->Cell(0, 10, $row['Tran_amount'], 0, 1, 'R');
$pdf->Ln(10);

$sql_u = "select * from `patient` where `Email`='$u'";
$result_u = mysqli_query($con, $sql_u);
$row_n = mysqli_fetch_assoc($result_u);
$u_name = $row_n['Name'];
$u_email = $row_n['email2'];

$pdf->Cell(0, 10, "User :", 0, 0, 'L');
$pdf->Cell(0, 10, $u_name, 0, 2, 'R');
$pdf->Cell(0, 10, $u_email, 0, 1, 'R');
$pdf->Ln(10);

$sql_n = "select * from `requested_nurse` where `email`='$n'";
$result_n = mysqli_query($con, $sql_n);
$row_n = mysqli_fetch_assoc($result_n);
$n_name = $row_n['name'];
$n_email = $row_n['email2'];

$pdf->Cell(0, 10, "Nurse :", 0, 0, 'L');
$pdf->Cell(0, 10, $n_name, 0, 2, 'R');
$pdf->Cell(0, 10, $n_email, 0, 1, 'R');
$pdf->Ln(10);

$pdf->Cell(0, 10, "Service :", 0, 0, 'L');
$pdf->Cell(0, 10, $service, 0, 2, 'R');
$pdf->Cell(0, 10, $mon . " Rs.", 0, 1, 'R');
$pdf->Ln(10);

$pdf->Cell(0, 10, "Thanks for your payment", 1, 0, 'C');

$file = time() . "payment_receipt" . '.pdf';
$dest='../../Nurse/Nurse_signup/upload/'.$file;

$sql = "UPDATE `request_form` SET `receipt`='$dest' WHERE `Request_id`=$id";
$result = mysqli_query($con, $sql);

if (!$result) {
    die(mysqli_error($con));
}

$pdf->output($dest, 'F');

header("location:../profile/App.php");

ob_end_flush();
