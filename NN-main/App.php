<?php
include '../../connect.php';

//if (isset($_SESSION['user'])) {
    //$user = $_SESSION['user'];
//} else {
  //  header('location:../login/login.php');
//}
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
    <!-- Custom CSS -->
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="feed.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
        a {
            text-decoration: none;
        }

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
            background-color: rgba(63, 187, 192, 255);
        }

        .Pending {
            background-color: #E56399;
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
    </style>
</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
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

                <div class="navbar-collapse collapse" style="background-color:rgba(63,187,192,255) ;" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <li class="nav-item hidden-sm-down">
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Post created</span></a>
                        </li>
                    </ul>
                    </ul>

                    <ul class="navbar-nav">
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

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="btn sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="App.php" aria-expanded="false"><i class="me-3 fa fa-check" aria-hidden="true"></i><span class="hide-menu">Post</span></a></li>

                       
						

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
            <div class="container-fluid">

                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Post Created</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">
                                                    <H6>Sr.no<H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Job Title</H6>
                                                </th>
                                                <th class="border-top-0">
                                                    <H6>Applied Nurses</H6>
                                                </th>
                                                
                                                <th class="border-top-0">
                                                    <H6>Cancel</h6>
                                                </th>
                                                
                                                <th class="border-top-0">
                                                    <H6>Open</H6>
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										 <tr>
                                                    <td>1</td>
                                                    <td id="Servicename">Nursing Assistant</td>
                                                    <td id="Nurseemail">2</td>
                                           <td><button class="btn btn-danger">----</button></td>
										   <td><button class="btn btn-success mx-3 text-white" style="background-color:rgba(63,187,192,255) ; border:0px;" onclick="window.location.href='update_password.php'">Open
                                            </button></td>
										   </tr>
                                          <tr>
                                                    <td>2</td>
                                                    <td id="Servicename">Pediatric Nurse</td>
                                                    <td id="Nurseemail">1</td>
                                           <td><button class="btn btn-danger">Cancelled</button></td>
										   <td><button class="btn btn-success mx-3 text-white" style="background-color:rgba(63,187,192,255) ; border:0px;" onclick="window.location.href='update_password.php'">Open
                                            </button></td>
										   </tr>
										   <tr>
                                                    <td>3</td>
                                                    <td id="Servicename">Dialysis Nurse</td>
                                                    <td id="Nurseemail">4</td>
                                           <td><button class="btn btn-danger">----</button></td>
										   <td><button class="btn btn-success mx-3 text-white" style="background-color:rgba(63,187,192,255) ; border:0px;" onclick="window.location.href='update_password.php'">Open
                                            </button></td>
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
    </div>

    <!-- Open modal -->
    <div class="modal fade" id="Requested_appointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="form.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Appointment Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="data">
                    </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Feed modal -->
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

</body>
<script>
    function openModal(form, t) {
        $.ajax({
            url: 'd_app.php',
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
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</script>

</html>