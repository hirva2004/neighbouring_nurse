<?php

    include 'connect.php';

    if(isset($_POST['n_update'])){
        print_r($_POST);

        if(!$con){
			die("Not connected to db");
		}

        $mail2=$_POST['n_mail'];
        $mail=md5($mail2);
        $name=$_POST['n_name'];
        $ph=$_POST['n_ph'];
        //$bio=$_POST['n_bio'];
       // $gender=$_POST['gender'];

        echo $mail2."<br>";
        echo $mail."<br>";
        echo $name."<br>";
        echo $ph."<br>";
      //  echo $gender."<br>";
       // echo $bio."<br>";

        $sql_update="UPDATE `patient2` SET `Email`='$mail',`email2`='$mail2',`Name`='$name',`Modified_Time`=CURRENT_TIMESTAMP() WHERE `email2`='$mail2'";
        $result=mysqli_query($con,$sql_update);

        if(!$result){
			die(mysqli_error($con));
		}

        header("location:profile-pages.php?user='$mail'");
    }

?>