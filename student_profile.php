
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
 		<form action="" method="post">
 			<button class="btn btn-default" style="float: right; width: 70px;" name="submit1">Edit</button>
 		</form>
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
 				$q=mysqli_query($db,"SELECT * FROM student_information where roll_no='$_SESSION[login_user]' ;");
 			?>
 			<h2 style="text-align: center;">My Profile</h2>

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
	 						echo "<b> Roll no: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['roll_no'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b>Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['name'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b>Address: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['address'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Gender: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['gender'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Category: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['category'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Department: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['dept'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Program: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['prog'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Mobile no: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['mobile'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email ID: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Usename: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";

	 				
 				echo "</table>";
 				echo "</b>";
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