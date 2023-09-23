<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Email</title>
  <link href="../../logo.jpeg" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <style type="text/css">
    li,
    label {
      color: #2f2f2f;
      font-family: "Roboto", sans-serif;

    }

    form {
      box-shadow: 5px 5px 8px rgba(63, 187, 192, 0.7);
    }

    h3 {
      position: relative;
      color: white;
      font-size: 33px;
      font-family: "Roboto", sans-serif;
      padding-bottom: 10%;
    }

    .box {
      box-shadow: -500px -500px 8px rgba(63, 187, 192, 0.7);
      padding: 3px;
      margin-top: 10px;
    }

    input {
      color: black;
    }
  </style>
</head>

<body>
  <?php

  include '../../connect.php';

  if (!((isset($_SESSION['user']['terms'])))) {
    header('location:conditions.php');
  }

  ?>
  <div class="testbox" id="sendmail">
    <form method="post">
      <div class="banner">
        <h3>Email</h3>
      </div>
      <br />
      <div class="colums">
        <div class="item">
          <label for="address">Email Address<span>*</span></label>
          <label id="error" style="color:red;"></label>

          <input id="mail" type="email" name="mail" required style="color: black; width: calc(100% - 10px); padding: 5px;">
        </div>

        <div class="btn-block">
          <button class="btn" type="submit" style="background-color:#3fbbc0; color:white;" name="email_send" id="email_send">Send Mail</button>
        </div>
      </div>
    </form>
  </div>

  <div class="testbox" id="verify">
    <form method="post">
      <div class="banner">
        <h3>Verify</h3>
      </div>
      <br />
      <div class="colums">
        <div class="item">
          <label for="address">Verify Code<span>*</span></label>
          <input id="code" type="text" name="code" required style="color:black;" />
        </div>

        <div class="btn-block">
          <button class="btn" type="submit" style="background-color:#3fbbc0; color:white;" name="email_verify" id="email_verify">Verify</button>
        </div>
      </div>
    </form>
  </div>
</body>
<script type="text/javascript">
  $(function() {
    $('#verify').hide();
    $('#sendmail').show();

    <?php

    $no = rand(10000, 90000);
    $to_email;

    // Sending Mail
    if (isset($_POST['email_send'])) {
      if (isset($_POST['mail'])) {
        $to_email = $_POST['mail'];
        $md_email = md5($to_email);

        $sql = "(SELECT email2 FROM patient WHERE Email = '$md_email') UNION
             (SELECT email2 FROM requested_nurse WHERE email = '$md_email')";

        if (!$con) {
          die('Server Error Please Try Again');
          echo "console.log('connection')";
        }

        $result = mysqli_query($con, $sql);

        if (!$result) {
          die('Query Error Try Again');
          echo "console.log('result error')";
        }

        if (mysqli_num_rows($result) != 0) {
          echo "document.getElementById('error').innerText='This MailId Already exists'";
        } else {
          $subject = "Neighbouring Nurse";
          $body = "Thank You For Enrolling in Neighbouring Nurse as Nurse.\nThis is your verification code $no \n Please fill This code to verify your MailId.  ";
          $headers = "From: ht1872004@gmail.com";

          $_SESSION['no'] = $no;
          $_SESSION['user']['email'] = $to_email;

          if (mail($to_email, $subject, $body, $headers)) {
            echo "$('#verify').show();
                      $('#sendmail').hide();
                      console.log(
                       ";
            mysqli_error($con);
            echo ");";
          } else {
            echo "$('#error').html('Wrong MailId');
                      $('#error').show(); 
                      console.log(
                      ";
            mysqli_error($con);
            echo ");";
          }
        }
      } else {
        echo "document.getElementById('error').innerText='This is required'; $('#error').show();console.log('Fail Last');";
      }
    }

    // Verification
    if (isset($_POST['email_verify'])) {
      if (isset($_POST['code'])) {
        if ($_SESSION['no'] == $_POST['code']) {
          header('location:nurse_re_1.php');
        } else {
          echo "document.getElementById('error').innerText='Wrong Code';$('#error').show(); console.log('Fail $no');$('#sendmail').show();";
          unset($_SESSION['user']['email']);
        }
      } else {
        echo "document.getElementById('error').innerText='This is required';$('#error').show();console.log('Fail Last');";
      }
    }

    ?>

  });
</script>

</html>