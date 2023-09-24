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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="nurse_service.php">Search</a></li>
          <li><a class="nav-link scrollto" href="postJob.php">Jobseekers</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <?php

          if (isset($_SESSION['nurse'])) {
            $mail = $_SESSION['nurse'];
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

      <!-- <a class="appointment-btn scrollto" onclick="isLog()"><span class="d-none d-md-inline" data-bs-toggle="modal" data-bs-target="#appointment">Make an</span> Appointment</a> -->

    </div>
  </header><!-- End Header -->

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


  <!-- Request App Modal -->

  <div class="modal fade" id="appointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Requested Appointment </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table align="center" cellpadding="10" cellspacing="10" bgcolor="White">
            <tr>
              <td><b>Service Name:</b></td>
              <td>

                <select id="inputState" class="form-control" name="service" required>
                  <option disabled selected>Choose</option>
                  <?php
                  include 'connect.php';
                  $sql = "SELECT `service_name` from `services`";
                  if ($con) {
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                      while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                        <option><?php echo $row['service_name']; ?></option>
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
              </td>

        </div>
        </tr>
        <tr>
          <td><b>Service Time:</b></td>
          <td><input type="time" style="width:600" id="time" name="Service_Time" placeholder="11:30" maxlength="30" />
          </td>
        </tr>
        <tr>
          <td><b>Service Date:</b></td>
          <td><input type="date" style="width:600" id="Service_Date" name="Last_Name" placeholder="12-10-2022" maxlength="30" />
          </td>
        </tr>
        <tr>
          <td><b>Address:</b><br /><br /><br /></td>
          <td><textarea name="Address" rows="4" cols="60" placeholder="A/102 Marvel Acro, Ahmedabad"></textarea></td>
        </tr>
        <tr>
          <td><b>Pincode:</b></td>
          <td><input type="PINCODE" style="width:600" id="pincode" name="Pincode" placeholder="382330" maxlength="30" />
          </td>
        </tr>
        <tr>
          <td><B>Prescription</B></TD>
          <TD><input type="file" style="width:600" name="file" id="Prescription" placeholder="Prescription.pdf">
        </tr>
        </td>
        <tr>
          <td><b>Requested to:</b></td>
          <td><button type="button" class="button button1"><a href="Nurse/profile.php" style="color:white;">Nurse Name</a></button>
          </td>
        </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="button button1" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
  <!-- Modal -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/nurse1.png)">
          <div class="container">
            <h2>Welcome to <span>Neighbouring Nurse</span></h2>
            <p>Experience, Expertise, and Efficiency. Short Term Nursing now available at home.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/n.jpg)">
          <div class="container">
            <p>Relieving you from the stress of travelling to a hospital everyday.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/nurse2.jpg)">
          <div class="container">
            <p>Get commpassionate, personalized clinical nursing services at home.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
          <a class="cta-btn scrollto" href="nurse_service.php">Make an Make an Appointment</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>We provide job to the nurses for providing different types of medical services at home to the patient.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/download1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <p class="fst-italic">
              Nurses are experienced minimum 2 years
              Patients get treatment at their doorsteps with proper sanitary.
              Good quality products with sanitation are used for injections, wound care, dressing for giving a better service to patient.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Home Based Care: End to end management of all medical needs as suggested by a Doctor, including post discharge follow-ups and other short term nursing requirements.</li>
              <li><i class="bi bi-check-circle"></i> Save Time; Save Money: Say Bye Bye to waiting lines, long travel hours and traffic struggles. Book an appointment at your convenience.</li>
              <li><i class="bi bi-check-circle"></i> Trained nurses: We hire only board certified & experienced nurses to ensure quality care at home.</li>
              <li><i class="bi bi-check-circle"></i> Quality Assurance: We conduct regular training sessions for all our nurses and ensure that they are updated with the new processes and methodologies.</li>
              <!-- <li><i class="bi bi-check-circle"></i> Packaged & Sterilized Kits: We use packaged and sterilized kits for all our procedures ensuring we follow Universal Precautions and Sterilization Techniques.</li> -->
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>What we offer</h2>
          <p>Short term nursing procedures that reduce your need to visit a hospital everyday.</p>
        </div>
        <div class="row">
          <?php
          $sql = "SELECT `icons`,`service_name`,`description` FROM `services`";
          if ($con) {
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon"><i class="<?php echo $row['icons']; ?>"></i></div>
                  <h4 class="title"><a href=""><?php echo $row['service_name']; ?></a></h4>
                  <p class="description"><?php echo $row['description']; ?></p>
                </div>

          <?php
              }
            } else {
              die('Oops! something wrong occured.');
            }
          } else {
            die('Database issue.');
          }
          ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <!-- <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select" required>
                <option value="" disable>Select Services</option>
                <?php
                $sql = "SELECT `service_name` from `services`";
                if ($con) {
                  $result = mysqli_query($con, $sql);
                  if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                      <option><?php echo $row['service_name']; ?></option>
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
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="prescription" required></textarea>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="description" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section>End Appointment Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Vishwakarma Government Engineering College<br />

                    Chandkheda, Ahmedabad, Pincode: 382424</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>principal@vgec.ac.in<br>mitali123@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 9328559400<br>+91 932678959</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End of main-->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>System Terms</h2>
        <p>
        </p>
      </div>

      <div class="row">

        <!-- <div class="col-lg-6 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>Patient</h3>
              <h4><sup>$</sup>0<span> / month</span></h4> -->
        <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
        <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
        <!-- </div> -->
        <!-- </div> -->

        <div class="col-lg-12 col-md-6 mt-4 mt-md-0">
          <div class="box featured" data-aos="fade-up" data-aos-delay="200">
            <h3></h3>
            <!-- <h4><sup>$</sup>19<span> / month</span></h4> -->
            <ul style="text-align: left;">
              <li> <i class="bi bi-check-circle"></i>Service time will be only for an hour.</li>
              <li><i class="bi bi-check-circle"></i>Once patient request for an appoitnment nurse will have to respond within 20mins.</li>
              <li> <i class="bi bi-check-circle"></i>Patient/nurse can't decline the appointment before an hour of service time, after that the cancel option will be disabled</li>
              <li> <i class="bi bi-check-circle"></i>Patient has to do payment (online/offline) within service time otherwise service will be expired and reciept will not be generated.</li>
              <li> <i class="bi bi-check-circle"></i>Nurse will have to ask user to choose for payment option within service time.</li>
              <li> <i class="bi bi-check-circle"></i>All online payment received by nurse will be stored in Neighbouring Nurse bank account.</li>
              <li> <i class="bi bi-check-circle"></i> Nurse can book another nurse for an service but can only pay online for that service.</li>
              <li> <i class="bi bi-check-circle"></i>Nurse has to provide the confirmation of offline payment done by user by clicking the link provided in mail, then only user will get its receipt</li>
              <li> <i class="bi bi-check-circle"></i>Nurse can't withdraw money with minimum 1000Rs. balance </li>
              <li> <i class="bi bi-check-circle"></i>100Rs. will be deducted from nurse account if she doesn't provide the service after accepting the one.</li>
              <li> <i class="bi bi-check-circle"></i>Admin will delete the nurse profile if nurse has more than 3 expired services.</li>
            </ul>
            <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>NEIGHBOURING NURSE</h3>
              <p>
                <strong>Phone:</strong> +91 9328559400<br>
                <strong>Email:</strong>mitali@gmail.com <br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://join.skype.com/invite/YzOuB9mokAFu" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/in/hirva-mehta-652749213/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#pricing">Terms of service</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>You can see the furthur updates here.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" name="email_sub" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Neighbouring Nurse</span></strong>. All Rights Reserved
      </div>
      <!-- <div class="credits">
         All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
    </div>
    </div>
  </footer><!-- End Footer -->

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
</body>
<script>
  function isLog() {

    <?php

    if (isset($_SESSION['user'])) {
    ?>
      $('#appointment').modal('toggle');
    <?php
    } else {
    ?>
      window.location.href = '../patient/login/login.php';
    <?php
    }


    ?>
  }

  <?php
  if (isset($_POST['email_sub'])) {

    $user = $_POST['email'];
    $subject = "Neighbouring Nurse";
    $body = "Dear, User 
      You are successfully subscribed with us so now we will share you all our updates regarding Neighbouring Nurse on this $user";
    $headers = "From: mitali123.com";

    if (mail($user, $subject, $body, $headers)) {
      echo "alert('You are Subscribed with Us');";
      unset($_POST['email_sub']);
    } else {
      echo "alert('Try Again! Not Subscribed');";
    }
  }

  ?>
</script>

</html>