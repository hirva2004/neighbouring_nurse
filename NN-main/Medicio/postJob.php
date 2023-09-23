

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NEIGHBOURING NURSE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/nursing.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<!-- job fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="cssFile.css" rel="stylesheet">
  
  
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Sunday, 7AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +91 7926301285
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <div>
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="../Medicio/index.php">
          <b class="logo-icon text-danger">
            <img src="assets/img/nursing.png" width="70" alt="homepage" class="dark-logo rounded-circle d-inline-block" style="border:2px solid rgba(63,187,192,255); ;" />
            <span style="color:rgba(63,187,192,255); font-size: 25px;">Neighbouring Nurse</span>
          </b>
        </a>
        <!-- <a href="index.html" class="logo me-auto" style="color: #3fbbc0;"><img src="assets/img/nursing.png" alt=""> NEIGHBOURING NURSE</a> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
            <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto" href="nurse_service.php">Search</a></li>
            <li><a class="nav-link scrollto" href="nurse_service.php#search">Jobseekers</a></li>
            <li><a class="nav-link scrollto" href="index.php#contact">Contact Us</a></li>
            <?php

if (isset($_SESSION['nurse'])) {
    $mail = $_SESSION['nurse'];
    $_SESSION['nurse_request_app'] = 1;
    ?>
              <li><a class="nav-link scrollto" href="../Nurse/system_nurses/profile.php?nurse=<?php echo $mail; ?>">Profile</a></li>
              <li><a class="nav-link scrollto" href="../Nurse/login/logout.php">Logout</a></li>
            <?php

} elseif (isset($_SESSION['user'])) {
    $mail = $_SESSION['user'];
    ?>
              <li><a class="nav-link scrollto" href="../patient/profile/profile.php?<?php echo $mail; ?>">Profile</a></li>
              <li><a class="nav-link scrollto" href="../patient/login/logout.php">Logout</a></li>
            <?php
} elseif (isset($_SESSION['admin'])) {
    $mail = $_SESSION['admin'];
    ?>
              <li><a class="nav-link scrollto" href="../Admin/profile/Admin-Profile.php?admin=<?php echo $mail; ?>">Profile</a></li>
              <li><a class="nav-link scrollto" href="../Admin/login/logout.php">Logout</a></li>
            <?php
} else {
    ?>
              <li><a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#login">Login</a></li>
              <li><a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#signup">Sign up</a></li>
            <?php
}
?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->
      </div>
    </header>


    <!-- Modal SignUp -->
    <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SIGN UP AS...</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-footer">
          <a href="../patient/signUp/email.php"><button type="button" class="btn btn-secondary" style="background-color: rgba(63,187,192,255) ;" data-bs-dismiss="modal">User</button></a>
          <a href="../Nurse/Nurse_signup/conditions.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nurse</button></a>
          <a href="../Hospital/signup/email.php"><button type="button" class="btn btn-secondary" style="background-color: rgba(63,187,192,255) ;" data-bs-dismiss="modal">Hospital</button></a>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal Login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">LOGIN AS...</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-footer">
          <a href="../patient/login/login.php"><button type="button" class="btn btn-secondary" style="background-color: rgba(63,187,192,255) ;" data-bs-dismiss="modal">User</button></a>
          <a href="../Nurse/login/login.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nurse</button></a>
          <a href="../Hospital/login/login.php"><button type="button" class="btn btn-secondary" style="background-color: rgba(63,187,192,255) ;" data-bs-dismiss="modal">Hospital</button></a>

          </div>
        </div>
      </div>
    </div>


    <!-- ======= Hero Section ======= -->

    <section id="search" class="services services">
      <div class="container">

        <div class="section-title" style="visibility: hidden;">
          <h3>Looking For Jobs</h3>
          <h1>Neighbouring Nurse is an online marketplace for nurses.</h1>
		  <p>Find shifts that fit around you! Simply browse for shifts that suits you with Neighbouring Nurse.</p>
        </div>
         <div class="section-title">
          <h2>Looking For Jobs</h2>
          <h4>Neighbouring Nurse is an online marketplace for nurses.</h4>
		  <p>Find shifts that fit around you! Simply browse for shifts that suits you with Neighbouring Nurse.</p>
        </div>

        <form class="example" action="" style="margin:auto;max-width:300px">
			<input type="text" placeholder="Search Jobs.." name="search2">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>

    </section>




    <!-- Job part -->
	<div class="jobs-list-container">
	<h2> Jobs</h2>
	<div class="jobs">
		<div class="job">
			<img src="Sterline.png" height="50" width="50" alt="" />
			<h3 class="job-title">Sterling Hospital<p><h6>Memnagar, Ahmedabad</h6></p></h3>
			<div class="details">
				Staff Nurse<br>
				<i style="font-size:20px" class="fa">&#xf290;</i>
				0-1 years of experience<br>
				<i style="font-size:20px" class="fa">&#x20B9;</i>
				2.00L-2.25L Per Annum<br>
				<i style="font-size:17px" class="fa">&#xf017;</i>
				Full Time
			</div>
			<a href="#" class="apply-btn"> Apply </a>
			<span class="open-positions"> 7 Open positions</span>
		</div>

		<div class="job">
			<img src="Avron.png" height="50" width="50" alt="" />
			<h3 class="job-title">Avron Hospital<p><h6>Naranpura, Ahmedabad</h6></p></h3>
			<div class="details">
				Head Nurse<br>
				<i style="font-size:20px" class="fa">&#xf290;</i>
				2-3 years of experience<br>
				<i style="font-size:20px" class="fa">&#x20B9;</i>
				3.00L-4.00L Per Annum<br>
				<i style="font-size:17px" class="fa">&#xf017;</i>
				Full Time
			</div>
			<a href="#" class="apply-btn"> Apply </a>
			<span class="open-positions"> 1 Open positions</span>
		</div>

		<div class="job">
			<img src="Indira.png" height="50" width="50" alt="" />
			<h3 class="job-title">Indira Womens Hospital<p><h6>Ahmedabad, Gujarat</h6></p></h3>
			<div class="details">
				Staff Nurse<br>
				<i style="font-size:20px" class="fa">&#xf290;</i>
				0-1 years of experience<br>
				<i style="font-size:20px" class="fa">&#x20B9;</i>
				20,000 - 25,000 a month<br>
				<i style="font-size:17px" class="fa">&#xf017;</i>
				Rotational Shift
			</div>
			<a href="#" class="apply-btn"> Apply </a>
			<span class="open-positions"> 2 Open positions</span>
		</div>

	</div>
	</div>
	<!-- Complete -->


    <div class="modal fade" id="Requested_appointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <form action="form.php" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Requeste Appointment </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <table align="center" cellpadding="10" cellspacing="10" bgcolor="White">
                <tr>
                  <td><b>Nurse :</b></td>
                  <td><input type="email" name="Nursename" value="<?php echo $name; ?>" style="width:600px;border-color:lightgrey;padding:5px;border-radius:5px;" id="NurseName" readonly /></td>
                </tr>

                <tr>
                  <td><b>Service :</b></td>
                  <td><input type="text" name="service" value="<?php echo $t; ?>" style="width:600px;border-color:lightgrey;padding:5px;border-radius:5px;color:black;" placeholder="Vital Checks" id="nurse_email" readonly /></td>
                  </td>
                </tr>
                <tr>
                  <td><b>Service Charge :</b></td>
                  <td><input type="text" value="<?php echo $charge; ?>" style="border-color:lightgrey;padding:5px;border-radius:5px;" id="service_charge" name="service_charge" maxlength="30" required />
                  </td>
                </tr>
                <tr>
                  <td><b>Date-Time :</b></td>
                  <td><b><span id="error">Select Correct Time</span></b>
                    <input type="text" autocomplete="off" style="border-color:lightgrey;padding:5px;border-radius:5px;" id="datetime" name="date_time" />
                  </td>
                </tr>
                <tr>
                  <td><B>Prescription :</B></TD>
                  <td><input type="file" accept="application/pdf" style="border-color:lightgrey;padding:5px;border-radius:5px;" name="pres" id="Prescription" required></td>
                </tr>

                <tr>
                  <td><b>Floor No. :</b></td>
                  <td><input style="width:100%;border-color:lightgrey;padding:5px;border-radius:5px;" id="Landmark" name="floor_no" placeholder="House/Flat/Apartment No." required /></td>
                </tr>
                <tr>
                  <td><b>Landmark :</b></td>
                  <td><input style="width:100%;border-color:lightgrey;padding:5px;border-radius:5px;" id="Landmark" name="Landmark" placeholder="Landmark" required /></td>
                </tr>
                <tr>
                  <td><b>Address :</b></td>
                  <td><textarea style="border-color:lightgrey;padding:5px;border-radius:5px;" name="Address" rows="4" cols="60" placeholder="Address" required></textarea></td>
                </tr>
                <tr>
                  <td><b>Pincode :</b></td>
                  <td><input type="PINCODE" value="<?php echo $pin; ?>" style="border-color:lightgrey;padding:5px;border-radius:5px;" id="pincode" name="Pincode" placeholder="380007" maxlength="30" readonly required />
                  </td>
                </tr>
                </td>
                <input type="hidden" value="" id="NurseEmail" style="border-color:lightgrey;padding:5px;border-radius:5px;" name="nurse_email" />
                <input type="hidden" value="<?php echo $mail; ?>" style="border-color:lightgrey;padding:5px;border-radius:5px;" name="patient_email" />
                <?php
if (isset($_SESSION['nurse_request_app'])) {
    ?>
                  <input type="hidden" value="1" style="border-color:lightgrey;padding:5px;border-radius:5px;" name="is_nurse" />
                <?php
} else {
    ?>
                  <input type="hidden" value="0" style="border-color:lightgrey;padding:5px;border-radius:5px;" name="is_nurse" />
                <?php
}
?>
                </td>
                </tr>
              </table>

            </div>
            <div class="modal-footer">
              <button type="submit" id="send" name="submit" style="background-color:#3fbbc0;color:white;padding: 10px;border:#3fbbc0;border-radius:5px;" class="button button1">Send Request</button>
            </div>
        </form>
      </div>
    </div>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"> </script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/ui-lightness/jquery-ui.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="jquery.datetimepicker.min.css" />
    <script src="jquery.js"></script>
    <script src="jquery.datetimepicker.full.js"></script>
</body>


</html>