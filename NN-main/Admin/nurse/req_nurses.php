<?php
include '../../connect.php';

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neighbouring Nurse </title>
    <link href="../../logo.jpeg" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="../../Nurse/system_nurses/style.min.css" rel="stylesheet">
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
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Requested Nurses</span></a>
                        </li>
                    </ul>


                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="../profile/Admin-Profile.php" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- <a href="completed_services.php" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#moneyModal">1500 Rs. -->
                                </a>
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
                    
                            
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../profile/Admin-Profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="req_nurses.php" aria-expanded="false" style="color:rgba(63,187,192,255) ;"><i class="me-3 fa fa-columns" aria-hidden="true" style="color:rgba(63,187,192,255) ;"></i><span class="hide-menu">Requested Nurse</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="accepted_nurses.php" aria-expanded="false"><i class="me-3 fa fa-table" aria-hidden="true"></i><span class="hide-menu">Accepted Nurse</span></a></li>
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
            <div class="container-fluid" id="box1">
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
                                                <th class="border-top-0">Accept</th>
                                                <th class="border-top-0">Decline</th>
                                            </tr>
                                        </thead>                          
                                        <tbody>
                                            <?php
                                                  if(!$con){
                                                    die("Not connected to db");
                                                }
                                
                                                $sql_req="SELECT * FROM `requested_nurse` where `Approval_status`=0;";
                                                $result=mysqli_query($con,$sql_req);
                                
                                                if(!$result){
                                                    die(mysqli_error($con));
                                                }
                                                $i=0;
                                
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $i++;
                                                    $name=$row['name'];
                                                    $email=$row['email'];
                                                    $gender=$row['gender'];
                                                    if($gender == 'f'){
                                                        $gender='Female';
                                                    }else{
                                                        $gender='Male';
                                                    }
                                            ?>                                                
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $name;?></td>
                                                <td><?php echo $gender;?></td>
                                                <td>
                                                    <div class="form-group">
                                                        <a href="accept_y_n.php?email=<?php echo $email;?>" style="color:rgba(63,187,192,255) ;">&nbsp&nbsp<i class="fa fa-check-circle"></i></a>
                                                </td>
                                                <td>
                                                    <a href='decline_reason.php?email=<?php echo $email;?>' style="color:rgba(63,187,192,255) ;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-times-circle"></i></a>
                                                </td>
                                                <td>
                                                    <a href="profile.php?nurse=<?php echo $email;?>&admin=<?php echo $_SESSION['admin'];?>" style="color:rgba(63,187,192,255) ;"><button class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px">
                                                            Open</button> </a>
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
</script>

</html>