<?php

include '../../connect.php';

require_once '../../fpdf/fpdf.php';

if(isset($_REQUEST['nurse'])){
    $nurse=$_REQUEST['nurse'];
}

$sql = "SELECT * FROM `payment` where `nurse`='$nurse'";
$result = mysqli_query($con, $sql);

$sql_n = "SELECT * FROM `requested_nurse` WHERE `email`='$nurse'";
$result_n = mysqli_query($con, $sql_n);


if (!$result || !$result_n) {
    die(mysqli_error($con));
}

?>
<table>

    <?php

    if (mysqli_num_rows($result)) {

        ob_end_clean();
        $pdf = new FPDF('p', 'mm', 'A4');
        $pdf->AddPage();

        $pdf->Image('../../logo.jpeg', 35, 6, 30);

        $pdf->SetFont('Arial', 'B', 20);
        $pdf->SetTextColor(0, 204, 204);
        $pdf->Cell(0, 30, "Neighbouring Nurse", 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Ln(20);

        $row = mysqli_fetch_assoc($result);

        $pdf->Cell(0, 10, "Payment Date :", 0, 0, 'L');
        $pdf->Cell(0, 10, $row['Pay_time'], 0, 1, 'R');
        $pdf->Cell(0, 10,"Payment Id :" , 0, 0, 'L');
        $pdf->Cell(0, 10, $row['Pay_id'], 0, 1, 'R');
        $pdf->Cell(0, 10,"Pay Amount :" , 0, 0, 'L');
        $pdf->Cell(0, 10, $row['amount'], 0, 1, 'R');
        $pdf->Ln(10);


        $row_n = mysqli_fetch_assoc($result_n);

        $pdf->Cell(0, 10, "Nurse :", 0, 0, 'L');
        $pdf->Cell(0, 10, $row_n['name'], 0, 2, 'R');
        $pdf->Cell(0, 10,$row_n['email2'] , 0, 1, 'R');
        $pdf->Ln(10);

        // $pdf->Cell(0, 10, "Service :", 0, 0, 'L');
        // $pdf->Cell(0, 10, $row['Pay_time'], 0, 2, 'R');
        // $pdf->Cell(0, 10, $row['Pay_time'], 0, 1, 'R');
        $pdf->Ln(10);

        $pdf->Cell(0, 10, "Thanks for your payment", 1, 0, 'C');

        $file = time() . "payment_receipt" . '.pdf';
        $pdf->output($file, 'D');

        header("location:../system_nurses/profile.php?nurse=$nurse");

        ob_end_flush();


    }

    ?>
</table>