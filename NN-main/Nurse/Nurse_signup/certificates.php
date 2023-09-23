<!DOCTYPE html>
<html>
<?php
include '../../connect.php';

  if(!(isset($_SESSION['user']['terms'])) && !(isset($_SESSION['user']['nurse_re_1']))){
      header('location:conditions.php');
  }
?>

<head>
  <title>Nurse Registration </title>
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
         input{
            color: black;
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
    <form method="post"  enctype="multipart/form-data">
      <div class="banner">
        <h3 style="color:white; padding-bottom: 10%;">Certificate Details</h3>
      </div>
      <p style="color:red; text-align:center;">All Certificates Must be in pdf format </p>
      <br />
      <fieldset id="dynamic_cert">

        <div class="colums">
          <div class="item">
            <label for="certificate">Registered Nurse Certificate<span>*</span><label>
              <input type="file" class="fileToUpload form-control" name="rn" id="" required accept="application/pdf">
          </div>
          <div class="item">
              <button type="button" name="add" id="add" class="btn" style="background-color:#3fbbc0; color:white;">Other Certificates</button>     
          </div>
        </div>   
      </fieldset>

      <div class="btn-block">
        <button type="submit" class="btn" style="background-color:#3fbbc0; color:white;" name="sub_cert">Experience</button>
      </div>
    </form>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
          

$(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  

           $('#dynamic_cert').append('<div class="colums" id="col'+i+'"><div class="item"><input type="text" name="name[]" placeholder="Course Name" class="form-control name_list" required /></div><div class="item"><input type="file" name="filename[]" class="form-control name_list" required accept="application/pdf"/></div> <div class="item"><a type="button" name="remove" id="'+i+'" class="btn btn_remove" style="background-color:#3fbbc0; color:white;">X</a></div></div>');
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#col'+button_id+'').remove();  
      });  
 });  
</script>
 <?php


  if(isset($_POST['sub_cert'])){

    if ($_FILES['rn']['error'] == 0) {

      $fileName = $_FILES['rn']['name'];
      $filearr = explode('.', $fileName);

      if (strtolower(end($filearr)) != "pdf") {
            die("
              <script>
                alert('Wrong RN type');
              </script>
            ");
      }else{
             $n=rand(1000,9999);
            $dest = 'upload/' . $n.$fileName;

            $_SESSION['user']['rn_Cert']=$_FILES['rn'];
            $_SESSION['user']['rn_Cert']['dest']=$dest;
		        move_uploaded_file($_SESSION['user']['rn_Cert']['tmp_name'], $_SESSION['user']['rn_Cert']['dest']);

     
      }

        if(!isset($_POST['name'])){
            header('location:experience.php');
        }else{
           $dests=array();
            for($c=0;$c<count($_POST['name']);$c++){

                 $cert_name=$_POST['name'][$c];
                 $fileName2 = $_FILES['filename']['name'][$c];
                 $filearr2 = explode('.', $fileName2);

                  if (strtolower(end($filearr2)) != "pdf") {
                       die("
                            <script>
                                  alert('Wrong Certificate type');
                            </script>
                          ");
                  }else{
                      $n=rand(100,999);
                      $dest2 = 'upload/' .$n.$fileName2;
                      $_SESSION['user']['cert']['cer_name'][$c]=$cert_name;
                      $_SESSION['user']['cert']['cer_file']=$_FILES['filename'];
                      array_push($dests, $dest2);                 

                      move_uploaded_file($_FILES['filename']['tmp_name'][$c], $dest2);
                     
                  }
                  $_SESSION['user']['cert']['cer_file']['dest']=$dests;
                  header('location:experience.php');
          }
        }

    }
}


?>
</html>
