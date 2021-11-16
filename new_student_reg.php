<?php
  include "connection.php";
  include "admin_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
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

    .box2
    {
      height: 920px;
      width: 450px;
      background-color: black;
      margin: 0px auto;
      opacity: .7;
      color: white;
      padding: 25px;
    }

    .reg_img
    {
      height: 950px;
      margin-top: 0px;

      background-image: url("images/2.jpg");
    }
   

/* Style the arrow inside the select element: */


/* Point the arrow upwards when the select box is open (active): */




  </style>   
</head>
<body>

<section>
  <div class="reg_img">

    <div class="box2">
       
        <h3 style="text-align: center; font-size: 25px;">Student Registration Form</h3><br>

      <form name="Registration" action="" method="post">
        
        <div class="login">
          <label><h5><b>Roll no: </b></h5>
          <input class="form-control" type="text" name="roll_no" placeholder="Roll no" required="">
          </label>
          <br>
          <label><h5><b>Name: </b></h5>
          <input class="form-control" type="text" name="name" placeholder="Name" required="">
          </label>
          <br>
          <label><h5><b>Address: </b></h5>
          <input class="form-control" type="text" name="address" placeholder="Address" required="">
          </label>
          <br>

    <!--      <input class="form-control" type="text" name="gender" placeholder="Gender" required=""> <br> -->
         
          <label><h5><b>Gender: </b></h5>
                  <div class="custom-select" type="text" id="gender" name="gender" >
                    <td>
                        <select name="gender" style="color: black; width: 100px; height: 30px;">
                            <option  value="Male"  >Male</option>
                            <option  value="Female" >Female</option>
                            <option  value="Other" >Other</option>
                        </select>
                    </td>
                  </div>
            </label>
                <br>
               
          <label><h5><b>Category: </b></h5>
         <div class="custom-select" type="text" name="category" >
          <td>
          <select name="category" style="color: black; width: 100px; height: 30px;">
            <option  value="General" name="General">General</option>
            <option  value="OBC">OBC</option>
            <option  value="SC" >SC</option>
            <option  value="ST">ST</option>
          </select>
          </td>
          </div>
        </label>
          <br>

          <label><h5><b>Department: </b></h5>
           <div class="custom-select" type="text" name="dept">
              <td>
              <select name="dept" style="color: black; width: 100px; height: 30px;">
                <option  value="CSE">CSE</option>
                <option  value="ECE" >ECE</option>
              </select>
              </td>
          </div>
          </label>
          <br>

          <label><h5><b>Program: </b></h5>
           <div class="custom-select" type="text" name="prog" >
              <td>
              <select name="prog" style="color: black; width: 100px; height: 30px;">
                <option  value="B.Tech" >B.Tech</option>
                <option  value="M.Tech">M.Tech</option>
                <option  value="PhD(full-time)" >PhD(full-time)</option>
                <option  value="PhD(part-time)" >PhD(part-time)</option>
              </select>
              </td>
          </div>
          <br>

          <label><h5><b>Mobile no: </b></h5>
          <input class="form-control" type="text" name="mobile" placeholder="Mobile" required="">
          </label>
          <br>
          <label><h5><b>Email ID: </b></h5>
          <input class="form-control" type="text" name="email" placeholder="Email ID" required="">
          </label>
          <br>
          <label><h5><b>Password: </b></h5>
          <input class="form-control" type="password" name="password" placeholder="Password" required="">
          </label>
          <br>
          <br>

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
</section>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT roll_no from `student_information`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['roll_no']==$_POST['roll_no'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {

         
          mysqli_query($db,"INSERT INTO `student_information` VALUES('$_POST[roll_no]', '$_POST[name]', '$_POST[address]', '$_POST[gender]', '$_POST[category]', '$_POST[dept]', '$_POST[prog]',  '$_POST[mobile]',  '$_POST[email]', '$_POST[roll_no]', '$_POST[password]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
           window.location.replace("student_information.php");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
              window.location="student_information.php";
            </script>
          <?php

        }

      }

    ?>

</body>
</html>