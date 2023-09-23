<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>refusing requested nurse</title>
</head>
<script>
    <?php
            include '../../connect.php';

            if (isset($_SESSION['accept_nurse']) && isset($_SESSION['admin']) && isset($_POST['reason'])) {
 
                if (!$con) {
                    die("Not connected to db");
                }
        
                $email = $_SESSION['accept_nurse'];
                $admin=$_SESSION['admin'];
                $reason=$_POST['reason'];
        
                $sql_req = "UPDATE `requested_nurse` SET `Approval_status`=-1 WHERE `email`='$email';";
                $result = mysqli_query($con, $sql_req);
        
                if (!$result) {
                    die(mysqli_error($con));
                }
        
                $sql_approv = "INSERT INTO `approval_status`(`Email`, `Admin_email`, `Approval _Status`,`Reason`, `Approval_time`) VALUES ('$email','$admin',-1,'$reason',CURRENT_TIMESTAMP())";
                $result = mysqli_query($con, $sql_approv);
        
                if (!$result) {
                    die(mysqli_error($con));
                }

                $sql_select = "SELECT * FROM `requested_nurse` WHERE `email`='$email'";
                $result_select = mysqli_query($con, $sql_select);
        
                if (!$result_select) {
                    die(mysqli_error($con));
                }

                while($row=mysqli_fetch_assoc($result_select)){
                    $to_email=$row['email2'];
                }

                $subject = "Neighbouring Nurse";
                $body = "Sorry But admin has declined your account with this reason :".$reason;
                $headers = "From: ht1872004@gmail.com";

                if (mail($to_email, $subject, $body, $headers)) {
                    echo "
                  console.log(
                   ";  
                   mysqli_error($con);
                   echo ");";
                } else {
                  echo "
                  console.log(
                  ";  
                  mysqli_error($con);
                  echo ");";
                }

                $sql_delete = "DELETE FROM `requested_nurse` WHERE `email`='$email'";
                $result_select = mysqli_query($con, $sql_delete);
        
                if (!$result_select) {
                    die(mysqli_error($con));
                }

                if(isset($_REQUEST['re']) == 0){
                    header('location:req_nurses.php');   
                }else{
                    header('location:accepted_nurses.php');   
                }
       
            } 
        ?>       
</script>
</html>
