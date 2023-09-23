<?php
include '../../connect.php';

if (isset($_SESSION['nurse'])) {
    $nurse = $_SESSION['nurse'];
} else {
    header('location:../login/login.php');
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->

    <title>Nurse Certificates</title>
    <link href="../../logo.jpeg" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        body {
            font-family: "Roboto", sans-serif;
            font-size: 13px;
            color: #626262;
            font-weight: 500;
        }
    </style>
</head>


<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="../../Medicio/index.php">
                        <b class="logo-icon text-danger">
                            <img src="../../logo.jpeg" width="70" alt="homepage" class="dark-logo rounded-circle d-inline-block" style="border:2px solid rgba(63,187,192,255); ;" />
                            <span style="color:rgba(63,187,192,255); font-size: 17px;">Neighboring Nurse</span>
                        </b>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" style="background-color:rgba(63,187,192,255) ;" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <li class="nav-item hidden-sm-down">
                            <!-- <i class="me-3 fa fa-user" aria-hidden="true"></i> -->
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Certificates</span></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- <a href="completed_services.php" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#moneyModal" id="pay_btn">1500 Rs.
                                </a> -->
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <?php
                        if (isset($_SESSION['admin_profile'])) {
                        ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false">
                                    <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="cert.php" aria-expanded="false"><i class="me-3 fa fa-certificate" style="color:rgba(63,187,192,255) ;" aria-hidden="true"></i><span class="hide-menu" style="color:rgba(63,187,192,255) ;">Certificates</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="exp.php" aria-expanded="false"><i class="me-3 fa fa-building" aria-hidden="true"></i><span class="hide-menu">Experience</span></a></li>
                            <li class="text-center p-20 upgrade-btn">
                                <a href="../../Admin/nurse/unset_admin_profile.php" class="btn text-white mt-4" style="background-color:rgba(63,187,192,255) ">Back</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false">
                                    <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="cert.php" aria-expanded="false"><i class="me-3 fa fa-certificate" style="color:rgba(63,187,192,255) ;" aria-hidden="true"></i><span class="hide-menu" style="color:rgba(63,187,192,255) ;">Certificates</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="exp.php" aria-expanded="false"><i class="me-3 fa fa-building" aria-hidden="true"></i><span class="hide-menu">Experience</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="location.php" aria-expanded="false"><i class="me-3 fa fa-globe" aria-hidden="true"></i><span class="hide-menu">Locations</span></a></li>
                            <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="time.php" aria-expanded="false"><i class="me-3 fa fa-columns" aria-hidden="true"></i><span class="hide-menu">Timing</span></a></li> -->
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="service.php" aria-expanded="false"><i class="me-3 fa fa-info-circle" aria-hidden="true"></i><span class="hide-menu">Services</span></a></li>


                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="accepted_services.php" aria-expanded="false"><i class="me-3 fa fa-check" aria-hidden="true"></i><span class="hide-menu">Appointments</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="booked_app.php" aria-expanded="false"><i class="me-3  fa fa-check" aria-hidden="true"></i><span class="hide-menu">Requested Nurses </span></a></li>


                            <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="completed_services.php" aria-expanded="false"><i class="me-3 fa fa-check-circle" aria-hidden="true"></i><span class="hide-menu">Completed Services</span></a></li> -->


                            <li class="text-center p-20 upgrade-btn">
                                <a href="../login/logout.php" class="btn text-white mt-4" style="background-color:rgba(63,187,192,255) ">Log Out</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="row">

                    <?php

                    if (isset($_SESSION['nurse'])) {

                        $i = 1;

                        if (!$con) {
                            die("Not connected to db");
                        }

                        $mail = $_SESSION['nurse'];
                        $sql_req = "SELECT * FROM `certificates` WHERE email='$mail';";
                        $result = mysqli_query($con, $sql_req);

                        if (mysqli_num_rows($result) == 0) {
                    ?>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>No Extra Certificates</h2>
                                    </div>
                                </div>
                            </div>
                        <?php

                        }

                        if (!$result) {
                            die(mysqli_error($con));
                        }
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <!-- Column -->
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material mx-2">
                                            <label class="card-title">Course <?php echo $i; ?></label>
                                            <div class="form-group">
                                                <input type="text" placeholder="course name" class="form-control ps-0 form-control-line" disabled value="
                                                <?php echo $row['course'];  ?>">
                                                <a href="../Nurse_signup/<?php echo $row['certificate']; ?>" target="_blank" class="link">
                                                    <i class="fa fa-certificate"></i>
                                                    <span class="font-normal">Course Certificate</span>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                    <?php
                            $i++;
                        }
                    }

                    ?>
                </div>
            </div>
        </div>

    </div>
    </div>

</body>
<script>
    <?php
    if (isset($_SESSION['admin_profile'])) {
    ?>
        document.getElementById('pay_btn').style.display = "none";
    <?php
    }
    ?>
</script>

</html>