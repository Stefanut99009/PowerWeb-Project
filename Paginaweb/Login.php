<?php
session_start(); //apeleaza functia din login.php
include("classes/connect.php");
include("classes/login.php");

$email = "";
$password = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') //Post primeste informatii de la user
{
	$login = new Login();
	$result = $login->evaluate($_POST);

	if ($result != "") {
		echo "<div style='text-align:center;font-size:12px;color:white;backgroud-color:grey;'>";
		echo "<br>The following errors occured:<br><br>";
		echo $result;
		echo "<div>";
	} else {
		header("Location: Profil.php");
		die;
	}


	$email = $_POST['email'];
	$password = $_POST['password'];
}


?>


<html>


<head>
	<title>LonIn</title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<style>
	#bara {
		height: 100px;
		background-color: rgb(219, 110, 0);
		color: white;
		padding: 4px;
		background-color: transparent;
	}

	#logWin {
		background-color: white;
		width: 500px;
		height: 380px;
		margin: auto;
		margin-top: 200px;
		text-align: center;
		padding: 10px;
		padding-top: 60px;
		font-weight: bold;
		opacity: 0.90;


	}


	#text {
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa;
		padding: 4px;
		font-size: 14px;
	}

	#button {
		width: 300px;
		height: 40px;
		border-radius: 4px;
		font-weight: bold;
		border: none;
		background-color: #6a55e7;
		color: white;
		margin-top: 30px;
	}
</style>
<link rel="icon" type="image/x-icon" href="Poze/PS-favicon.png">

<body style="font-family: tahoma; background-image: url('Poze/background.png');background-repeat: no-repeat;background-size: cover;">


	<div class="container">
		<div id="logWin">
			<form method="post">
				Conecteaza-te<br><br>
				<input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email"><br><br>
				<input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Password">

				<input type="submit" id="button" value="Log in">


		</div>
	</div>
</body>


</html>