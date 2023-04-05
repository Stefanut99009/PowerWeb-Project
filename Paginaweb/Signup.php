<?php
include("classes/connect.php");
include("classes/singin.php");
$first_name = "";
$last_name = "";
$gender = "";
$email = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$signup = new Signup();
	$result = $signup->evaluate($_POST);
	if ($result != "") {
		echo "<div style='text-align;font-size:12px;color:white;background-color:grey;'>";
		echo "<br>The following errors occured<br><br>";
		echo $result;
		echo "</div>";
	} else {
		header("Location: Login.php");
		die;
	}
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
}

?>

<html>


<head>
	<title>SignUp | PowerSocial</title>
</head>

<style>
	#SingIn {
		width: 60px;
		text-align: center;
		padding: 4px;
		border-radius: 8px;
		float: right;
		margin-right: 10px;

		background-color: transparent;

	}

	#SingWin {
		background-color: white;
		width: 500px;
		height: 550px;
		margin: auto;
		margin-top: 50px;
		text-align: center;
		padding: 10px;
		padding-top: 30px;
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
	}
</style>
<link rel="icon" type="image/x-icon" href="Poze/PS-favicon.png">

<body style="font-family: tahoma; background-image: url('Poze/background.png');background-repeat: no-repeat;background-size: cover;">


	<div id="SingWin">
		Creeaza cont<br><br>
		<form method="post">
			<input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="Nume"><br><br>
			<input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Prenume"><br><br>
			<span style="font-weight: normal;">Gender:</span><br><br>
			<select id="text" name="gender">
				<option><?php echo $gender ?></option>
				<option>Male</option>
				<option>Female</option>
			</select><br><br>
			<input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email"><br><br>
			<input name="password" type="password" id="text" placeholder="Password"><br><br>
			<input name="password2" type="password" id="text" placeholder="Retype Password"><br><br>

			<input type="submit" id="button" value="Sign Up">



		</form>

	</div>

</body>


</html>