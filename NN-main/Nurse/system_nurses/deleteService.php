<?php

    include "../../connect.php";
   
    $e =$_SESSION['nurse'] ;
    // $user= $_SESSION['admin'] ;  
    if(isset($_REQUEST['service']))
    {
        $t=$_REQUEST['service'];
        $sql="DELETE FROM `nurse_selected_services` WHERE `service_name`='$t'AND `email`='$e'";
        $result=mysqli_query($con,$sql);
        echo "done";
        if(!$result){
			die(mysqli_error($con));
		}
    }

    header("location:service.php");
    
    

?>