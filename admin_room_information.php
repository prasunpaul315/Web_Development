<?php
  include "connection.php";
  include "admin_navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>room_information</title>
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
				<button style="background-color: #6db6b9e6;" type="submit" onclick="window.location.href='new_room_reg.php';" class="btn btn-default">
					<b>Allote New room</b>
				</button>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input class="form-control" type="text" name="search" placeholder="Search room no" required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
				
		</form>
	</div>



	<h2>Hostel information</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * FROM `hostel_information` where room_no like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Hostel ID";	echo "</th>";
				echo "<th>"; echo "Room no";  echo "</th>";
				echo "<th>"; echo "Roll no";  echo "</th>";
				echo "<th>"; echo "From(yyyy-mm-dd)";  echo "</th>";
				echo "<th>"; echo "To(yyyy-mm-dd)";  echo "</th>";
				echo "<th>"; echo "Is vacate";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['hid']; echo "</td>";
				echo "<td>"; echo $row['room_no']; echo "</td>";
				echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['form']; echo "</td>";
				echo "<td>"; echo $row['upto']; echo "</td>";
				echo "<td>"; echo $row['is_vacate']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `hostel_information`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Hostel ID";	echo "</th>";
				echo "<th>"; echo "Room no";  echo "</th>";
				echo "<th>"; echo "Roll no";  echo "</th>";
				echo "<th>"; echo "From(yyyy-mm-dd)";  echo "</th>";
				echo "<th>"; echo "To(yyyy-mm-dd)";  echo "</th>";
				echo "<th>"; echo "Is vacate";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
			echo "<td>"; echo $row['hid']; echo "</td>";
				echo "<td>"; echo $row['room_no']; echo "</td>";
				echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['form']; echo "</td>";
				echo "<td>"; echo $row['upto']; echo "</td>";
				echo "<td>"; echo $row['is_vacate']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}

	?>
</body>
</html>


