<?php
include '../../connect.php';

if (!(isset($_SESSION['user']['terms'])) && !(isset($_SESSION['user']['email']))) {
  header('location:conditions.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Nurse Registration </title>
  <link href="../../logo.jpeg" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style type="text/css">
    form {
      box-shadow: 5px 5px 8px rgba(63, 187, 192, 0.7);
    }

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

    input,textarea {
      color: black;
    }
  </style>
</head>

<body>
  <div class="testbox">
    <form method="post" id="cert_id" enctype="multipart/form-data">
      <div class="banner">
        <h3 style="color:white; padding-bottom: 10%;">Hospital Details</h3>
      </div>
      <br />
      <fieldset>
        <div class="colums">
          <div class="item">
            <label for="fname">Hospital Name<span>*</span></label>
            <input id="fname" type="text" name="fname" required />
          </div>
          <div class="item">
            <label for="lname">Registered ID<span>*</span></label>
            <input id="reg_id" type="text" name="reg_id" required  type="number" pattern="[0-9]+"/>
          </div>

          <div class="item">
            <label for="pass">Password<span>*</span></label>
            <label id="error" style="color:red;display:none;">Password Must Be Same</label>
            <input id="pass" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" required style="color: black;">
          </div>

          <div class="item">
            <label for="pass">Confirm Password<span>*</span></label>
            <input id="confirm_pass" type="password" name="confirm_pass" required style="color: black;">
          </div>

          <div class="item">
            <label for="phone">Phone Number<span>*</span></label>
            <input id="phone" type="tel" pattern="[0-9]+" name="phone" required minlength=10 maxlength=10 type="number" placeholder="9999999999"/>
          </div>

          <div class="item">
            <label for="phone">Hospital Address<span>*</span></label>
            <textarea id="address" type="tel" name="address" required style="resize:none;"></textarea>
          </div>
      
        </div>

        <div class="btn-block">
          <button type="submit" class="btn" style="background-color:#3fbbc0; color:white;" name="signup">Sign Up</button>
        </div>

      </fieldset>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(function() {
    $('#error').hide();

    <?php

    if (isset($_POST['signup'])) {

      if ($_POST['password'] == $_POST['confirm_pass']) {
        $_SESSION['user']['data'] = $_POST;

        header('location:show.php');

      } else {
        echo "
                    $('#pass').focus();
                    $('#error').show();
                ";
      }
    }
    ?>
  });
</script>

</html>