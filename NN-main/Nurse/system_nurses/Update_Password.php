<?php
    include '../../connect.php';
?>
<html>
<head>
    <title>Change Password</title>
    <link href="../../logo.jpeg" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>
        body {
            margin: 0;
            curser: pointer;
            overflow: hidden;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgb(230, 235, 235);
        }

        * {
            box-sizing: border-box;
        }

        .main {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding-top: 100px;
        }

        .form {
            width: 350px;
            padding: 35px;
            background-color: white;
            border: 1px solid lightgray;
        }

        .form1 {
            width: 350px;
            padding: 25px;
            background-color: white;
            border: 1px solid lightgray;
            text-align: center;
        }

        .tb1 {
            width: 100%;
        }

        .btn {
            border-radius: 6px;
            width: 100%;
            padding: 10px;
            border: none;
            background-color:#3fbbc0;
            color: white;
            letter-spacing: 1px;
        }

        .btn:hover {
            background-color: rgba(63,187,192,0.7);
        }

        h1 {
            color: black;
            text-align: center;
        }

        .col {
            color: black;
            text-align: center;
        }

        .col1 {
            text-align: right;
        }

        .txt {
            border-radius: 4px;
            width: 100%;
            padding: 10px;
            border: 1px solid rgb(235, 232, 232);
            background-color: rgb(235, 232, 232);
            color: grey;
        }

        span {
            position: relative;
        }

        span:after {
            content: '';
            position: absolute;
            width: 110px;
            height: 2px;
            background-color: lightgray;
            left: -120px;
            top: 10px;
        }

        span:before {
            content: '';
            position: absolute;
            width: 110px;
            height: 2px;
            background-color: lightgray;
            right: -120px;
            top: 10px;
        }

        .text {
            top: 400px;
            left: 400px;
            text-align: center;
        }

        .header1 {
            width: 100%;
            border-bottom: 1px solid rgb(6, 161, 163);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            background-color: rgb(6, 161, 163);
        }

        .header1 a {
            padding: 20px 30px;
            color: black;
            text-decoration: none;
            transition: .5s;
        }

        .header1 span a:hover {
            background-color: #ddd;
            color: rgb(6, 161, 163);
            font-weight: bold;
        }

        .header span {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="main">
        <form class="form" method="POST">
            <table class="tb1">
                <tr>
                    <td>
                        <h2>Change Password</h2>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
				<tr>
                    <td><input type="password" placeholder="Old Password" class="txt" name="oldpass" required></td>
                </tr>
				<tr>
                    <td><input type="password" placeholder="New Password" class="txt" name="newpass" required min="10"></td>
                </tr>
				<tr>
                    <td><input type="password" placeholder="Verify New Password" class="txt" name="cnewpass" required></td>
                </tr>
				
				<tr>
                    <td>&nbsp;</td>
                </tr>
                <td>
                    <input type="submit" value="Reset" class="btn" name="reset_pass">
                </td>       
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </form>
    </div>
</body>
<script>
<?php

    if(isset($_POST['reset_pass'])){
        $old=$_POST['oldpass'];
        $new=$_POST['newpass'];
        $cnew=$_POST['cnewpass'];

        if(!$con){
            die("Not connected to db");
        }

        $mail=$_REQUEST['id'];
        $sql_req="SELECT * FROM `requested_nurse` WHERE email='$mail';";
        $result=mysqli_query($con,$sql_req);

        if(!$result){
            die(mysqli_error($con));
        }

        if(mysqli_num_rows($result) == 1){
            while($row=mysqli_fetch_assoc($result)){
                if($row['password'] != md5($old)){
                    echo "alert('Wrong Old Password')";
                }else{
                    if($new != $cnew){
                        echo "alert('New Password & Verfiy Password must be Same')";
                    }else{
                        $new=md5($new);
                        $sql="UPDATE `requested_nurse` SET `password`='$new',`Modified_Time`=CURRENT_TIMESTAMP() WHERE `email`='$mail';";
                        $result2=mysqli_query($con,$sql);

                        if(!$result2){
                            die(mysqli_error($con));
                        }else{
                            echo "if(confirm('Password Changed')){";
                                echo "window.location.href='profile.php'";
                            echo "}";
                        }
                    }
                }
            }
        }

    }

?>
</script>
</html>