<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		STUDENT DATABASE
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 88px;
	}
	.wrapper
	{
		height: 660px;
		width: 1350px;
		/*background-color: red;*/
	}
	header
	{
		height: 100px;
		width: 1386px;
		background-color: black;
		padding: 10px;
	}
	section
	{
		height: 550px;
		width: 1406px;
		background-color: grey;
	}
	footer
	{
		height: 82px;
		width: 1406px;
		background-color: black;
	}
	.logo
	{
		float :left;
		padding-left: 20px;

	}
	.logo img 
	{
		padding-left: 80px;
	}

	li a
	{
		color: white;
		text-decoration: none;
	}
	/*nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	} */

	section .sec_img
	{
		height: 550px;
		margin-top: 0px;
		background-image: url("images/2.jpg");
	}
	.box
	{
		height: 300px;
		width: 450px;
		background-color: #030002;
		margin: 70px auto;
		opacity: .6;
		color: white;
	}


	
</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
		<!--	<img src="images/.jpg"> -->
			<h1 style="color: white;">STUDENT DATABASE</h1>
		</div>

		

			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					<li><a href="admin_login.php">ADMIN-LOGIN</a></li>
					<li><a href="faculty_login.php">FACULTY-LOGIN</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcom to</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">STUDENT DATABASE </h1><br>
				
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