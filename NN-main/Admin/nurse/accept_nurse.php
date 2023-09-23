<?php
     include '../../connect.php';

     if (isset($_SESSION['accept_nurse']) && isset($_SESSION['admin'])) {
 
         if (!$con) {
             die("Not connected to db");
         }
 
         $email = $_SESSION['accept_nurse'];
         $admin=$_SESSION['admin'];
 
         $sql_req = "UPDATE `requested_nurse` SET `Approval_status`=1 WHERE `email`='$email';";
         $result = mysqli_query($con, $sql_req);
 
         if (!$result) {
             die(mysqli_error($con));
         }
 
         $sql_approv = "INSERT INTO `approval_status`(`Email`, `Admin_email`, `Approval _Status`,`Reason`, `Approval_time`) VALUES ('$email','$admin',1,'',CURRENT_TIMESTAMP())";
         $result = mysqli_query($con, $sql_approv);
 
         if (!$result) {
             die(mysqli_error($con));
         }

         $sql_nurse= "SELECT * FROM `requested_nurse` WHERE `email`='$email'";
         $result = mysqli_query($con, $sql_nurse);
 
         if (!$result) {
             die(mysqli_error($con));
         }

         $row=mysqli_fetch_assoc($result);

         $to_email=$row['email2'];
         $subject = "Neighbouring Nurse";
         $body = "Admin has accepted your request for creating your account as Nurse
          Now do Payment of 1000Rs as a deposite for trust.
          <a href='http://localhost/Project/NN/Nurse/payment/nurse_payment.php?nurse=$email'>PAYMENT</a>";
         $headers = "From: ht1872004@gmail.com";

         if (mail($to_email, $subject, $body, $headers)) {
            header('location:req_nurses.php');
         } else {
            die("<script>Mail Not send</script>");
         }

     }

?>