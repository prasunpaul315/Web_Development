<?php
  include "connection.php";
  include "admin_navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>dues_information</title>
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
				<button style="background-color: #6db6b9e6;" type="submit" onclick="window.location.href='new_dues_reg.php';" class="btn btn-default">
					<b>Add new Fine</b>
				</button>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input class="form-control" type="text" name="search" placeholder="Student Roll no" required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
				
		</form>
	</div>



	<h2>List Of Students</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * FROM `dues_information` where roll_no like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Dues ID";	echo "</th>";
				echo "<th>"; echo "Roll no";  echo "</th>";
				echo "<th>"; echo "Mess dues";  echo "</th>";
				echo "<th>"; echo "Fees due";  echo "</th>";
				echo "<th>"; echo "Fine due";  echo "</th>";
				echo "<th>"; echo "Past due";  echo "</th>";
				echo "<th>"; echo "Amount Payable";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['did']; echo "</td>";
				echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['mess']; echo "</td>";
				echo "<td>"; echo $row['fees']; echo "</td>";
				echo "<td>"; echo $row['fine']; echo "</td>";
				echo "<td>"; echo $row['past']; echo "</td>";
				echo "<td>"; echo $row['total']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `dues_information`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Dues ID";	echo "</th>";
				echo "<th>"; echo "Roll no";  echo "</th>";
				echo "<th>"; echo "Mess dues";  echo "</th>";
				echo "<th>"; echo "Fees due";  echo "</th>";
				echo "<th>"; echo "Fine due";  echo "</th>";
				echo "<th>"; echo "Past due";  echo "</th>";
				echo "<th>"; echo "Amount Payable";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['did']; echo "</td>";
				echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['mess']; echo "</td>";
				echo "<td>"; echo $row['fees']; echo "</td>";
				echo "<td>"; echo $row['fine']; echo "</td>";
				echo "<td>"; echo $row['past']; echo "</td>";
				echo "<td>"; echo $row['total']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}

	?>
</body>
</html>


