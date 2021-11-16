
<?php
  include "connection.php";
  include "admin_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Edit fine</title>
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
      height: 850px;
      width: 400px;
      background-color: black;
      margin: 0px auto;
      opacity: .7;
      color: white;
      padding: 25px;
    }

    .reg_img
    {
      height: 900px;
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
       
        <h3 style="text-align: center; font-size: 25px;">Edit fine</h3>

      <form name="form" action="" method="post">
        
        <div class="login">

          <label><h5><b>Enter Student's Roll no: </b></h5>
          <input class="form-control" type="text" name="roll" id="roll" placeholder="enter roll no">
          </label><br><br>
           <input class="btn btn-default" type="submit" name="submit" value="Check" style="color: black; width: 70px; height: 30px"> 
          <br>
          <br>

          <?php  

          if(isset($_POST['submit']))
          {
            $roll= $_POST['roll'];
          $q=mysqli_query($db,"SELECT * FROM `fine_information` where roll_no like '%$_POST[roll]%' ");
            if(mysqli_num_rows($q)==0)
            {
              echo "This student does not have fine.";
            }

            else
            {
                    while($row=mysqli_fetch_assoc($q))
                    {
                      $fid=$row['fid'];
                      $roll_no=$row['roll_no'];
                      $library=$row['library'];
                      $disciplinary=$row['disciplinary'];
                      $late=$row['late'];
                      $past=$row['past'];
                      $total=$row['total'];
                    } 

                ?>

                  <label><h5><b>Enter Student's Roll no: </b></h5>
                   <input class="form-control" type="text" name="roll_no"  value="<?php echo $roll_no; ?>" >
                  </label>


                  <label><h5><b>Fine ID: </b></h5>
                  <input class="form-control" type="text" name="fid" value="<?php echo $fid; ?>" >
                  </label>

                  <br>

                  


                  <label><h5><b>Library fine: </b></h5>
                  <input class="form-control" type="double" id="library" name="library"  value="<?php echo $library; ?>" required=""> 
                  </label>

                  <br>

                  <label><h5><b>Disciplinary fine: </b></h5>
                  <input class="form-control" type="double" id="disciplinary" name="disciplinary" value="<?php echo $disciplinary; ?>" required=""> 
                  </label>

                  <br>

                  <label><h5><b>Late Registration fine: </b></h5>
                  <input class="form-control" type="double" id="late" name="late" value="<?php echo $late; ?>" required=""> 
                  </label>

                  <br>

                  <label><h5><b>Past fine: </b></h5>
                  <input class="form-control" type="double" id="past" name="past" value="<?php echo $past; ?>" required="" readonly> 
                  </label>

                  <br><br>

                  <input class="btn btn-default" type="button" name="add" value="Add" style="color: black; width: 70px; height: 30px"  onclick="javascript:addNumbers()"> 
                  <br>
                  <br>
                  <input class="form-control" type="double" name="total" id="total" value="<?php echo $total; ?>" readonly> <br> 
                
              <?php 
            }
            ?>

                <input class="btn btn-default" type="submit" name="submit1" value="Sign Up" style="color: black; width: 70px; height: 30px"> 
              </div>
                 </form>
             
            </div>
          </div>
        </section>
        
          <?php

                if(isset($_POST['submit1']))
                {
                  $fid=$_POST['fid'];
                  $roll_no=$_POST['roll_no'];
                  $library=$_POST['library'];
                  $disciplinary=$_POST['disciplinary'];
                  $late=$_POST['late'];
                  $past=$_POST['past'];
                  $total=$_POST['total'];
                
                $sql1= "UPDATE fine_information SET fid='$fid', roll_no='$roll_no', library='$library', disciplinary='$disciplinary', late='$late', past='$past', total='$total' WHERE roll_no=$roll ";

                  if(mysqli_query($db,$sql1))
                  {
                    ?>
                      <script type="text/javascript">
                        alert("Saved Successfully.");
                  //      window.location="admin_fine_information.php";
                      </script>
                    <?php
                  }
                }
              }
              
            ?>

</body>
</html>