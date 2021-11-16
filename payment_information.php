<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>payment_information</title>
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
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input class="form-control" type="date" name="search" required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
				
		</form>
	</div>



	<h2>List Of payments</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT * FROM `payment_information` where roll_no='$_SESSION[login_user]';");
			$p=mysqli_query($db,"SELECT * FROM `payment_information` where date(d-m-Y)=$_POST[search] ;");

			if(mysqli_num_rows($p)==0)
			{
				echo "No payment has done on this specific date.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Payment type";	echo "</th>";
				echo "<th>"; echo "Payment name";  echo "</th>";
				echo "<th>"; echo "Roll no";  echo "</th>";
				echo "<th>"; echo "Date(yyyy-mm-dd)";  echo "</th>";
				echo "<th>"; echo "Amount paid";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['pay_type']; echo "</td>";
				echo "<td>"; echo $row['pay_name']; echo "</td>";
				echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['date']; echo "</td>";
				echo "<td>"; echo $row['amount']; echo "</td>";
				

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT * FROM `payment_information` where roll_no='$_SESSION[login_user]';");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Payment type";	echo "</th>";
				echo "<th>"; echo "Payment name";  echo "</th>";
				echo "<th>"; echo "Roll no";  echo "</th>";
				echo "<th>"; echo "Date(yyyy-mm-dd)";  echo "</th>";
				echo "<th>"; echo "Amount paid";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['pay_type']; echo "</td>";
				echo "<td>"; echo $row['pay_name']; echo "</td>";
				echo "<td>"; echo $row['roll_no']; echo "</td>";
				echo "<td>"; echo $row['date']; echo "</td>";
				echo "<td>"; echo $row['amount']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}

	?>
</body>
</html>


