<!DOCTYPE html>
<html>
<head>
	<title>GRADE CALCULATIONS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<h1  style="text-align: center; color: blue;">GRADE CALCULATOR</h1>
<body style="text-align: center; background-image: url(2.jpg); ; text-align: center;color:darkblue;">
	<div class="container" style="padding-left: 25%; padding-right: 0%;">
		
	<form method="_GET" class="well well-lg">
		Maths:<br>
		<input class="form-control" type="text" name="mao" placeholder="Enter  score" required="">
		<br>
		English:<br>
		<input class="form-control" type="text" name="ngoso" placeholder="Enter score" required="">
		<br>
		Physics:<br>
		<input class="form-control" type="text" name="phyc" placeholder="Enter  score" required="">
		<br>
		Chemistry:<br>
		<input class="form-control" type="text" name="chem" placeholder="Enter  score" required="">
		<br>
		Geography:<br>
		<input class="form-control" type="text" name="geog" placeholder="Enter  score" required="">
		<br>
		Computer:<br>
		<input class="form-control" type="text" name="comp" placeholder="Enter  score" required="">
		<br>
<br>
<br>
<button class="btn-success" type="submit">SUBMIT</button>
<button class="btn-danger" type="reset">RESET</button>
<?php 
$Maths=$_GET['mao'];
$English=$_GET['ngoso'];
$Physics=$_GET['phyc'];
$Chemistry=$_GET['chem'];
$Geography=$_GET['geog'];
$Computer=$_GET['comp'];

$total=$Maths+$English+$Physics+$Chemistry+$Geography+$Computer;
$meanscore=$total/6;

if (isset($_GET['grade']))	 {
	# code...

	$grade=$_GET['grade'];
} 

if ($meanscore>=90) {
 	# code...
 	echo "<strong>You scored grade A</strong>";

 } 
elseif ($meanscore>=80) {
	# code...
	echo " <strong>You scored grade A-</strong>";
}

elseif ($meanscore>=70) {
	# code...
	echo "<strong>You Scored grade B+</strong>";

}

elseif($meanscore>=60) {
	# code...
	echo "<strong>You scored grade B</strong>";

}

elseif($meanscore>=50) {
	# code...

	echo "<strong> You scored grade B-</strong>";

}

elseif ($meanscore>=40) {
	# code...
	echo "<strong>You scored grade C</strong>";
}



 else {

 	# code...
 	echo "Your better than this. Never stop trying";

 }

 ?>
	</form>
</div>
</body>
</html>