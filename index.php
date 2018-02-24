<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid" style="background-color: green;">
		<div class="well well-lg" style="background-color: #406060;">
			<div style="text-align: center; color: white;"><h1><img src="1.jpg" width="100px;">GriffinDoor High School</h1></div>

		</div>
		<div  style="column-count: 2" style="border: double;">
			
			<div class="jumbotron" style="border: double; ">
				<h2 style="color: red;">Our Vision</h2>
				<p>
				To transpire in knowledge inflict and nurture the future generation.</p>	
			</div>
			<div class="jumbotron" style="border: double;"> 
				<h2 style="color: red;">Our Mission</h2>
				<p>To expose hidden meaning in indiiduals creating future brainers in the society</p>
			</div>
		</div>
		<div class="jumbotron" style="border: double; ">
				<h2 style="color: red;">Our Motto</h2>
				<p>We are the outcome of our choices</p>	
			</div>
		<br>
		<div style="margin-left: 1%; margin-right: 1%; background-color: white; text-align: center; ">
			<h2><b>LogIn Form</b></h2>
			<form method="POST" action="grades.php">
			Student:
			<input type="text" name="name" required="" placeholder="First Name">
			<input type="text" name="name2" required="" placeholder="Second Name"><br>
			Admission Number:
			<input type="text" name="admission number" required=""><br>
			<br>
			Password:
			<input type="password" name="password" required=""><br>
			<br>
			<a href="grades.php"><input type="submit" name="submit" class="btn btn-success"></a>
			<input type="reset" name="reset" class="btn btn-danger">
			</form>
			<br>
			<br>
		</div>
	</div>
</body>
</html>