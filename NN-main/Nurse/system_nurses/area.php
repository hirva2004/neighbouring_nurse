<?php
    	include '../../connect.php';

	    $t=$_POST['district'];
        $sql="SELECT * from `location` WHERE `district`='$t'";
              	
		if($con){
			$result=mysqli_query($con,$sql);

			if($result){
                ?>
        <option value="0"><?php echo "";?></option>

        <?php
				while($row=mysqli_fetch_assoc($result)){
					?>
        <option value="<?php echo $row['area_name'];?>"><?php echo $row['area_name'];?></option>
			<?php
				}
			}else{
				die('Query problem! in area name');
			}

		}else{
			die('Db Problem!');
		}
                   		            
?>