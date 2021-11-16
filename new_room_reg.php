<?php
  include "connection.php";
  include "admin_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Allote room</title>
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
      height: 670px;
      width: 380px;
      background-color: black;
      margin: 0px auto;
      opacity: .7;
      color: white;
      padding: 25px;
    }

    .reg_img
    {
      height: 830px;
      margin-top: 0px;
      background-image: url("images/2.jpg");
    }
   

  </style>   
</head>
<body>

<section>
  <div class="reg_img">

    <div class="box2">
       
        <h3 style="text-align: center; font-size: 25px;">Allote room</h3><br>

      <form name="Registration" action="" method="post">
        
        <div class="login">
          <label><h5><b>Hostel ID: </b></h5>
          <input class="form-control" type="text" name="hid" placeholder="Hostel ID" required="">
          </label>
          <br>
          <label><h5><b>Room no: </b></h5>
          <input class="form-control" type="text" name="room_no" placeholder="Room no" required="">
          </label>
          <br>
          <label><h5><b>Roll no: </b></h5>
          <input class="form-control" type="text" name="roll_no" placeholder="Roll no" required="">
          </label>
          <br>
          <label><h5><b>From(date): </b></h5>
          <input class="form-control" type="date" name="form" placeholder="From" required="">
          </label>
          <br>
          <label><h5><b>To(date): </b></h5>
          <input class="form-control" type="date" name="upto" placeholder="To" required="">
          </label>
          <br>

          <label><h5><b>Is vacate: </b></h5>
          <div class="custom-select" type="text" name="is_vacate" >
                    <td>
                        <select name="is_vacate" style="color: black; width: 100px; height: 30px;">
                            <option  value="Yes">Yes</option>
                            <option  value="No">No</option>
                        </select>
                    </td>
          </div>
          </label>

      <!--    <label><h5><b>Is vacate: </b></h5>
          <input class="form-control" type="text" name="is_vacate" placeholder="Yes or No" required="">
          </label> -->
          <br><br>
          

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
</section>

    <?php

       if(isset($_POST['submit']))
       {

        $count1=0;$count2=0;$count3=0;
        $sql1="SELECT roll_no from `hostel_information`";
       
        $sql3="SELECT hid from `hostel_information`";
        $res1=mysqli_query($db,$sql1);
      
        $res3=mysqli_query($db,$sql3);

        while($row=mysqli_fetch_assoc($res1))
        {
          if($row['roll_no']==$_POST['roll_no'])
          {
            $count1=$count1+1;
          }
        }
        
        while($row=mysqli_fetch_assoc($res3))
        {
          if($row['hid']==$_POST['hid'])
          {
            $count3=$count3+1;
          }
        }




        if($count1==0 and $count3==0)
        {

          $hid=$_POST['hid'];
          $room_no=$_POST['room_no'];
          $roll_no=$_POST['roll_no'];
          $form=$_POST['form'];
          $form1 = date("Y-m-d", strtotime($form));
          $upto=$_POST['upto'];
          $upto1 = date("Y-m-d", strtotime($upto));
          $is_vacate=$_POST['is_vacate']; 
        
         

          $sql1= "UPDATE `hostel_information` SET hid='$hid', roll_no='$roll_no', form='$form1' , upto='$upto1'  ,is_vacate='$is_vacate' WHERE room_no like '%$_POST[room_no]%' ;"; 

          if(mysqli_query($db,$sql1))
          {
            ?>
              <script type="text/javascript">
                alert("Saved Successfully.");
                window.location="admin_room_information.php";
              </script>
            <?php
          }   
        }

        else
        {

          ?>
            <script type="text/javascript">
              alert("Sorry, this room cat't be allocate.");
              window.location="admin_room_information.php";
            </script>
          <?php

        }

        

       }

    ?>

</body>
</html>