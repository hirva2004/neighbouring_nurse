<?php

    include '../../connect.php';

    if(isset($_POST['n_update'])){
        print_r($_POST);

        if(!$con){
			die("Not connected to db");
		}

        $mail2=$_SESSION['nurse'];
        $name=$_POST['n_name'];
        $ph=$_POST['n_ph'];
        $bio=$_POST['n_bio'];
        $gender=$_POST['gender'];

        echo $mail2."<br>";
        echo $name."<br>";
        echo $ph."<br>";
        echo $gender."<br>";
        echo $bio."<br>";

        $sql_update="UPDATE `requested_nurse` SET `name`='$name',`ph_no`='$ph',`gender`='$gender',`bio`='$bio',`Modified_Time`=CURRENT_TIMESTAMP() WHERE `email`='$mail2'";
        $result=mysqli_query($con,$sql_update);
        header("location:profile.php?nurse='$mail2'");
    }

?>