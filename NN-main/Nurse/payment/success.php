<?php

    include '../../connect.php';

    if($_REQUEST['nurse']){
        $n=$_REQUEST['nurse'];
        $m=$_REQUEST['method'];
        
        $sql = "UPDATE `requested_nurse` SET `Approval_status`=2 WHERE email='$n';";
        $result = mysqli_query($con, $sql);
    
        if (!$result) {
            die(mysqli_error($con));
        }

        $payId=$_REQUEST['payId'];

        $sql_payment="INSERT INTO `payment`(`Pay_id`,`nurse`, `Pay_time`, `Pay_type`, `amount`) VALUES ('$payId','$n',CURRENT_TIMESTAMP(), 'Account Activation',1000)";
        $result_payment=mysqli_query($con,$sql_payment);
        
        if (!$result) {
            die(mysqli_error($con) + " So payment not added to Database");
        }

        $sql_update="UPDATE `requested_nurse` SET `acc_balance`=1000 WHERE `email`='$n'";
        $result_update=mysqli_query($con,$sql_update);

        if (!$result) {
            die(mysqli_error($con) + " So Account Balance not Updated");
        }
        
        header("location:pay_reciept.php?nurse=$n");
        header("location:../system_nurses/profile.php?nurse=$n");



    }
