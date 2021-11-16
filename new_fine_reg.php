<?php
  include "connection.php";
  include "admin_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Add new fine</title>
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
      height: 650px;
      width: 450px;
      background-color: black;
      margin: 0px auto;
      opacity: .7;
      color: white;
      padding: 25px;
    }

    .reg_img
    {
      height: 800px;
      margin-top: 0px;
      background-image: url("images/2.jpg");
    }
   

/* Style the arrow inside the select element: */


/* Point the arrow upwards when the select box is open (active): */
  



  </style>   
</head>
<body>

<section>

        <script type="text/javascript">
                function addNumbers()
                {
                        var library = parseInt(document.getElementById("library").value);
                        var disciplinary = parseInt(document.getElementById("disciplinary").value);
                        var late = parseInt(document.getElementById("late").value);
                        var past = parseInt(document.getElementById("past").value);
                        var total = document.getElementById("total");
                        total.value = library + disciplinary + late + past;
                }
        </script>
  <div class="reg_img">

    <div class="box2">
       
        <h3 style="text-align: center; font-size: 25px;">Add new fine</h3><br>

      <form name="Registration" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="fid" placeholder="Fine ID" required=""> <br>
          <input class="form-control" type="text" name="roll_no" placeholder="Roll no" required=""> <br>
          <input class="form-control" type="text" id="library" name="library" placeholder="Library fine" required=""> <br>
          <input class="form-control" type="text" id="disciplinary" name="disciplinary" placeholder="Disciplinary fine" required=""> <br>
          <input class="form-control" type="text" id="late" name="late" placeholder="Late Registration fine" required=""> <br>
          <input class="form-control" type="text" id="past" name="past" placeholder="Past fine" required=""> <br>

          <input class="btn btn-default" type="button" name="add" value="Add" style="color: black; width: 70px; height: 30px"  onclick="javascript:addNumbers()"> 
          <br>
          <br>
          <input class="form-control" type="text" name="total" id="total" readonly> <br> 

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
</section>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $count1=0;
        $sql="SELECT roll_no from `fine_information`";
        $sql1="SELECT fid from `fine_information`";
        $res=mysqli_query($db,$sql);
        $res1=mysqli_query($db,$sql1);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['roll_no']==$_POST['roll_no'])
          {
            $count=$count+1;
          }
        }

        while($row=mysqli_fetch_assoc($res1))
        {
          if($row['fid']==$_POST['fid'])
          {
            $count1=$count1+1;
          }
        }
        if($count==0 and $count1==0)
        {

         
          mysqli_query($db,"INSERT INTO `fine_information` VALUES('$_POST[fid]', '$_POST[roll_no]', '$_POST[library]', '$_POST[disciplinary]', '$_POST[late]', '$_POST[past]',    '$_POST[total]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
           window.location.replace("admin_fine_information.php");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
              window.location.replace("admin_fine_information.php");
            </script>
          <?php

        }

      }

    ?>

</body>
</html>