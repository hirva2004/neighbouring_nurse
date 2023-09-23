<!DOCTYPE html>
<html>
<head>
  <title>Nurse Registration </title>
  <link href="../../logo.jpeg" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
        }

  </style>
</head>

<body>

  <div class="testbox">
    <form method="post">
      <div class="banner">
        <h3 style="color:white; padding-bottom: 10%;">Terms & Conditions</h3>
      </div>
      <br/>
      <div class="checkbox">
          <p>
              <li>You Must have Registered Nurse (RN) Certificate</li>
              <li>You Must have at least 2 years of experience</li>
              <li>You have to pay 1000 Rs as deposite to first create account after your profile gets approval.</li></li>
              <li>You have to accept the service within 20mins otherwise service request will be expired.</li>
              <li>You have to complete the accepted service otherwise 100 Rs. will be deducted from the account.</li>
              <li>You must have basic Equipments for providing defined services.</li>
          </p>
          <label><input type="checkbox" required name="terms" value="1"/>I accept the terms & condtions of nieghboring nurse
          </label>
        </div>

        <div class="btn-block">   
          <button type="submit" class="btn" style="background-color:#3fbbc0; color:white;" name="sub">Next</button>
        </div>
      </fieldset>
  </div>

  <?php

      if(isset($_POST['sub'])){
        include '../../connect.php';

        $_SESSION['user']['terms']=1;

        header('location:email.php');
      }

  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>