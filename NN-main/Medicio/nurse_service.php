<?php
include '../connect.php';

?>

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
  <style>
    * {
      box-sizing: border-box;
    }

    #error {
      color: red;
      display: none;
    }

    .box {
      width: 100%;
      padding: 20px;
      align: center;
      border: 1px solid #dddd;
      border-radius: 6px;
      margin-bottom: 20px;
      display: flex;
      color: grey;
    }

    .card {
      display: flex;
      width: 400px;
      height: 770px;
      align: center;
      margin-left: 85px;
      margin-top: 80px;
      box-shadow: 0px 4px 8px black;
      padding: 40px;
      margin-bottom: 80px;
      position: relative;
      background-color: blanchedalmond;
      float: left;
    }
     .nurse_name{
    color: #3fbbc0;
    text-decoration: none;
}

a:hover {
    color:grey;
    text-decoration:none;
    cursor:pointer;
}

.modal-body{
    max-height: calc(100vh - 200px);
    overflow-y: auto;
}
  </style>

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
            <li><a class="nav-link scrollto" href="nurse_service.php#search">Search</a></li>
          <li><a class="nav-link scrollto" href="postJob.php">Jobseekers</a></li>
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
            <a href="../patient/signUp/email.php"><button type="button" class="btn btn-secondary" style="background-color: rgba(63,187,192,255) ;" data-bs-dismiss="modal">Sign up as user</button></a>
            <a href="../Nurse/Nurse_signup/conditions.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sign up as nurse</button></a>
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
            <a href="../patient/login/login.php"><button type="button" class="btn btn-secondary" style="background-color: rgba(63,187,192,255) ;" data-bs-dismiss="modal">login as user</button></a>
            <a href="../Nurse/login/login.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">login as nurse</button></a>

          </div>
        </div>
      </div>
    </div>


    <!-- ======= Hero Section ======= -->

    <section id="search" class="services services">
      <div class="container">

        <div class="section-title" style="visibility: hidden;">
          <h2>Search by Service</h2>
          <p>Short term nursing procedures that reduce your need to visit a hospital everyday.</p>
        </div>
        <div class="section-title">
          <h2>Search by Service</h2>
          <p>Short term nursing procedures that reduce your need to visit a hospital everyday.</p>
        </div>

        <form method="POST" action="#data">
          <div class="form-row" style="margin-left: 25%;">
            <div class="form-group col-md-4 required">
              <label for="inputState">Service</label>
              <select id="inputService" class="form-control" name="service" required>
                <option selected value="0">Choose</option>
                <?php
$sql = "SELECT `service_name` from `services`";
if ($con) {
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                      <option value="<?php echo $row['service_name']; ?>"><?php echo $row['service_name']; ?></option>
                <?php
}
    } else {
        die('Oops !something went wrong.');
    }
} else {
    die('Database issue.');
}
?>
              </select>
            </div>
            <div class="form-group col-md-4 required">
              <label for="inputState">Location</label>
              <select id="inputLocation" class="form-control" name="location" required>
                <option selected value="0">Choose</option>
                <?php
include '../connect.php';
$sql = "SELECT `area_name` FROM `location` order by `area_name`";
if ($con) {
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                      <option value="<?php echo $row['area_name']; ?>"><?php echo $row['area_name']; ?></option>
                <?php
}
    } else {
        die('Oops !something went wrong.');
    }
} else {
    die('Database issue.');
}
?>
              </select>
            </div>
          </div>
          <br>
          <input type="submit" value="Submit" name="save" style=" margin-left: 47% ; background-color: #3fbbc0; color: #fff; border: #3fbbc0; padding: 10px; padding-left: 20px; padding-right: 20px; border-radius: 4px;" />
        </form>
    </section>


    <?php
