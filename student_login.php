<?php
include "navbar.php";
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <style type="text/css">
    section
    {
      margin-top: -20px;
    }
    footer
    {
      height: 100px;
      width: 1406px;
      background-color: black;
    }
  </style>   
</head>
      

<body>
 
<section>
  <div class="log_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"></h1><br>
        <h1 style="text-align: center; font-size: 25px;">Student Login</h1>
      <form name="login" action="" method="post">
        <br>
        <div class="login">
          <input class="form-control" type="text" name="roll_no" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
        </div>
      </form>
      
    </div>
  </div>
</section>

    <footer>
      <p style="color:white;  text-align: center; ">
        <br><br>
        Email: xyz_database@gmail.com <br>
        Mobile: +88018********
      </p>
    </footer>




  <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `student_information` WHERE roll_no='$_POST[roll_no]' && password='$_POST[password]';");
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
          <div class="alert alert-danger" style="width: 500px; margin-left: 450px; margin-top: -520px; background-color: #de1313; color: black ; " >
            <strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbspThe username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['roll_no']; 
        ?>
          <script type="text/javascript">
            window.location="student_index.php"
          </script>
        <?php
      }
    }

  ?>




</body>
</html>