<?php
include "admin_navbar.php";
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	 <title>Student Database</title>
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
      height: 120px;
      width: 1406px;
      background-color: black;
    }


    section .sec_img
    {
      height: 550px;
      margin-top: 0px;
      background-image: url("images/2.jpg");
    }
    .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
  
  </style>   
</head>


<body>
	<div class="wrapper">
		
		<section>
		<div class="sec_img">
			<br><br><br>
			
				<div class="container">

					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<button class="button" style="vertical-align:middle" onclick="window.location.href='student_information.php';" ><span>Student Information </span></button>
				
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<button class="button" style="vertical-align:middle" onclick="window.location.href='admin_room_information.php';" ><span>Hostel Information </span></button>


				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<button class="button" style="vertical-align:middle" onclick="window.location.href='admin_fine_information.php';"><span>Other Fine Information </span></button>

				<br><br><br><br>

				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<button class="button" style="vertical-align:middle" onclick="window.location.href='admin_dues_information.php';"><span>Dues Information </span></button>


				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<button class="button" style="vertical-align:middle" onclick="window.location.href='admin_payment_information.php';"><span>Payment Information </span></button>


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
	</div>
</body>

</html>