<?php
  include "connection.php";
  include "admin_navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>student_information</title>
	<style type="text/css">
		.srch
		{
			padding-left: 900px;
		}
	</style>
</head>
<body>

	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
				<button style="background-color: #6db6b9e6;" type="submit" onclick="window.location.href='new_student_reg.php';" class="btn btn-default">
					<b>Add new student</b>
				</button>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input class="form-control" type="text" name="search" placeholder="Student username.." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>

				
		</form>
	</div>



	<h2>List Of Students</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * FROM `student_information` where username like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Roll no";	echo "</th>";
				echo "<th>"; echo "Name";  echo "</th>";
				echo "<th>"; echo "Address";  echo "</th>";
				echo "<th>"; echo "Gender";  echo "</th>";
				echo "<th>"; echo "Category";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
				echo "<th>"; echo "Program";  echo "</th>";
				echo "<th>"; echo "Mobile no";  echo "</th>";
				echo "<th>"; echo "Email ID";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
				echo "<td>"; echo $row['gender']; echo "</td>";
				echo "<td>"; echo $row['category']; echo "</td>";
				echo "<td>"; echo $row['dept']; echo "</td>";
				echo "<td>"; echo $row['prog']; echo "</td>";
				echo "<td>"; echo $row['mobile']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `student_information`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Roll no";	echo "</th>";
				echo "<th>"; echo "Name";  echo "</th>";
				echo "<th>"; echo "Address";  echo "</th>";
				echo "<th>"; echo "Gender";  echo "</th>";
				echo "<th>"; echo "Category";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
				echo "<th>"; echo "Program";  echo "</th>";
				echo "<th>"; echo "Mobile no";  echo "</th>";
				echo "<th>"; echo "Email ID";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
			echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
				echo "<td>"; echo $row['gender']; echo "</td>";
				echo "<td>"; echo $row['category']; echo "</td>";
				echo "<td>"; echo $row['dept']; echo "</td>";
				echo "<td>"; echo $row['prog']; echo "</td>";
				echo "<td>"; echo $row['mobile']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}

	?>
</body>
</html>


