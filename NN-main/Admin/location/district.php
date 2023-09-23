<?php
    	include '../../connect.php';

	    $t=$_POST['state'];
        $sql="SELECT DISTINCT `district` from `location` WHERE `state`='$t'";

		                 	
		if($con){
			$result=mysqli_query($con,$sql);

			if($result){
                ?>
        <option value="0"><?php echo "";?></option>

        <?php
				while($row=mysqli_fetch_assoc($result)){
					?>
        <option value="<?php echo $row['district'];?>"><?php echo $row['district'];?></option>
			<?php
				}
			}else{
				die('Query problem! in district');
			}

		}else{
			die('Db Problem!');
		}
                   		            
?>