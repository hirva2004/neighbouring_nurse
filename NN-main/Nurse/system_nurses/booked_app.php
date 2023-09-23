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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neighbouring Nurse</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../logo.jpeg">
    <link rel="stylesheet" href="feed.css">
    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style type="text/css">
        body {
            font-family: "Roboto", sans-serif;
            font-size: 13px;
            color: #626262;
            font-weight: 500;
        }

        .button {
            border: none;
            color: white;
            padding: 7px 7px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;

            cursor: pointer;
        }

        .button1 {
            background-color: rgba(63, 187, 192, 255)
        }

        .Pending {
            background-color: Gold;
        }

        /* Green */
        .Completed {
            background-color: Green;
        }

        /* Green */
        .Running {
            background-color: Blue;
        }

        /* Green */
        .Expire {
            background-color: Red;
        }

        /* Green */
    </style>
</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="../../Medicio/index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../logo.jpeg" width="70" alt="homepage" class="dark-logo rounded-circle d-inline-block" style="border:2px solid rgba(63,187,192,255); ;" />
                            <span style="color:rgba(63,187,192,255); font-size: 16px;">Neighbouring Nurse</span>

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">

                            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" style="background-color:rgba(63,187,192,255) ;" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Booked Appointments</span></a>
                        </li>
                    </ul>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a href="" style="color:white; padding-right:0px"></i></a>
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Markarn Doe-->
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <!--  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li> -->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="cert.php" aria-expanded="false"><i class="me-3 fa fa-certificate" aria-hidden="true"></i><span class="hide-menu">Certificates</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="exp.php" aria-expanded="false"><i class="me-3 fa fa-building" aria-hidden="true"></i><span class="hide-menu">Experience</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="location.php" aria-expanded="false"><i class="me-3 fa fa-globe" aria-hidden="true"></i><span class="hide-menu">Locations</span></a></li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="time.php" aria-expanded="false"><i class="me-3 fa fa-columns" aria-hidden="true"></i><span class="hide-menu">Timing</span></a></li> -->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="service.php" aria-expanded="false"><i class="me-3 fa fa-info-circle" aria-hidden="true"></i><span class="hide-menu">Services</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="accepted_services.php" aria-expanded="false"><i class="me-3 fa fa-check" aria-hidden="true"></i><span class="hide-menu">Appointments</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="booked_app.php" aria-expanded="false"><i style="color:rgba(63,187,192,255) ;" class="me-3  fa fa-check" aria-hidden="true"></i><span style="color:rgba(63,187,192,255) ;" class="hide-menu">Requested Nurses </span></a></li>

                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="completed_services.php" aria-expanded="false"><i class="me-3 fa fa-check-circle" aria-hidden="true"></i><span class="hide-menu">Completed Services</span></a></li> -->
                        <li class="text-center p-20 upgrade-btn">
                            <a href="../login/logout.php" class="btn text-white mt-4" style="background-color:rgba(63,187,192,255) ">Log Out</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper" id="box1">
            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Booked Appointments</h4>
                                <!--<h6 class="card-subtitle">Add class <code>.table</code></h6>-->
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">
                                                    <H6>Sr.no<H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Service Name</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Nurse Name</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Service Status</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Cancel</h6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Payment</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Open</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Feedback</H6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "select * from `request_form` where `User_Email`='$nurse' order by `Created_Req_time` desc";
                                            $result = mysqli_query($con, $sql);

                                            if (!$result) {
                                                echo "error";
                                            }

                                            $i = 0;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $i++;
                                                $name = $row['service_name'];
                                                $form = $row['Request_id'];
                                                $email = $row['nurse_email'];
                                                $status = $row['Status'];
                                                $time = $row['Service_Date_Time'];
                                                $created_time = $row['Created_Req_time'];
                                                $r = $row['receipt'];
                                                $f = $row['feed'];

                                                date_default_timezone_set("Asia/Calcutta");

                                                $now = new DateTime("now");
                                                $then = new DateTime($time);
                                                $then2 = new DateTime($time);
                                                $then->add(new DateInterval('PT60M'));
                                                $then_created = new DateTime($created_time);
                                                $then_created->add(new DateInterval('PT20M'));

                                                $sql_nurse = "SELECT * FROM `requested_nurse` WHERE `email`='$email'";
                                                $result_nurse = mysqli_query($con, $sql_nurse);
                                                $row_nurse = mysqli_fetch_assoc($result_nurse);

                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td id="Servicename"><?php echo $name; ?></td>
                                                    <td id="Nurseemail"><?php echo $row_nurse['name']; ?></td>
                                                    <?php
                                                    if ($status == -4) {
                                                    ?>
                                                        <td><button class="btn btn-dark">Not Accepted</button></td>
                                                        <td style="text-align: center;">-</td>
                                                        <td style="text-align: center;">-</td>
                                                    <?php
                                                    } else if ($status == -3) {
                                                    ?>
                                                        <td><button class="btn btn-dark">Expired</button></td>
                                                        <td style="text-align: center;">-</td>
                                                        <td style="text-align: center;">-</td>
                                                        <?php

                                                    } else if ($status == 0) {
                                                        if ($now > $then2 || $now > $then_created) {
                                                            $sql = "UPDATE `request_form` SET `Status`=-4 where `Request_id`=$form";
                                                            $result = mysqli_query($con, $sql);

                                                            $sql_u = "select * from `requested_nurse` where `email`='$email'";
                                                            $result_u = mysqli_query($con, $sql_u);
                                                            $row_n = mysqli_fetch_assoc($result_u);
                                                            $nurse_mail = $row_n['email2'];
                                                            $nname = $row_n['name'];
                                                            sendMail($u_email, "Your Pending appointement for $name at $time has expired");

                                                            $email = $row['User_Email'];
                                                            $sql_u = "select * from `requested_nurse` where `email`='$nurse'";
                                                            $result_u = mysqli_query($con, $sql_u);
                                                            $row_n = mysqli_fetch_assoc($result_u);
                                                            $u_email = $row_n['email2'];
                                                            sendMail($nurse_mail, "Your Pending appointement for $name at $time has expired as $nname hasn't accepted the appointment");

                                                        ?>
                                                            <td><button class="btn btn-dark">Not Accepted</button></td>
                                                            <td style="text-align: center;">-</td>
                                                            <td style="text-align: center;">-</td>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <td><button class="btn btn-warning">Pending</button></td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="col-sm-12 d-flex">
                                                                        <a href='d_service.php?id=<?php echo $form; ?>' style="color:rgba(63,187,192,255) ;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-times-circle"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td style="text-align: center;">-</td>
                                                        <?php
                                                        }
                                                    } else if ($status == 1) {
                                                        if ($now > $then) {

                                                            $sql = "UPDATE `request_form` SET `Status`=-3 where `Request_id`=$form";
                                                            $result = mysqli_query($con, $sql);


                                                            $sql_u = "select * from `requested_nurse` where `email`='$email'";
                                                            $result_u = mysqli_query($con, $sql_u);
                                                            $row_n = mysqli_fetch_assoc($result_u);
                                                            $nurse_mail = $row_n['email2'];
                                                            $nurse_name = $row_n['name'];
                                                            $bal = $row['acc_balance'];
                                                            sendMail($nurse_mail, "Your appointement for $name has expired so you are charged with 100 Rs. which is deducted from your Neighbouring Nurse account.");

                                                            $new = $bal - 100;
                                                            $sql_u = "update `requested_nurse` set `acc_balance`=$new where `email`='$email'";
                                                            $result_u = mysqli_query($con, $sql_u);

                                                            $email = $row['User_Email'];
                                                            $sql_u = "select * from `requested_nurse` where `email`='$nurse'";
                                                            $result_u = mysqli_query($con, $sql_u);
                                                            $row_n = mysqli_fetch_assoc($result_u);
                                                            $u_email = $row_n['email2'];
                                                            sendMail($nurse_mail, "Sorry for our inconvenience as $nurse_name hasn't come for your $name service. We request you to book another appointment for your service from our website");

                                                        ?>
                                                            <td><button class="btn btn-dark">Expired</button></td>
                                                            <td style="text-align: center;">-</td>
                                                            <td style="text-align: center;">-</td>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <td><button class="btn btn-success">Accepted</button></td>

                                                            <?php

                                                            date_default_timezone_set("Asia/Calcutta");

                                                            $now = new DateTime("now");
                                                            $then = new DateTime($time);
                                                            $then->sub(new DateInterval('PT60M'));

                                                            if ($now > $then) {
                                                            ?>
                                                                <td style="text-align: center;">
                                                                    -
                                                                </td>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-12 d-flex">
                                                                            <a href='d_service.php?id=<?php echo $form; ?>' style="color:rgba(63,187,192,255) ;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-times-circle"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            <?php
                                                            } ?>
                                                            <td>
                                                                <a href='../payment/payment.php?id=<?php echo $form; ?>' style="color:rgba(63,187,192,255) ;">
                                                                    <button class="btn btn mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px">Payment</button>
                                                                </a>
                                                            </td>
                                                        <?php
                                                        }
                                                    } else if ($status == 2) {
                                                        ?>
                                                        <td><button class="btn button1">Completed</button></td>
                                                        <td style="text-align: center;">-</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="col-sm-12 d-flex">
                                                                    <button type="button" class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:grey ; border:0px" onclick="window.location.href='<?php echo $r; ?>'">Receipt</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    <?php
                                                    } else if ($status == -1) {
                                                    ?>
                                                        <td><button class="btn btn-danger">Cancled</button></td>
                                                        <td style="text-align: center;">-</td>
                                                        <td style="text-align: center;">-</td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <td><button class="btn btn-dark">Expired</button></td>
                                                        <td style="text-align: center;">-</td>
                                                        <td style="text-align: center;">-</td>
                                                    <?php
                                                    }
                                                    ?> <td>
                                                        <div class="form-group">
                                                            <div class="col-sm-12 d-flex">
                                                                <button type="button" class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px" onclick="openModal('<?php echo $form; ?>','<?php echo $then->format('y-m-d H:i'); ?>')">open
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <?php

                                                    if ($status == 2) {
                                                        if ($f != 0) {
                                                    ?>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="col-sm-12 d-flex">
                                                                        <button type="button" class=" btn btn-warning mx-auto mx-md-0 text-white" style=" border:0px" data-bs-target="#feed_modal" onclick="openSubModal('<?php echo $form; ?>','<?php echo $f ?>')">Submitted</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="col-sm-12 d-flex">
                                                                        <button type="button" class="danger btn btn-success mx-auto mx-md-0 text-white" style=" border:0px" id="feed_btn" data-target="#feed" onclick="openModalFeed('<?php echo $form; ?>','<?php echo $then->format('y-m-d H:i'); ?>')">Feedback</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                <?php
                                                        }
                                                    }
                                                } ?>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="container-fluid" id="box2" style="display: none;">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <p style="font-size: 25px;" id="do_pay">Please Wait for the Admin approval to Select Location, Services & to get into Search </p>
                                <button id="pay_btn" type="button" class="btn btn-success mx-auto mx-md-0 text-white" style="display:none;background-color:rgba(63,187,192,255) ; border:0px" onclick='window.location.href="../payment/nurse_payment.php"' ;>Pay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Request app modal -->
    <div class="modal fade" id="Requested_appointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="form.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Requested Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="data">
                    </div>
            </form>
        </div>
    </div>
    </div>

    <!-- submitted Feed modal -->
    <div class="modal fade" id="feed_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="form.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Submitted Feedback</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row" id="sub_feed">
                        </div>
                    </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Feedback modal -->
    <div class="modal fade" id="feed" tabindex="-1" aria-labelledby="feed" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="feed_data.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p class="text-center mt-3 mb-5" style="font-size:27px;"><small><strong>How satisfied are you with our nurse service<br />
                                    support Performance ?</strong></small></p>
                        <div class="row">
                            <input type="hidden" name="form" id="form_feed">

                            <div class="col-4 text-center">
                                <button type="submit" name="s" style="border: 0px;">
                                    <div class="mini-container"><span style="font-size: 40px;">😊</span>
                                        <p class="text-center" style="font-size: 18px;"><small><strong>Satisfied</strong></small></p>
                                    </div>
                                </button>
                            </div>
                            <div class="col-4 text-center">
                                <button type="submit" name="n" style="border: 0px;">
                                    <div class="mini-container"> <span style="font-size: 40px;">😐</span>
                                        <p class="text-center" style="font-size: 18px;"><small><strong>Neutral</strong></small></p>
                                    </div>
                                </button>
                            </div>
                            <div class="col-4 text-center">
                                <button type="submit" name="u" style="border: 0px;">
                                    <div class="mini-container"><span style="font-size: 40px;">😣</span>
                                        <p class="text-center" style="font-size: 18px;"><small><strong>Unhappy</strong></small></p>
                                    </div>
                                </button>
                            </div>
                        </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Cancle Appointment </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to cancle appointment ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="button button1" data-bs-dismiss="modal">No</button>
                    <button type="button" class="button button1">Yes</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    function openModal(form, time) {
        $.ajax({
            url: 'nurse_app.php',
            type: 'POST',
            data: {
                id: form,
                time: time
            },
            success: function(result) {
                $('#data').html(result);
            }
        });


        $('#Requested_appointment').modal('toggle');
    }

    <?php
    function sendMail($nurse_mail, $body)
    {
        $subject = "Neighbouring Nurse ";
        $headers = "From: ht1872004@gmail.com";

        if (mail($nurse_mail, $subject, $body, $headers)) {
            echo "<script>
            location.reload();
            </script>
           ";
        }
    }
    ?>

    <?php

    if ($_SESSION['status'] == 0) {
    ?>
        document.getElementById('box1').style.display = "none";
        document.getElementById('box2').style.display = "block";
    <?php
    } else if ($_SESSION['status'] == 1) {
    ?>
        document.getElementById('box1').style.display = "none";
        document.getElementById('pay_btn').style.display = "block";
        document.getElementById('box2').style.display = "block";
        document.getElementById('do_pay').innerHTML = "Please Complete Your Payment"
    <?php
    } else {
    ?>
        document.getElementById('box1').style.display = "block";
        document.getElementById('box2').style.display = "none";
    <?php
    }
    ?>


    function openSubModal(form, t) {
        if (t == '1') {
            $('#sub_feed').html(`
                         <div class=" text-center">
                                <div class="mini-container"><span style="font-size: 40px;">😊</span>
                                    <p class="text-center" style="font-size: 18px;"><small><strong>Satisfied</strong></small></p>
                                </div>
                            </div>`);
        } else if (t == '2') {
            $('#sub_feed').html(`
            <div class="text-center">
                                <div class="mini-container"> <span style="font-size: 40px;">😐</span>
                                    <p class="text-center" style="font-size: 18px;"><small><strong>Neutral</strong></small></p>
                                </div>
                            </div>`);
        } else {
            $('#sub_feed').html(`
            <div class="text-center">
                                <div class="mini-container"><span style="font-size: 40px;">😣</span>
                                    <p class="text-center" style="font-size: 18px;"><small><strong>Unhappy</strong></small></p>
                                </div>
                            </div>`);
        }
        $('#feed_modal').modal('toggle');
    }


    function openModalFeed(form, t) {
        document.getElementById('form_feed').value = form;
        $('#feed').modal('toggle');
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>