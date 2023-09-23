<?php

include '../../connect.php';

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}

if (!$con) {
    die("Not connected to db");
}

$sql_req = "SELECT * FROM `request_form` WHERE `Request_id`=$id";
$result = mysqli_query($con, $sql_req);

if (!$result) {
    die(mysqli_error($con));
}

if (mysqli_num_rows($result) == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        $email = $row['User_Email'];
        $nurse = $row['nurse_email'];
        $form = $row['Request_id'];
        $service = $row['service_name'];
        $is_nurse = $row['is_nurse'];

        if($is_nurse == 1){
            $sql_user = "SELECT * FROM `requested_nurse` WHERE `email`='$email'";
            $result_user = mysqli_query($con, $sql_user);
            $row_user = mysqli_fetch_assoc($result_user);
        }else{
            $sql_user = "SELECT * FROM `patient` WHERE `Email`='$email'";
            $result_user = mysqli_query($con, $sql_user);
            $row_user = mysqli_fetch_assoc($result_user);
        }

        $mail = $row_user['email2'];
        $name = $row_user['Name'];
        $ph = $row_user['Ph No'];

        $sql_user = "SELECT * FROM `nurse_selected_services` WHERE `email`='$nurse' and `service_name`='$service'";
        $result_charge = mysqli_query($con, $sql_user);
        $row_charge = mysqli_fetch_assoc($result_charge);
        $charge = $row_charge['s_charge'] * 100;
    }
} else {
    die(mysqli_error($con));
}

?>
<body>
    <a href="../profile/App.php">Back to Appointments</a>
</body>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var options = {
        "key": "rzp_test_Nn47y52bQed0NF", // Enter the Key ID generated from the Dashboard   
        "amount": "<?php echo $charge; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise    
        "currency": "INR",
        "name": "Neighbouring Nurse",
        "description": "<?php echo "For " . $service; ?>",
        "image": "https://example.com/nurse_logo_2.png",
        // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1    
        "handler": function(response) {
            // alert(response.razorpay_payment_id);
            // console.log(response);
            window.location.href = 'success.php?nurse=<?php echo $nurse; ?>&mon=<?php echo $charge; ?>&form=<?php echo $form; ?>&payId=' + response.razorpay_payment_id;
        },
        "prefill": {
            "name": "<?php echo $name; ?>",
            "email": "<?php echo $mail; ?>",
            "contact": "<?php echo $ph; ?>"
        },
        "notes": {
            "address": "Government Polytechnic Ahmedabad"
        },
        "theme": {
            "color": "#36c7c9"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.on('payment.failed',
        function(response) {
            console.log(response);
            alert('Payment Failed!! Try Again');
            window.location.href = '../profile/App.php';
        });


    $(function() {
        rzp1.open();
    });
</script>