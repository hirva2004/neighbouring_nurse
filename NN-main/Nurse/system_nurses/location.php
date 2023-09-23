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
    <title>Nurse Location</title>
    <link href="../../logo.jpeg" rel="icon">
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
                            <span style="color:rgba(63,187,192,255); font-size: 17px;">Neighboring Nurse</span>
                        </b>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" style="background-color:rgba(63,187,192,255) ;" id="navbarSupportedContent" data-navbarbg="skin5">


                    <ul class="navbar-nav me-auto mt-md-0 ">


                        <li class="nav-item hidden-sm-down">
                            <!-- <i class="me-3 fa fa-user" aria-hidden="true"></i> -->
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Location</span></a>
                        </li>
                    </ul>


                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="profile.php" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="location.php" aria-expanded="false" style="color:rgba(63,187,192,255) ;"><i class="me-3 fa fa-globe" style="color:rgba(63,187,192,255) ;" aria-hidden="true"></i><span class="hide-menu">Locations</span></a></li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="time.php" aria-expanded="false"><i class="me-3 fa fa-columns" aria-hidden="true"></i><span class="hide-menu">Timing</span></a></li> -->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="service.php" aria-expanded="false"><i class="me-3 fa fa-info-circle" aria-hidden="true"></i><span class="hide-menu">Services</span></a></li>


                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="accepted_services.php" aria-expanded="false"><i class="me-3 fa fa-check" aria-hidden="true"></i><span class="hide-menu">Appointments</span></a></li>
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
            <center>
                <div class="alert alert-danger" role="alert" id="add_nurse" style="display: none;">
                    Add Locations,Services to Become System Nurses.
                </div>
            </center>
            <div class="container-fluid" id="box1">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Selected Area</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select id="state" class="form-select shadow-none border-0 ps-0 form-control-line" name="area" onchange="addPincode(this.value);">
                                                <option value=""></option>
                                                <?php
                                                $sql = "SELECT `Pincode` from `nurse_selected_areas` WHERE `email`='$nurse'";
                                                if ($con) {
                                                    $result = mysqli_query($con, $sql);

                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $Pincode = $row['Pincode'];
                                                        $sql2 = "SELECT * from `location` WHERE `Pincode`=$Pincode";
                                                        if ($con) {
                                                            $result2 = mysqli_query($con, $sql2);
                                                            if ($result2) {
                                                                while ($row = mysqli_fetch_assoc($result2)) {
                                                ?>
                                                                    <option value="<?php echo $row['area_name']; ?>">
                                                                        <?php echo $row['area_name']; ?>
                                                                    </option>
                                                <?php
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <span></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Pincode</label>
                                        <div class="col-md-12">
                                            <input type="text" id="pincode" class="form-control ps-0 form-control-line" disabled value="0">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button type="button" class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px" onclick="yesRemove()">Remove</button>

                                            <button type="button" class="btn btn-success mx-4 me-md-3 text-white" style="background-color:rgba(63,187,192,255); border:0px" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
                                        </div>
                                    </div>

                                </form>
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


    </div>


    <!-- Remove Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Remove location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="font-size: 20px;">
                    Are you sure yopu want to remove xyz location?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="remove()">Yes</button>
                    <button type="button" class="btn" style="background-color:rgba(63,187,192,255) ;" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-material mx-2" action="Loc-Insert.php" method="POST">
                        <div class="form-group">
                            <label class="col-md-12 mb-0">State</label>
                            <div class="col-sm-12 border-bottom">
                                <select id="state" name="st" class="form-select shadow-none border-0 ps-0 form-control-line" onchange="addDistrict(this.value);">
                                    <option>Choose State</option>
                                    <?php
                                    $sql = "SELECT `state` from `location` GROUP BY `state`;";
                                    if ($con) {
                                        $result = mysqli_query($con, $sql);

                                        if ($result) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                                <option value="<?php echo $row['state']; ?>"><?php echo $row['state']; ?></option>
                                    <?php
                                            }
                                        } else {
                                            die('Query problem! while showing states');
                                        }
                                    } else {
                                        die('Db Problem!');
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">District</label>
                            <div class="col-sm-12 border-bottom">
                                <select id="district" name="dis" class="form-select shadow-none border-0 ps-0 form-control-line" onchange="addArea(this.value);">
                                    <option>Choose District</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">Area</label>
                            <div class="col-sm-12 border-bottom">
                                <select id="area" name="ar" class="form-select shadow-none border-0 ps-0 form-control-line" onchange="addPin(this.value);">
                                    <option>Choose Area</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">Pincode</label>
                            <div class="col-md-12">
                                <input type="text" id="pin" readonly name="pinId" class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" value="submit" name="save" class="btn btn-secondary" style="background-color:rgba(63,187,192,255) ;">
                </div>
            </div>
            </form>
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
    } else if ($_SESSION['status'] == 2) {
    ?>
        document.getElementById('add_nurse').style.display = "inline-block";
    <?php
    } else {
    ?>
        document.getElementById('box1').style.display = "inline-block";
        document.getElementById('box2').style.display = "none";
    <?php
    }
    ?>

    function addDistrict(value) {
        // count++;
        $.ajax({
            url: 'district.php',
            type: 'POST',
            data: {
                state: value
            },

            success: function(result) {
                $('#district').html(result);
            }
        });
    }

    function addArea(value) {
        // count++;
        $.ajax({
            url: 'area.php',
            type: 'POST',
            data: {
                district: value
            },
            success: function(result) {
                $('#area').html(result);
            }
        });
    }

    function addPin(value) {
        $.ajax({
            url: 'pincode.php',
            type: 'POST',
            data: {
                area: value
            },
            success: function(result) {
                $('#pin').val(result);
            }
        });
    }

    function addPincode(value) {
        $.ajax({
            url: 'pincode.php',
            type: 'POST',
            data: {
                area: value
            },
            success: function(result) {
                $('#pincode').val(result);
            }
        });
    }

    function remove() {
        var x = document.getElementById('pincode').value;
        window.location.href = "deleteArea.php?pincode=" + x;
    }

    function yesRemove() {
        if (document.getElementById('pincode').value == 0) {
            alert("First Select the Location");
            $('#state').focus();
        } else {
            $('#staticBackdrop').modal('toggle');

        }
    }
</script>

</html>