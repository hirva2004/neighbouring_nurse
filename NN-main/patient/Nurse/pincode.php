<?php
    	include '../../connect.php';

	    $t=$_POST['area'];
        $sql="SELECT * from `location` WHERE `area_name`='$t'";
	                 	
		if($con){
			$result=mysqli_query($con,$sql);
			if($result){
				while($row=mysqli_fetch_assoc($result)){
                    echo "{$row['Pincode']}";
				}
			}else{
				die('Query problem! in area name');
			}
		}else{
			die('Db Problem!');
		}
