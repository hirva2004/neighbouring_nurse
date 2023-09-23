<?php

include '../../connect.php';

if (!isset($_SESSION['user']) || !isset($_SESSION['user']['terms'])) {
	header('location:conditions.php');
}

if (!isset($_SESSION['user']['email'])) {
	header('location:email.php');
} else if (!isset($_SESSION['user']['nurse_re_1'])) {
	header('location:nurse_re_1.php');
} else if (!isset($_SESSION['user']['bio'])) {
	header('location:bio.php');
} else if (!isset($_SESSION['user']['rn_Cert'])) {
	header('location:certificates.php');
} else {

	if (!$con) {
		die("Not connected to db");
	}

	$mail2 = $_SESSION['user']['email'];
	$fname = $_SESSION['user']['nurse_re_1']['fname'];
	$lname = $_SESSION['user']['nurse_re_1']['lname'];

	$mail = md5($mail2);
	$name = "$fname $lname ";

	$pass = $_SESSION['user']['nurse_re_1']['password'];
	$pass = md5($pass);

	$ph = $_SESSION['user']['nurse_re_1']['phone'];
	$g = $_SESSION['user']['nurse_re_1']['gender'];
	$total = $_SESSION['user']['nurse_exp']['total_yrs'];
	$photo = $_SESSION['user']['nurse_re_1']['profile_pic']['dest'];
	$rn = $_SESSION['user']['rn_Cert']['dest'];
	$bio = $_SESSION['user']['bio'];

	// echo $mail."<br>";
	// echo $bio."<br>";
	// echo $rn."<br>";
	// echo $g."<br>";
	// echo $photo."<br>";
	// echo $ph."<br>";
	// echo $name."<br>";
	// echo $pass."<br>";

	$sql = "INSERT INTO `requested_nurse`(`email`,`email2`, `name`, `password`, `ph_no`, `gender`,`total_exp`, `profile_pic`, `rn_cert`, `Approval_status`, `Added_time`, `bio`) VALUES ('$mail','$mail2','$name','$pass','$ph','$g', '$total','$photo','$rn',0,CURRENT_TIMESTAMP(),'$bio');";
	$result = mysqli_query($con, $sql);

	if (!$result) {
		die(mysqli_error($con));
	}

	// echo " Profile Uploaded <br> Certificates & Excperienc are incomplete<br>";
	echo "<br>";

	$data = $_SESSION['user'];

	if (isset($data['cert'])) {

		$i = count($data['cert']['cer_name']);
		$j = 0;

		while ($j < $i) {

			$cert_name = $data['cert']['cer_name'][$j];
			$cert_filename = $data['cert']['cer_file']['name'][$j];
			$cert_tmp = $data['cert']['cer_file']['tmp_name'][$j];
			$cert_dest = $data['cert']['cer_file']['dest'][$j];

			$sql_cert = "INSERT INTO `certificates`( `email`, `course`, `certificate`) VALUES ('$mail','$cert_name','$cert_dest')";
			$result2 = mysqli_query($con, $sql_cert);

			if (!$result2) {
				die(mysqli_error($con));
			}

			// echo "Name :";
			// print_r($cert_name);
			// echo "<br>";
			// echo "FileName :";
			// print_r($cert_filename);
			// echo "<br>";
			// echo "Temp Name :";
			// print_r($cert_tmp);
			// echo "<br>";	
			// echo "Destination Name :";
			// print_r($cert_dest);
			// echo "<br>";
			$j++;
		}
		// echo "Certificates Uploaded now only experiences incompelete<br><br>";
	}

	if (isset($data['nurse_exp'])) {
		// echo "Experience :";
		// print_r($data['nurse_exp']);
		// echo "<br>";

		$exp_i = count($data['nurse_exp']['hos_name']);
		$exp_j = 0;

		while ($exp_j < $exp_i) {
			$hospital = $data['nurse_exp']['hos_name'][$exp_j];
			$from = $data['nurse_exp']['from'][$exp_j];
			$to = $data['nurse_exp']['to'][$exp_j];
			$job = $data['nurse_exp']['job'][$exp_j];
			$address = $data['nurse_exp']['add'][$exp_j];
			$letter = $data['nurse_exp']['letter']['dest'][$exp_j];
			$yrs = $data['nurse_exp']['yrs'][$exp_j];
			$exp_j++;

			$sql_exp = "INSERT INTO `experience`( `Email`, `hospital_name`, `from_date`, `to_date`, `Exp_letter`, `designation`,`hos_address`,`exp_yrs`) 
				VALUES ('$mail','$hospital','$from','$to','$letter','$job','$address','$yrs')";

			$result_exp = mysqli_query($con, $sql_exp);

			if (!$result_exp) {
				die(mysqli_error($con));
			}

			// echo $hospital."<br>";
			// echo $from."<br>";
			// echo $to."<br>";
			// echo $job."<br>";
			// echo $letter."<br>";
			// echo $job."<br>";
			// echo $exp_j."<br>";
		}
	}
	$_SESSION['nurse'] = $mail;

	$subject = "Neighbouring Nurse";
	$body = "An Request came for becoming Neighbouring Nurse by $name check her profile as sson as possible";
	$headers = "From: ht1872004@gmail.com";
	$user="ht1872004@gmail.com";

	mail($user, $subject, $body, $headers);
}

// echo "<br>";
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Nurse Registration </title>
	<link href="../../logo.jpeg" rel="icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<style type="text/css">
		li,
		label,
		p {
			color: #2f2f2f;
			font-family: "Roboto", sans-serif;

		}

		form {
			box-shadow: 5px 5px 8px rgba(63, 187, 192, 0.7);
		}

		h3 {
			position: relative;
			color: white;
			font-size: 33px;
			font-family: "Roboto", sans-serif;
		}
	</style>
</head>

<body id="responce">
	<div class="testbox">
		<form method="post">
			<div class="banner">
				<h3 style="color:white; padding-bottom: 10%;"> Submitted!</h3>
			</div>
			<br />
			<div class="checkbox">
				<p>
					Thanks Your Respone has submmited.<br>
					Wait for the approval of your profile.
				</p>
			</div>
			<div class="btn-block">
				<button type="button" class="btn" style="background-color:#3fbbc0; color:white;" onclick="window.location.href='../system_nurses/profile.php?nurse=<?php echo $mail; ?>'">Profile</button>
				<button type="button" class="btn" style="background-color:#3fbbc0; color:white;" onclick="window.location.href='../../Medicio/index.php?nurse=<?php echo $mail; ?>'">Home</button>
			</div>
			</fieldset>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
</script>

</html>