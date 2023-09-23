
<?php

    include '../../connect.php';  

    if(isset($_REQUEST['nurse'])){
        $nurse=$_REQUEST['nurse'];
    } else if(isset($_SESSION['nurse'])){
        $nurse=$_SESSION['nurse'];
    }

    if(isset($_REQUEST['nurse']) || isset($_SESSION['nurse'])){

        if(!$con){
            die("Not connected to db");
        }

        $sql_req="SELECT * FROM `requested_nurse` where `email`='$nurse'";
        $result=mysqli_query($con,$sql_req);

        if(!$result){
            die(mysqli_error($con));
        }

        if (mysqli_num_rows($result) == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $email = $row['email2'];
                $ph = $row['ph_no'];
            }
        } else {
            die(mysqli_error($con));
        }

        ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var options = {
        "key": "rzp_test_Nn47y52bQed0NF", // Enter the Key ID generated from the Dashboard   
        "amount": "100000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise    
        "currency": "INR",
        "name": "Neighbouring Nurse",
        "description": "Registration Fee",
        "image": "https://example.com/nurse_logo_2.png",
        // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1    
        "handler": function(response) {
            alert(response.razorpay_payment_id);
            // alert(response.razorpay_order_id);
            // alert(response.razorpay_signature)
            // console.log(response);
            window.location.href='success.php?nurse=<?php echo $nurse;?>&payId='+response.razorpay_payment_id;
        },
        "prefill": {
            "name": "<?php echo $name;?>",
            "email": "<?php echo $email;?>",
            "contact": "<?php echo $ph;?>"
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
            // alert(response.error.code);
            // alert(response.error.description);
            // alert(response.error.source);
            // alert(response.error.step);
            // alert(response.error.reason);
            // // alert(response.error.metadata.order_id);
            // alert(response.error.metadata.payment_id);
            console.log(response);
            alert('Payment Failed!! Try Again');
            window.location.href='../system_nurses/location.php';
        });
    // document.getElementById('rzp-button1').onclick = function(e) {
    //     rzp1.open();
    //     e.preventDefault();
    // }

    $(function(){
        rzp1.open();
    });
</script>

<?php
    }else{
        header('location:../../demo.php?nurse=<?php echo $nurse;?>');
    }
?>