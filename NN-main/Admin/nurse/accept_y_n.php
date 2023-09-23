<?php
    include '../../connect.php';

    if (isset($_REQUEST['email'])) {

        if (!$con) {
            die("Not connected to db");
        }

        $email = $_REQUEST['email'];
        $_SESSION['accept_nurse']=$email;
        $admin=$_SESSION['admin'];

        $sql="SELECT * FROM `requested_nurse` WHERE `email`='$email'";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            die(mysqli_error($con));
        }

        while($row=mysqli_fetch_assoc($result)){
            $name=$row['name'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accepte Nurse</title>
    <link href="../logo.jpeg" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container rounded-3 my-5 p-4" id="confirm" style="width: 600px;  box-shadow:5px 10px rgba(63,187,192,255)">
        <h3>Are you sure to accept <?php echo $name;?> nurse?</h3>
        <a href='accept_nurse.php' class="btn btn-secondary" style="background-color:rgba(63,187,192,255) ;">YES</a>
        <a href='req_nurses.php' class="btn btn-secondary">NO</a>
    </div>
</body>

</html>

