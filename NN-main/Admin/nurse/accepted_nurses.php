<?php
include '../../connect.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Neighboring Nurse</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../logo.jpeg">
    <link href="../../Nurse/system_nurses/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <b class="logo-icon text-danger">
                            <img src="../../logo.jpeg" width="70" alt="homepage" class="dark-logo rounded-circle d-inline-block" style="border:2px solid rgba(63,187,192,255); ;" />
                            <span style="color:rgba(63,187,192,255); font-size: 17px;">Neighboring Nurse</span>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->

                        </span>
                    </a>

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
                            <!-- <i class="me-3 fa fa-user" aria-hidden="true"></i> -->
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Accepted Nurse</span></a>
                        </li>

                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- Diya Vora -->
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../profile/Admin-Profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="req_nurses.php" aria-expanded="false"><i class="me-3 fa fa-columns" aria-hidden="true"></i><span class="hide-menu">Requested Nurse</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="accepted_nurses.php" aria-expanded="false" style="color:rgba(63,187,192,255) ;"><i class="me-3 fa fa-table" aria-hidden="true" style="color:rgba(63,187,192,255) ;"></i><span class="hide-menu">Accepted Nurse</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../location/admin_loc.php" aria-expanded="false"><i class="me-3 fa fa-globe" aria-hidden="true"></i><span class="hide-menu">Locations</span></a></li>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../service/admin_ser.php" aria-expanded="false"><i class="me-3 fa fa-info-circle" aria-hidden="true"></i><span class="hide-menu">Services</span></a></li>
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
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">

                        <div class="d-flex align-items-center">

                        </div>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Sr. No</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Gender</th>
                                                <th class="border-top-0">Expired Services</th>
                                                <th class="border-top-0">Completed Services</th>
                                                <th class="border-top-0">Status</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (!$con) {
                                                die("Not connected to db");
                                            }

                                            $sql_req = "SELECT * FROM `requested_nurse` where `Approval_status`!=0;";
                                            $result = mysqli_query($con, $sql_req);

                                            if (!$result) {
                                                die(mysqli_error($con));
                                            }
                                            $i = 0;

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $i++;
                                                $name = $row['name'];
                                                $email = $row['email'];
                                                $gender = $row['gender'];
                                                $status = $row['Approval_status'];
                                                if ($gender == 'f') {
                                                    $gender = 'Female';
                                                } else {
                                                    $gender = 'Male';
                                                }

                                                $sql_exp="SELECT * FROM `request_form` WHERE `nurse_email`='$email' and Status=-3";
                                                $result_exp=mysqli_query($con,$sql_exp); 
                                                
                                                $sql_exp_2="SELECT * FROM `request_form` WHERE `nurse_email`='$email' and Status=2";
                                                $result_exp_2=mysqli_query($con,$sql_exp_2); 

                                            ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $gender; ?></td>
                                                    <td style="text-align: center;"><?php echo mysqli_num_rows($result_exp); ?></td>
                                                    <td style="text-align: center;"><?php echo mysqli_num_rows($result_exp_2); ?></td>

                                                    <td><?php 

                                                        if($status == 1){
                                                           echo "
                                                            <button type='button' class='btn btn-warning'>Payment Incomplete</button>
                                                            ";
                                                        }else{
                                                            echo "
                                                            <button type='button' class='btn btn-warning'>
                                                            <i class='fa fa-user'></i>
                                                            <i class='fa fa-check-circle'></i>
                                                        </button>
                                                            ";
                                                        }

                                                    ?>
                                                    </td>

                                                    <td>
                                                        <a href='decline_reason.php?email=<?php echo $email; ?>&re=1' style="color:rgba(63,187,192,255) ;">&nbsp&nbsp&nbsp
                                                            <button class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px">
                                                                Delete
                                                            </button>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="profile.php?nurse=<?php echo $email; ?>&admin=<?php echo $_SESSION['admin']; ?>" style="color:rgba(63,187,192,255) ;">
                                                            <button class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px">
                                                                Open
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>