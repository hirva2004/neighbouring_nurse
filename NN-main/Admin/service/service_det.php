<?php
include '../../connect.php';

$t = $_POST['service'];
$sql = "SELECT * FROM `services` where `service_name`='$t'";

if ($con) {
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION['current_service']=$row['service_name'];
?>
            <div class='form-group'>
                <label class='col-md-12 mb-0'>Charges</label>
                <div class='col-md-12'>
                    <input type='text' value='<?php echo "{$row['s_charge']}"; ?>' id='charge' class='form-control ps-0 form-control-line' disabled>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-md-12 mb-0'>Description</label>
                <div class='col-md-12'>
                    <textarea rows='5' class='form-control ps-0 form-control-line' style='resize:none;' id="des" disabled>
                    <?php echo "{$row['description']}"; ?>
                </textarea>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-md-12 mb-0'>Added By</label>
                <div class='col-md-12'>
                    <input type='text' class='form-control ps-0 form-control-line' value='<?php echo "{$row['Added_by']}"; ?>' disabled>
                </div>
            </div>
            <div class='form-group'>
                <label class='col-md-12 mb-0'>Added Time</label>
                <div class='col-md-12'>
                    <input type='text' class='form-control ps-0 form-control-line' value='<?php echo "{$row['Added_time']}"; ?>' disabled>
                </div>
            </div>
            <!-- <div class='form-group'>
                <label class='col-md-12 mb-0'>Modified By</label>
                <div class='col-md-12'>
                    <input type='text' class='form-control ps-0 form-control-line' value='<?php echo "{$row['Modified_By']}"; ?>' disabled>
                </div>
            </div> -->
            <div class='form-group'>
                <div class='col-sm-12 d-flex'>
                    <button type='button' class='btn btn-success mx-4 me-md-3 text-white' style='background-color:rgba(63,187,192,255); border:0px' data-bs-toggle='modal' data-bs-target='#exampleModal'>Add</button>
                    <button type='button' class='btn btn-success mx-4 me-md-3 text-white' style='background-color:rgba(63,187,192,255); border:0px' data-bs-toggle='modal' data-bs-target='#updateModal' onclick="dataSelectedUpdate()">Update </button>
                    <button type='button' class='btn btn-success mx-auto mx-md-0 text-white' style='background-color:rgba(63,187,192,255) ; border:0px' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Remove</button>
                </div>
            </div>
<?php
        }
    } else {
        die('Query problem! in area name');
    }
} else {
    die('Db Problem!');
}

?>