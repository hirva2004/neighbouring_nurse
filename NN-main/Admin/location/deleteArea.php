<?php

    include '../../connect.php';

    if(isset($_REQUEST['pin'])){
        $pin=$_REQUEST['pin'];

        if(!$con){
			die("Not connected to db");
		}

        $sql="DELETE FROM `location` WHERE `Pincode`=$pin";
        $result=mysqli_query($con,$sql);

        if(!$result){
			die(mysqli_error($con));
		}

        header("location:admin_loc.php");

    }

?>