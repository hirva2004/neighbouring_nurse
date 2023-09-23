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

    <title>Appointments</title>
    <link href="../../logo.jpeg" rel="icon">
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
                            <span style="color:rgba(63,187,192,255); font-size: 16px;">Neighbouring Nurse</span>
                        </b>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" style="background-color:rgba(63,187,192,255) ;" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <li class="nav-item hidden-sm-down">
                            <!-- <i class="me-3 fa fa-user" aria-hidden="true"></i> -->
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Appointments</span></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- <a href="completed_services.php" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#moneyModal">1500 Rs.
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="accepted_services.php" aria-expanded="false"><i style="color:rgba(63,187,192,255) ;" class="me-3 fa fa-check" aria-hidden="true"></i><span class="hide-menu" style="color:rgba(63,187,192,255) ;">Appointments</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="booked_app.php" aria-expanded="false"><i class="me-3  fa fa-check" aria-hidden="true"></i><span class="hide-menu">Requested Nurses </span></a></li>

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

        <div class="page-wrapper">
            <div class="container-fluid" id="box1">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Accepted Services</label>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table user-table no-wrap" style="font-size:15px">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">Sr</th>
                                                        <th class="border-top-0">Service</th>
                                                        <th class="border-top-0">Area</th>
                                                        <th class="border-top-0">Timing</th>
                                                        <th class="border-top-0">Charge</th>
                                                        <th class="border-top-0">Status</th>
                                                        <th class="border-top-0">Accept</th>
                                                        <th class="border-top-0">Decline</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT * FROM `request_form` where `nurse_email`='$nurse' order by `Created_Req_time` desc";
                                                    if ($con) {
                                                        $result = mysqli_query($con, $sql);
                                                        if ($result) {
                                                            $serial = 0;
                                                            while ($row = mysqli_fetch_assoc($result)) {

                                                    ?>
                                                                <tr>
                                                                    <td> <?php echo ++$serial; ?> </td>
                                                                    <td><?php echo $row['service_name']; ?></td>
                                                                    <?php $pin = $row['Pincode'];

                                                                    $form = $row['Request_id'];

                                                                    $sql1 = "SELECT * FROM `location` WHERE `Pincode` = $pin";
                                                                    $result1 = mysqli_query($con, $sql1);
                                                                    $row1 = mysqli_fetch_assoc($result1)
                                                                    ?>
                                                                    <td><?php echo $row1['area_name']; ?>
                                                                    </td>

                                                                    <td><?php echo $row['Service_Date_Time']; ?></td>
                                                                    <?php

                                                                    $sname = $row['service_name'];
                                                                    $sql2 = "SELECT * FROM `nurse_selected_services` WHERE `service_name` = '$sname' and `email`='$nurse'";
                                                                    $result2 = mysqli_query($con, $sql2);

                                                                    $time = $row['Service_Date_Time'];
                                                                    $created_time = $row['Created_Req_time'];

                                                                    date_default_timezone_set("Asia/Calcutta");
                                                                    $now = new DateTime("now");
                                                                    $then = new DateTime($time);
                                                                    $then2 = new DateTime($time);
                                                                    $then->add(new DateInterval('PT60M'));
                                                                    $then_created = new DateTime($created_time);
                                                                    $then_created->add(new DateInterval('PT10M'));
                                                                    // $diff = $now->diff($then);

                                                                    if ($row2 = mysqli_fetch_assoc($result2)) { ?>
                                                                        <td><?php echo $row2['s_charge'];
                                                                        } ?> Rs.</td>
                                                                        <?php
                                                                        $status = $row['Status'];

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
                                                                            if ($now > $then2 ||  $now > $then_created) {

                                                                                $sql = "UPDATE `request_form` SET `Status`=-4 where `Request_id`=$form";
                                                                                $result = mysqli_query($con, $sql);

                                                                                $sql_u = "select * from `requested_nurse` where `email`='$nurse'";
                                                                                $result_u = mysqli_query($con, $sql_u);
                                                                                $row_n = mysqli_fetch_assoc($result_u);
                                                                                $nurse_mail = $row_n['email2'];
                                                                                $nname = $row_n['name'];
                                                                                sendMail($nurse_mail, "Your Pending appointement for $sname at $time has expired");

                                                                                $email = $row['Uurse_Email'];
                                                                                $sql_u = "select * from `patient` where `Email`='$email'";
                                                                                $result_u = mysqli_query($con, $sql_u);
                                                                                $row_n = mysqli_fetch_assoc($result_u);
                                                                                $u_name = $row_n['Name'];
                                                                                $u_email = $row_n['email2'];

                                                                                sendMail($u_email, "Your Pending appointement for $sname at $time has expired as $nname hasn't accepted the appointment");


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
                                                                                            <a href='a_service.php?id=<?php echo $form; ?>' style="color:rgba(63,187,192,255) ;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-check-circle"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <div class="col-sm-12 d-flex">
                                                                                            <a href='d_service.php?id=<?php echo $form; ?>' style="color:rgba(63,187,192,255) ;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-times-circle"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            <?php
                                                                            }
                                                                        } else if ($status == 1) {

                                                                            if ($now > $then) {

                                                                                $sql = "UPDATE `request_form` SET `Status`=-3 where `Request_id`=$form";
                                                                                $result = mysqli_query($con, $sql);

                                                                                $sql_u = "select * from `requested_nurse` where `email`='$nurse'";
                                                                                $result_u = mysqli_query($con, $sql_u);
                                                                                $row_n = mysqli_fetch_assoc($result_u);
                                                                                $nurse_mail = $row_n['email2'];
                                                                                $nurse_name = $row_n['name'];
                                                                                $bal = $row['acc_balance'];
                                                                                sendMail($nurse_mail, "Your appointement for $name has expired so you are charged with 100 Rs. which is deducted from your Neighbouring Nurse account.");

                                                                                $new = $bal - 100;

                                                                                $sql_u = "update `requested_nurse` set `acc_balance`=$new where `email`='$nurse'";
                                                                                $result_u = mysqli_query($con, $sql_u);

                                                                                $sql_u = "select * from `patient` where `Email`='$user'";
                                                                                $result_u = mysqli_query($con, $sql_u);
                                                                                $row_n = mysqli_fetch_assoc($result_u);
                                                                                $u_name = $row_n['Name'];
                                                                                $u_email = $row_n['email2'];
                                                                                sendMail($u_email, "Sorry for our inconvenience as $nurse_name hasn't come for your $name service. We request you to book another appointment for your service from our website");
                                                                            ?>
                                                                                <td><button class="btn btn-dark">Expired</button></td>
                                                                                <td style="text-align: center;">-</td>
                                                                                <td style="text-align: center;">-</td>
                                                                            <?php
                                                                            } else {
                                                                            ?>
                                                                                <td><button class="btn btn-success">Accepted</button></td>
                                                                                <td style="text-align: center;">-</td>


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
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        <?php
                                                                        } else if ($status == 2) {
                                                                        ?>
                                                                            <td><button class="btn btn-success" style="background-color:rgba(63,187,192,255) ; border:0px">Completed</button></td>
                                                                            <td style="text-align: center;">-</td>
                                                                            <td style="text-align: center;">-</td>
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
                                                                        ?>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <div class="col-sm-12 d-flex">
                                                                                    <button type="button" class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px" onclick="openModal('<?php echo $form; ?>','<?php echo $then->format('y-m-d H:i'); ?>')">open
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                </tr>
                                                    <?php }
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                </form>
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

    <!-- Requested Apointments -->
    <div class="modal fade" id="Requested_appointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="form.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Appointment </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="data">
                    </div>
            </form>
        </div>
    </div>

    <!-- Remove Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Remove location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="font-size:17px;">
                    Are you sure you want to remove xyz service from your profile?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                    <button type="button" class="btn" style="background-color:rgba(63,187,192,255) ;">No</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="moneyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Earned Money</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="font-size:17px;">
                    Do you want to withdraw money or delete account?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Delete</button>
                    <button type="button" class="btn" style="background-color:rgba(63,187,192,255) ;">Withdraw</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    <?php

    if ($_SESSION['status'] == 0) {
    ?>
        document.getElementById('box1').style.display = "none";
        document.getElementById('box2').style.display = "inline-block";
    <?php
    } else if ($_SESSION['status'] == 1) {
    ?>
        document.getElementById('box1').style.display = "none";
        document.getElementById('pay_btn').style.display = "inline-block";
        document.getElementById('box2').style.display = "inline-block";
        document.getElementById('do_pay').innerHTML = "Please Complete Your Payment"
    <?php
    } else {
    ?>
        document.getElementById('box1').style.display = "inline-block";
        document.getElementById('box2').style.display = "none";
    <?php
    }
    ?>


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

    function openModal(form, t) {
        $.ajax({
            url: 'data_app.php',
            type: 'POST',
            data: {
                id: form,
                time: t
            },
            success: function(result) {
                $('#data').html(result);
            }
        });


        $('#Requested_appointment').modal('toggle');
    }
</script>

</html>