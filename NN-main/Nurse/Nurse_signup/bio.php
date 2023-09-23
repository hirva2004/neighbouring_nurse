<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bio</title>
    <link href="../../logo.jpeg" rel="icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <style type="text/css">
         li,label{
          color: #2f2f2f;
          font-family: "Roboto", sans-serif;

        }
        form{
          box-shadow: 5px 5px 8px rgba(63,187,192,0.7);
        }

         h3{
            position: relative;
            color:white;
            font-size: 33px;
            font-family: "Roboto", sans-serif;
            padding-bottom: 10%;
        }
         input{
            color: black;
        }

        .box{
            box-shadow: -500px -500px 8px rgba(63,187,192,0.7);
            padding: 3px;
            margin-top: 10px;
        }
  </style>
</head>
<body>
    <?php

        include '../../connect.php';

        if(!(isset($_SESSION['user']['terms'])) && !(isset($_SESSION['user']['nurse_re_1'])) && !(isset($_SESSION['user']['rn_Cert']))){
             header('location:conditions.php');
        }

        if(isset($_POST['sub_bio'])){
            $_SESSION['user']['bio']=$_POST['bio'];
            header('location:data.php');
        }

    ?>
	<div class="testbox">
        <form method="post">
            <div class="banner">
                <h3>Bio</h3>
            </div>
            <br />
                    <div class="item">
                        <label for="donation">Biography<span>*</span></label>
                        <br>
                        <textarea id="donation" rows="3" style="resize: none;color: black;" maxlength="300" required name="bio"></textarea>
                        <span>Only 300 Characters Allowed. Do not use any special characters like[',",.,etc..]</span><br>
                        <span>This will be displayed into your profile.</span>
                        <button type="submit" name="sub_bio" class="btn" style="background-color:#3fbbc0; color:white;">Done</button>
                    </div>    
                    
                    <?php
                             echo "Data:";
                             print_r($_SESSION['user']['nurse_exp']);
                    
                    ?>
          </form>
      </div>
</body>
</html>