if (isset($_POST['save'])) {

    if ($_POST['service'] == 0) {
        die("
          <script>
              alert('Select Both Location & Service');
          </script>
        ");
    } elseif ($_POST['location'] == 0) {
        die("
        <script>
            alert('Select Both Location & Service');
        </script>
      ");
    } else {
        $t = $_POST['service'];
        $loc = $_POST['location'];
        $pin = '';
        $i = 0;
        // echo $t . "<br>" . $loc . "<br>";
        $query = "SELECT `Pincode` from `location` where `area_name`='$loc'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pin = $row['Pincode'];
                // echo $pin . "<br>";
            }
        }

        $sql = "SELECT * from nurse_selected_services where service_name='$t' and email IN
        (SELECT email FROM `nurse_selected_areas` WHERE Pincode='$pin')";
        $ans = mysqli_query($con, $sql);

        echo " <div class='section' id='data'>
          <div class='main1'>";

        if (mysqli_num_rows($ans) == 0) {
            die("<h3><center> Sorry No Such a Nurse!!</center></h3>");
        }

        if (mysqli_num_rows($ans) != 0) {
            while ($ro = mysqli_fetch_assoc($ans)) {
                $email = $ro['email'];
                $sql_nurse = "SELECT * FROM `requested_nurse` WHERE `email`='$email';";
                $result_nurse = mysqli_query($con, $sql_nurse);

                if (mysqli_num_rows($result_nurse)) {
                    while ($row = mysqli_fetch_assoc($result_nurse)) {

                        $charge = '';
                        $sql_charge = "SELECT `s_charge` from `nurse_selected_services` where `service_name`='$t' and `email`='$email';";
                        $result_charge = mysqli_query($con, $sql_charge);

                        $sql = "select * from `request_form` where `nurse_email`='$email' and `Status`=2";
                        $result = mysqli_query($con, $sql);

                        $c_nurse = mysqli_num_rows($result);

                        if (!$result_charge) {
                            die(mysqli_error($con));
                        }

                        while ($row2 = mysqli_fetch_assoc($result_charge)) {
                            $charge = $row2['s_charge'];
                        }

                        $name = $row['name'];
                        $m = $row['email'];
                        $email = $row['email2'];
                        $ph = $row['ph_no'];
                        $bio = $row['bio'];
                        $gender = $row['gender'];
                        $rn = $row['rn_cert'];
                        $yrs_exp = $row['total_exp'];
                        $profile = $row['profile_pic'];
                        $status = $row['Approval_status'];

                        $s_f = $row['Satisfied'];
                        $n_f = $row['Neutral'];
                        $u_f = $row['Unhappy'];

                        ?>

                <div class="card">
                  <h3>
                  <a href="../patient/Nurse/profile.php?nurse=<?php echo $m; ?>" class="nurse_name"  target="_blank">
                    <?php echo $name; ?>
                    </a>
                  </h3>
                  <hr>
                  <img src="../Nurse/Nurse_signup/<?php echo $profile; ?>" style="border-radius:100%" class="rounded-circle mx-auto d-block" alt="Profile Photo" width="150px" style="radius : 100px; padding-bottom : 20px;">
                  <br>

                  <div class="row">
                    <div class="col-12 text-center">
                      <p class="text-center" style="font-size: 22px;"><small><strong>
                            <?php echo $c_nurse . " Completed Services"; ?>
                          </strong></small></p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-4 text-center">
                      <div class="mini-container"><span style="font-size: 20px;">😊</span>
                        <p class="text-center" style="font-size: 18px;"><small><strong><?php echo $s_f; ?> Satisfied</strong></small></p>
                      </div>
                    </div>
                    <div class="col-4 text-center">
                      <div class="mini-container"> <span style="font-size: 20px;">😐</span>
                        <p class="text-center" style="font-size: 18px;"><small><strong><?php echo $n_f; ?> Neutral</strong></small></p>
                      </div>
                    </div>
                    <div class="col-4 text-center">
                      <div class="mini-container"><span style="font-size: 20px;">😣</span>
                        <p class="text-center" style="font-size: 18px;"><small><strong><?php echo $u_f; ?> Unhappy</strong></small></p>
                      </div>
                    </div>
                  </div>
                  <h3>
                    <?php
if ($gender == 'f') {
                            $g = "Female";
                        } else {
                            $g = "Male";
                        }
                        ?>
                  </h3>
                  <span><b>Gender : </b><?php echo $g; ?></span>
                  <span><b>Service name : </b><?php echo $t; ?></span>
                  <span><b>Location : </b><?php echo $loc; ?></span>
                  <span><b>Service charge : </b>Rs. <?php echo $charge; ?></span>
                  <span><b>Experience : </b><?php echo $yrs_exp; ?> years</span>
                  <span><b>Bio : </b><?php echo $bio; ?></span>
                  <br><br>
                  <div class="d-flex">
                    <button type="button" data-toggle="modal" data-target="#reviewModal" style="background :grey; color : white; border :#3fbbc0; padding : 10px; border-radius : 05px;">
                    Reviews
                  </button>
                    <!-- <a data-bs-toggle="modal" data-bs-target="#Requested_appointment"> -->
                    <?php

                        if (isset($_SESSION['nurse'])) {
                            if ($_SESSION['nurse'] != $m) {
                                ?>
                        <button type="button" onclick="openModal('<?php echo $m; ?>','<?php echo $name; ?>','<?php echo $charge; ?>')" style="background : #3fbbc0; color : white; border :#3fbbc0; padding : 10px; border-radius : 05px; margin-left:20px;">
                          Make An Appointment
                        </button>
                      <?php
}
                        } else {
                            ?>
                      <button type="button" onclick="openModal('<?php echo $m; ?>','<?php echo $name; ?>','<?php echo $charge; ?>')" style="background : #3fbbc0; color : white; border :#3fbbc0; padding : 10px; border-radius : 05px; margin-left:20px;">
                        Make An Appointment
                      </button>
                    <?php
}
                        ?>
                    <!-- </a> -->
                  </div>
                </div>
    <?php

                        $i--;
                    }
                }
            }
        }
        echo "  </div>
  </section>
  ";
    }
}
?>

