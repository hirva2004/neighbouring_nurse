<?php

include '../../connect.php';
require_once '../../fpdf/fpdf.php';


function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


$formId = $_REQUEST['id'];
$sql_n = "SELECT * FROM `user_payment` WHERE `request_form`=$formId";
$result_n = mysqli_query($con, $sql_n);
$row = mysqli_fetch_assoc($result_n);


if ($row['on_off'] != 0) {
    header('location:../login/login.php');
} else {

    $sql = "select * from `request_form` where `Request_id`=$formId";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $user = $row['User_Email'];
    $n = $row['nurse_email'];
    $service = $row['service_name'];


    $sql = "select * from `request_form` where `Request_id`=$formId";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $user = $row['User_Email'];
    $n = $row['nurse_email'];
    $service = $row['service_name'];

    $sql = "SELECT * FROM `nurse_selected_services` where `email`='$n' and `service_name`='$service'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $service_charge = $row['s_charge'];

    if (!$result)
        die('Not Executed');

    $sql_u = "select * from `patient` where `Email`='$user'";
    $result_u = mysqli_query($con, $sql_u);
    $row_n = mysqli_fetch_assoc($result_u);
    $u_name = $row_n['Name'];
    $u_email = $row_n['email2'];
    $u_mail = $row_n['Email'];

    $sql_u = "select * from `requested_nurse` where `email`='$n'";
    $result_u = mysqli_query($con, $sql_u);
    $row_n = mysqli_fetch_assoc($result_u);
    $nurse_mail = $row_n['email2'];
    $nurse_email = $row_n['email'];
    $nurse_name = $row_n['name'];

    $payId = 'pay_' . generateRandomString(10);
    $ser = "Offline for " . $service;
    $sql_payment = "INSERT INTO `user_payment`(`pay_id`,`request_form`, `Type`, `Tran_amount`) VALUES ('$payId',$formId,'$ser','$service_charge')";
    $result_payment = mysqli_query($con, $sql_payment);

    if (!$result) {
        die(mysqli_error($con) + " So payment not added to Database");
    }

    $sql_n = "SELECT * FROM `user_payment` WHERE `request_form`=$formId";
    $result_n = mysqli_query($con, $sql_n);

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
    $pdf->Cell(0, 10, "Pay Id :", 0, 0, 'L');
    $pdf->Cell(0, 10, $row['pay_id'], 0, 1, 'R');
    $pdf->Cell(0, 10, "Pay Amount :", 0, 0, 'L');
    $pdf->Cell(0, 10, $row['Tran_amount'], 0, 1, 'R');
    $pdf->Ln(10);

    $pdf->Cell(0, 10, "User :", 0, 0, 'L');
    $pdf->Cell(0, 10, $u_name, 0, 2, 'R');
    $pdf->Cell(0, 10, $u_email, 0, 1, 'R');
    $pdf->Ln(10);

    $pdf->Cell(0, 10, "Nurse :", 0, 0, 'L');
    $pdf->Cell(0, 10, $nurse_name, 0, 2, 'R');
    $pdf->Cell(0, 10, $nurse_mail, 0, 1, 'R');
    $pdf->Ln(10);

    $pdf->Cell(0, 10, "Service :", 0, 0, 'L');
    $pdf->Cell(0, 10, $service, 0, 2, 'R');
    $pdf->Cell(0, 10, $service_charge . " Rs.", 0, 1, 'R');
    $pdf->Ln(10);

    $pdf->Cell(0, 10, "Thanks for your payment", 1, 0, 'C');

    $file = time() . "payment_receipt" . '.pdf';
    $dest = '../../Nurse/Nurse_signup/upload/' . $file;

    $sql = "UPDATE `request_form` SET `receipt`='$dest',`Status`=2 WHERE `Request_id`=$formId";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die(mysqli_error($con));
    }

    $sql_n = "UPDATE `user_payment` SET `on_off`=1 WHERE `request_form`=$formId";
    $result_n = mysqli_query($con, $sql_n);

    $pdf->output($dest, 'F');
    ob_end_flush();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Nurse Registration </title>
    <link href="../../logo.jpeg" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <style type="text/css">
        li,
        label,
        p {
            color: #2f2f2f;
            font-family: "Roboto", sans-serif;

        }

        form {
            box-shadow: 5px 5px 8px rgba(63, 187, 192, 0.7);
        }

        h3 {
            position: relative;
            color: white;
            font-size: 33px;
            font-family: "Roboto", sans-serif;
        }
    </style>
</head>

<body id="responce">
    <div class="testbox">
        <form method="post">
            <div class="banner">
                <h3 style="color:white; padding-bottom: 10%;"> Submitted!</h3>
            </div>
            <br />
            <div class="checkbox">
                <p>
                    Thanks For Your Respone!!<br>
                </p>
            </div>
            <div class="btn-block">
                <button type="button" class="btn" style="background-color:#3fbbc0; color:white;" onclick="window.location.href='profile.php?nurse=<?php echo $nurse_email; ?>'">Profile</button>
                <button type="button" class="btn" style="background-color:#3fbbc0; color:white;" onclick="window.location.href='../../Medicio/index.php?nurse=<?php echo $nurse_email; ?>'">Home</button>
            </div>
            </fieldset>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
</script>

</html>