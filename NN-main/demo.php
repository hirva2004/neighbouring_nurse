<?php
$ipaddress = getenv("REMOTE_ADDR");
echo "Your IP Address is " . $ipaddress;

// DEmo mail

$subject = "Neighbouring Nurse";
$body = "Click on this link to set new Password <br><a href=http://localhost/Project/NN/patient/login/forgot_password.php?email=$u'>forgot password</a>";
$headers = "From: ht1872004@gmail.com";

if (mail($user, $subject, $body, $headers)) {
    echo "alert('Email sent');";
} else {
    echo "alert('Email sent Error');";
}

//End mail code
?>




<?php

$ipaddress = $_SERVER['REMOTE_ADDR'];
echo "Your IP Address is " . $ipaddress . "<br>";


print_r($_SERVER['HTTP_USER_AGENT']);

print_r(get_browser());

echo "<br>";
echo "<br>";
echo "<br>";

echo "Already Logged in";
echo "Not System Nurse";

?>

<script>
    var p1 = "success";
</script>

<?php
echo "<script>document.writeln(p1);</script>";
?>


<?php
$ipaddress = getenv("REMOTE_ADDR");
echo "Your IP Address is " . $ipaddress;
?>


<?php

$ipaddress = $_SERVER['REMOTE_ADDR'];
echo "Your IP Address is " . $ipaddress . "<br>";


print_r($_SERVER['HTTP_USER_AGENT']);

print_r(get_browser());

echo "<br>";
echo "<br>";
echo "<br>";
?>

<!-- Id: rzp_test_Nn47y52bQed0NF
secret : 0wlIVCQcc4L6mtJmimxa8HK4
image: "https://example.com/your_logo"



status 0 : pending request
        1: Account accpeted
        2:Payment Done
        3: Loaction,service,Timming added
    Now Publish in appnurses-->



<!-- color :#3fbbc0
rgba(63,187,192,255) 
rgba(63,187,192,0.7)


font-family: "Roboto", sans-serif;
    font-size: 13px;

    color: #626262;

    font-weight: 500;-->

<!-- SELECT * from `location` where Pincode 
    not in (SELECT Pincode from nurse_selected_areas WHERE email='089dce42accf7f97c328399910ddabe8') -->

    
<!-- Password by google / Gmail password -->
<!-- lcjunhcjiryossps -->

<!-- Password for nidhi account :=> Himani@123 -->