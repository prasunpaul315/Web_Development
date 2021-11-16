<?php
  include "connection.php";
  include "admin_navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>fine_information</title>
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
				<button style="background-color: #6db6b9e6;" type="submit" onclick="window.location.href='new_fine_reg.php';" class="btn btn-default">
					<b>Add new Fine</b>
				</button>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

				<input class="form-control" type="text" name="search" placeholder="Search fine by Roll no" required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
				
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
				
				<br>

				<button style="background-color: #6db6b9e6;" type="submit" class="btn btn-default" onclick="window.location.href='edit_fine_information.php';" ><b> Edit Fine</b>
				</button>
				
				
		</form>
		
		

			

	
		
	</div>



	<h2>List Of Students</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * FROM `fine_information` where roll_no like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Fine ID";	echo "</th>";
				echo "<th>"; echo "Roll no";  echo "</th>";
				echo "<th>"; echo "Library fine";  echo "</th>";
				echo "<th>"; echo "Disciplinary fine";  echo "</th>";
				echo "<th>"; echo "Late Registration fine";  echo "</th>";
				echo "<th>"; echo "Past fine";  echo "</th>";
				echo "<th>"; echo "Amount Payable";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['fid']; echo "</td>";
				echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['library']; echo "</td>";
				echo "<td>"; echo $row['disciplinary']; echo "</td>";
				echo "<td>"; echo $row['late']; echo "</td>";
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
			$res=mysqli_query($db,"SELECT * FROM `fine_information`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Fine ID";	echo "</th>";
				echo "<th>"; echo "Roll no";  echo "</th>";
				echo "<th>"; echo "Library fine";  echo "</th>";
				echo "<th>"; echo "Disciplinary fine";  echo "</th>";
				echo "<th>"; echo "Late Registration fine";  echo "</th>";
				echo "<th>"; echo "Past fine";  echo "</th>";
				echo "<th>"; echo "Amount Payable";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['fid']; echo "</td>";
				echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['library']; echo "</td>";
				echo "<td>"; echo $row['disciplinary']; echo "</td>";
				echo "<td>"; echo $row['late']; echo "</td>";
				echo "<td>"; echo $row['past']; echo "</td>";
				echo "<td>"; echo $row['total']; echo "</td>";


				echo "</tr>";
			}
		echo "</table>";
		}

	?>
</body>
</html>


