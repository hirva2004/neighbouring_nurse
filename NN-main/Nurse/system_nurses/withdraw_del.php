<?php
include '../../connect.php';

if (isset($_SESSION['nurse'])) {

    if (!$con) {
        die("Not connected to db");
    }

    $email = $_SESSION['nurse'];

    $sql = "SELECT * FROM `requested_nurse` WHERE `email`='$email'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die(mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($result);
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
    <!-- <link rel="stylesheet" type="text/css" href="../Nurse_signup/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style type="text/css">
        /* form {
            box-shadow: 5px 5px 8px rgba(63, 187, 192, 0.7);
        } */

        li,
        label {
            color: #2f2f2f;
            font-family: "Roboto", sans-serif;

        }

        h3 {
            position: relative;
            color: white;
            font-size: 33px;
            font-family: "Roboto", sans-serif;
        }

        input {
            color: black;
        }

        input,
        select,
        textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="text"],
        [type=email],
        [type="password"],
        [type=number] {
            width: calc(100% - 10px);
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container rounded-3 my-5 p-4 " id="confirm" style="width: 600px;  box-shadow:5px 10px rgba(63,187,192,255)">
        <h4 style="color: black;">How much you want to Withdraw?</h4>
        <br>
        <form>
            <div class="colums">
                <div class="item">
                    <label for="fname">Nurse Name </label>
                    <input id="fname" type="text" name="fname" value="<?php echo $row['name']; ?>" readonly />
                </div>
                <div class="item">
                    <label for="lname">Account Balance</label>
                    <input id="lname" type="text" name="amt" value="<?php echo $row['acc_balance']; ?>" readonly />
                </div>
                <div class="item">
                    <label for="lname">WithDraw Amount</label>
                    <input id="lname" type="number" name="w_amt" value="100" step="20" min="100" max="<?php echo $row['acc_balance'] - 1000; ?>" />
                </div>
                <div class="btn-block">
                    <button type="submit" name="with"
                      class="btn btn-secondary" style="background-color:rgba(63,187,192,255) ;">Withdraw Amount</button>
                    <a href='../system_nurses/profile.php' class="btn btn-secondary">Cancel</a>
                </div>
        </form>
    </div>
</body>
<?php

if(isset($_REQUEST['with'])){
    $a=$_REQUEST['w_amt'];
    header("location:withdraw.php?a=$a");
}

?>
</html>