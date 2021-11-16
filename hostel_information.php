
<?php 
	include "connection.php";
	include "navbar.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Hostel Information</title>
 	<style type="text/css">
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color: white;
 		}
 		footer
	    {
	      height: 100px;
	      width: 1406px;
	      background-color: black;
	    }
 	</style>
 </head>
 <body style="background-color: #369fa8; ">
 	<div class="container">
 		
 		<div class="wrapper">
 			<?php

 				if(isset($_POST['submit1']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="student_update_password.php"
 						</script>
 					<?php
 				}
 				$q=mysqli_query($db,"SELECT * FROM hostel_information where roll_no='$_SESSION[login_user]' ;");
 				if(mysqli_num_rows($q)==0)
 				{
 					?>
			          <h2 style="text-align: center;">Hostel Information</h2>
			            <strong>This student does not occupied any room in hostel.</strong>
			          </div>    
			        <?php
 				}
 				else
 				{




 			?>
 			<h2 style="text-align: center;">Hostel Information</h2>

 			<?php
 				$row=mysqli_fetch_assoc($q);

 			?>
 			<div style="text-align: center;"> <b>Welcome, </b>
	 			<h4>
	 				<?php echo $_SESSION['login_user']; ?>
	 			</h4>
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Hostel ID: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['hid'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b>Room no: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['room_no'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b>Roll no: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['roll_no'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> From: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['form'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> To: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['upto'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b>Is vacate: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['is_vacate'];
	 					echo "</td>";
	 				echo "</tr>";


	 				
 				echo "</table>";
 				echo "</b>";
 			}
 			?>
 		</div>
 	</div>
 	<footer>
      <p style="color:white;  text-align: center; ">
        <br><br>
        Email: xyz_database@gmail.com <br>
        Mobile: +88018********
      </p>
    </footer>

 </body>
 </html>