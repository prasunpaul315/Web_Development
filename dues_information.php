<?php 
	include "connection.php";
	include "navbar.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
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

 				
 				$q=mysqli_query($db,"SELECT * FROM dues_information where roll_no='$_SESSION[login_user]' ;");
 				if(mysqli_num_rows($q)==0)
 				{
 					?>
			          <h2 style="text-align: center;">Hostel Information</h2>
			            <strong>This student does not have any dues.</strong>
			          </div>    
			        <?php
 				}
 				else
 				{
 			?>
 			<h2 style="text-align: center;">Dues Information</h2>

 			<?php
 				$row=mysqli_fetch_assoc($q);

 			?>
 			
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Dues ID: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['did'];
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
	 						echo "<b>Mess dues: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['mess'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Fees dues:</b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['fees'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Other fine dues:: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['fine'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Past dues: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['past'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Total dues: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['total'];
	 					echo "</td>";
	 				echo "</tr>";
			
 				echo "</table>";
 				echo "</b>";
 			?>
 			<form method="post"> 

 			<input class="form-control" type="double" name="amount" placeholder="Enter your amount to pay" required=""><br>
			<input class="btn btn-default" type="submit" name="submit" value="Pay" style="color: black; width: 70px; height: 30px">
			</form>


			 <?php

		      if(isset($_POST['submit']))
		      {
		        
		      	$pending=(double)$row['total'];
		      	$amount=$_POST['amount'];
		      	$remaining=$pending-$amount;
		      	echo $remaining;
		      	if($remaining>=0)
		      	{
		      		
				    if(mysqli_query($db,"UPDATE dues_information SET mess='0', fees='0', fine='0', past='$remaining', total='$remaining' WHERE roll_no='$_SESSION[login_user]' ;"))
					{

						$sql = "SELECT * FROM student_information WHERE roll_no='$_SESSION[login_user]'";
						$result = mysqli_query($db,$sql) or die (mysql_error());
						$row = mysqli_fetch_assoc($result);
						$name=$row['name'];
						$roll_no=$row['roll_no'];
						$current_date = date("Y-m-d");

			mysqli_query($db,"INSERT INTO `payment_information` VALUES('total dues', '$name', '$roll_no', '$current_date', '$amount');");
						?>
							<script type="text/javascript">
		                		alert("Paid Successfully.");
		                		window.location.replace("dues_information.php");
		              		</script> 

						<?php
					}
				}
				else
		        {

		          ?>
		            <script type="text/javascript">
		              alert("Please pay sufficient amount.");
		              window.location.replace("dues_information.php");
		            </script>
		          <?php

		        }


		       }
		   }

    ?>






		</div>
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