<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reviews </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="jobs-list-container">
          <div class="container">
            <div class="job ">
              <a href="#"><h4 class="job-title">John Deo<p><h6>Memnagar, Ahmedabad</h6></p></h4></a>

              <div class="details">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.m quam iure facere? Praesentium nobis inventore dignissimos aliquid placeat debitis, animi consectetur eligendi sint, itaque neque, nostrum minima explicabo.

              </div>
              <br>
              <h5 class=""> 3.5 Rating</h5>
            </div>
          </div>

          <div class="container">
            <div class="job ">
              <a href="#"><h4 class="job-title">John Deo<p><h6>Memnagar, Ahmedabad</h6></p></h4></a>

              <div class="details">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.m quam iure facere? Praesentium nobis inventore dignissimos aliquid placeat debitis, animi consectetur eligendi sint, itaque neque, nostrum minima explicabo.

              </div>
              <br>
              <h5 class=""> 3.5 Rating</h5>
            </div>
          </div>


         

          <div class="container">
            <div class="job ">
              <a href="#"><h4 class="job-title">John Deo<p><h6>Memnagar, Ahmedabad</h6></p></h4></a>

              <div class="details">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.m quam iure facere? Praesentium nobis inventore dignissimos aliquid placeat debitis, animi consectetur eligendi sint, itaque neque, nostrum minima explicabo.

              </div>
              <br>
              <h5 class=""> 3.5 Rating</h5>
            </div>
          </div>

          <div class="container">
            <div class="job ">
              <a href="#"><h4 class="job-title">John Deo<p><h6>Memnagar, Ahmedabad</h6></p></h4></a>

              <div class="details">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.m quam iure facere? Praesentium nobis inventore dignissimos aliquid placeat debitis, animi consectetur eligendi sint, itaque neque, nostrum minima explicabo.

              </div>
              <br>
              <h5 class=""> 3.5 Rating</h5>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#3fbbc0;color:white;padding: 10px;border:#3fbbc0;border-radius:5px;">Close</button>
      </div>
    </div>
  </div>
</div>


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
<script>
  $(document).ready(function() {

    $('#datetime').datetimepicker({
      step: 10,
      minDate: 0,
      minTime: '07:00',
      maxTime: '21:00',
      format: 'Y-m-d H:i',
      onChangeDateTime: function(d) {
        if (d < new Date()) {
          document.getElementById('error').style.display = "inline-block";
          document.getElementById('send').disabled = true;
          document.getElementById('send').style.background = 'grey';
        } else {
          document.getElementById('error').style.display = "none";
          document.getElementById('send').disabled = false;
          document.getElementById('send').style.background = '#3fbbc0';
        }
      }
    });
  });

  function openModal(nurse, name, charge) {

    <?php

if (isset($_SESSION['nurse'])) {
    $mail = $_SESSION['nurse'];
} elseif (isset($_SESSION['user'])) {
    $mail = $_SESSION['user'];
} elseif (isset($_SESSION['admin'])) {
    $mail = $_SESSION['admin'];
} else {
    ?>
      if (confirm("Do Login To Make An Appointment")) {
        window.location.href = '../patient/login/login.php';
      } else {
        location.reload();
      }
    <?php
}
?>
    document.getElementById('NurseEmail').value = nurse;
    document.getElementById('NurseName').value = name;
    document.getElementById('service_charge').value = charge;

    $('#Requested_appointment').modal('toggle');

  }
</script>


</html>