<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php
    include '../../connect.php'
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Location </title>
    <link href="../../logo.jpeg" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="../../Nurse/system_nurses/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
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
                            <span class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Location</span></a>
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
                                Diya Vora
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../profile/Admin-Profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../nurse/req_nurses.php" aria-expanded="false"><i class="me-3 fa fa-columns" aria-hidden="true"></i><span class="hide-menu">Requested Nurse</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../nurse/accepted_nurses.php" aria-expanded="false"><i class="me-3 fa fa-table" aria-hidden="true"></i><span class="hide-menu">Accepted Nurse</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_loc.php" aria-expanded="false" style="color:rgba(63,187,192,255) ;"><i class="me-3 fa fa-globe" aria-hidden="true" style="color:rgba(63,187,192,255) ;"></i><span class="hide-menu">Locations</span></a></li>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">State</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select id="state" class="form-select shadow-none border-0 ps-0 form-control-line" onchange="addDistrict(this.value);">
                                                <option>Choose State</option>
                                                <?php
                                                        $sql="SELECT `state` from `location` GROUP BY `state`;";
                                                        if($con){
                                                            $result=mysqli_query($con,$sql);

                                                            if($result){
                                                                while($row=mysqli_fetch_assoc($result)){
                                                                    ?>
                                                                <option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>  
                                                            <?php
                                                                }
                                                            }else{
                                                                die('Query problem! while showing states');
                                                            }
                                                        }else{
                                                            die('Db Problem!');
                                                        }
	                 		                    ?>           
                                            </select>
                                        </div>
                                        <span></span>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Dictrict</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select id="district" class="form-select shadow-none border-0 ps-0 form-control-line" onchange="addArea(this.value);">
                                            <option>Choose District</option>  	             
                                            </select>
                                        </div>
                                        <span></span>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Area</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select id="area" class="form-select shadow-none border-0 ps-0 form-control-line" onchange="addPincode(this.value);">
                                                <option>Choose Area</option>                              
                                            </select>
                                        </div>
                                        <span></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Pincode</label>
                                        <div class="col-md-12">
                                            <input type="text" disabled id="pin" class="form-control ps-0 form-control-line" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button type="button" class="btn btn-success mx-4 me-md-3 text-white" style="background-color:rgba(63,187,192,255); border:0px" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
                                            <button type="button" class="btn btn-success mx-4 me-md-3 text-white" style="background-color:rgba(63,187,192,255); border:0px" data-bs-target="#updatemodal" onclick="dataSelectedUpdate();">Update</button>
                                            <button type="button" class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px" data-bs-target="#staticBackdrop" onclick="dataSelectedRemove();">Remove</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

    <!-- update Modal -->
    <div class="modal fade" id="updatemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="Loc-update.php" method="POST">
                        <div class="form-group">
                            <label class="col-md-12 mb-0">State</label>
                            <div class="col-md-12">
                                <input type="text" name="state" id="state_update" placeholder="Enter State" class="form-control ps-0 form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">District</label>
                            <div class="col-md-12">
                                <input type="text" name="district" id="district_update" placeholder="Enter District" class="form-control ps-0 form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">Area</label>
                            <div class="col-md-12">
                                <input type="text" name="area" id="area_update" placeholder="Enter area" class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Pincode</label>
                            <div class="col-md-12">
                                <input type="text" name="pincode" id="pincode_update" placeholder="Enter Pincode" class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" data-bs-dismiss="modal" style="background-color:rgba(63,187,192,255) ;" name="save">Update</button>
                        </div>
                    </form>
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
                <div class="modal-body">
                    <h4>Are you sure you want to remove xyz location?</h4>
                </div>
                <div class="modal-footer">
                    <p id="pin_data"></p>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="yesRemove()">Yes</button></a>
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
                    <form action="Loc-Insert.php" method="POST">
                        <div class="form-group">
                            <label class="col-md-12 mb-0">State</label>
                            <div class="col-md-12">
                                <input type="text" name="state" id="state" placeholder="Enter State" required class="form-control ps-0 form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">District</label>
                            <div class="col-md-12">
                                <input type="text" name="district" id="district" placeholder="Enter District" required class="form-control ps-0 form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">Area</label>
                            <div class="col-md-12">
                                <input type="text" name="area" id="area" placeholder="Enter area" required class="form-control ps-0 form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">Pincode</label>
                            <div class="col-md-12">
                                <input type="text" name="pincode" id="pincode" placeholder="Enter Pincode" required class="form-control ps-0 form-control-line">
                            </div>
                        </div>                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn" data-bs-dismiss="modal" style="background-color:rgba(63,187,192,255) ;" name="add_loc">Add</button>
                </div>
            </form>
            </div>
        </div>
</body>
<script>

    function addDistrict(value){
			// count++;
			$.ajax({
				url:'district.php',
				type:'POST',
				data:{state:value},

				success:function(result){
					$('#district').html(result);
				}
			});
		}

    function addArea(value){
        // count++;
        $.ajax({
            url:'area.php',
            type:'POST',
            data:{district:value},

            success:function(result){
                $('#area').html(result);
            }
        });
    }
    function addPincode(value){
        // count++;
        $.ajax({
            url:'pincode.php',
            type:'POST',
            data:{area:value},
            success:function(result){
                $('#pin').val(result);
            }
        });
    }

    function dataSelectedUpdate(){
        if(document.getElementById('pin').value == 0){
            alert("First Select the Location");
            $('#state').focus();
        }else{
            $('#updatemodal').modal('toggle');
            document.getElementById('state_update').value=document.getElementById('state').value;
            document.getElementById('district_update').value=document.getElementById('district').value;
            document.getElementById('area_update').value=document.getElementById('area').value;
            document.getElementById('pincode_update').value=document.getElementById('pin').value;
        }
    }

    function dataSelectedRemove(){
        if(document.getElementById('pin').value == 0){
            alert("First Select the Location");
            $('#state').focus();
        }else{
            $('#staticBackdrop').modal('toggle'); 
        }
    }

    function yesRemove(){
        var x=document.getElementById('pin').value;
        window.location.href="deleteArea.php?pin="+x;
    }


</script>
</html>