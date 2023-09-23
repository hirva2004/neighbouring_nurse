<?php
include '../../connect.php';

$id = $_POST['id'];
$t=$_POST['time'];


$sql = "SELECT * FROM `request_form` where `Request_id`=$id";
if ($con) {
    $result = mysqli_query($con, $sql);
    if ($result) {
        $serial = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $nurse = $row['nurse_email'];
            $sql_nurse = "SELECT * FROM `requested_nurse` WHERE `email`='$nurse'";
            $result_nurse = mysqli_query($con, $sql_nurse);
            $row_nurse = mysqli_fetch_assoc($result_nurse);
?>

            <h6>
                <table align="center" cellpadding="10" cellspacing="10" bgcolor="White">
                    <tr>
                        <td><b>Nurse email:</b></td>
                        <td><input type="email" name="user_mail" value="<?php echo  $row_nurse['email2']; ?>" style="width:600px;border-color:lightgrey;padding:5px;border-radius:5px;" id="NurseName" readonly /></td>
                    </tr>
                    <tr>
                        <td><b>Service :</b></td>
                        <td><input type="text" name="service" value="<?php echo $row['service_name']; ?>" style="width:600px;border-color:lightgrey;padding:5px;border-radius:5px;color:black;" readonly /></td>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Date-Time :</b></td>
                        <td><input type="text" value="<?php echo $row['Service_Date_Time']; ?>" autocomplete="off" style="border-color:lightgrey;padding:5px;border-radius:5px;" id="datetime" name="date_time" readonly />
                        </td>
                    </tr>
                    <tr>
                        <td><B>Prescription:</B></TD>
                        <td>
                            <a href="../<?php echo $row['Prescription']; ?>" target="_blank">Check Here</a>
                        </td>
                    </tr>

                    <tr>
                        <td><b>Floor No. :</b></td>
                        <td><input value="<?php echo $row['Block_Number']; ?>" style="width:100%;border-color:lightgrey;padding:5px;border-radius:5px;" id="Landmark" name="floor_no" placeholder="House/Flat/Apartment No." readonly /></td>
                    </tr>
                    <tr>
                        <td><b>Landmark :</b></td>
                        <td><input value="<?php echo $row['Landmark']; ?>" style="width:100%;border-color:lightgrey;padding:5px;border-radius:5px;" id="Landmark" name="Landmark" placeholder="Landmark" readonly /></td>
                    </tr>
                    <tr>
                        <td><b>Address :</b></td>
                        <td>
                            <textarea style="border-color:lightgrey;padding:5px;border-radius:5px;" name="Address" rows="4" cols="60" readonly>
                                 <?php echo $row['Address']; ?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <?php
                        $pin = $row['Pincode'];

                        ?>

                        <td><b>Pincode :</b></td>
                        <td><input type="PINCODE" value=" <?php echo $pin; ?>" style=" border-color:lightgrey;padding:5px;border-radius:5px;" id="pincode" name="Pincode" placeholder="380007" maxlength="30" readonly />
                        </td>
                    </tr>
                    <tr>
                        <td><b>Expires at :</b></td>
                        <td><input type="PINCODE" value="<?php echo $t;?>" style=" border-color:lightgrey;padding:5px;border-radius:5px;" id="pincode" name="Pincode" placeholder="380007" maxlength="30" readonly />
                        </td>
                    </tr>
                </table>
            </h6>

<?php
        }
    }
} ?>