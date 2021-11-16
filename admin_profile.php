
<?php 
	include "connection.php";
	include "admin_navbar.php";
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
 							window.location="admin_update_password.php"
 						</script>
 					<?php
 				}
 				$q=mysqli_query($db,"SELECT * FROM admin_information where username='$_SESSION[login_user]' ;");
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
	 						echo "<b> First name: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['first_name'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['last_name'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b>Username: </b>";
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
 			<form action="" method="post">
 			<button class="btn btn-default" style="float: right; width: 150px;" name="submit1">Update password</button>
 			</form>

 		</div>
 	</div>
 </body>
 </html>