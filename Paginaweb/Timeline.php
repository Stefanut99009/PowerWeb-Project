<?php
session_start();

include("classes/connect.php");
include("classes/login.php");
include("classes/user.php");
include("classes/post.php");

$login = new Login();
$user_data = $login->check_login($_SESSION['userid']);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Timeline | PowerSocial</title>
	<link rel="icon" type="image/x-icon" href="Poze/PS-favicon.png">
</head>

<style type="text/css">
	#bar {
		height: 50px;

		background-color: #65d1d4;


		color: white;

	}

	#search_box {
		width: 400px;
		height: 20px;
		border-radius: 4px;
		border: none;
		padding: 4px;
		font-size: 14px;
		background-image: url(lupa.png);
		background-repeat: no-repeat;
		background-position: right;

	}

	#rotund {
		width: 150px;
		border-radius: 50%;
		border: solid 2px whitesmoke;

	}

	#menu_but {

		width: 90px;
		display: inline-block;
		margin: 2px;
	}

	#StangaBox {

		min-height: 400px;
		flex: 1;
	}

	#DreaptaBox {

		min-height: 400px;
		flex: 2.5;
		padding: 20px;
		padding-right: 0px;
	}

	#prieten {
		width: 75px;
		float: left;
		margin: 8px;
	}

	#BaraPrieteni {
		background-color: white;
		min-height: 400px;
		margin-top: 20px;
		padding: 8px;
		text-align: center;
		font-size: 20px;

	}

	#Prieteni {
		clear: both;
		font-size: 12px;
		font-weight: bold;

	}

	textarea {
		width: 100%;
		border: none;
		font-family: tahoma;
		height: 60px;
		font-size: 14px;
	}

	#Posteaza {
		float: right;
		background-color: #2e5959;
		border: none;
		color: white;
		padding: 4px;
		font-size: 14px;
		border-radius: 2px;
		width: 50px;
		padding-right: 10px;
	}

	#PostBox {
		margin-top: 20px;
		background-color: white;
		padding: 10px;
	}

	#PostUser {
		font-size: 13px;
		display: flex;
		padding: 14px;
		margin-bottom: 20px;
	}
</style>

<body style="font-family: tahoma; background-color: #d0d8e4;">

	<?php
	include("Header.php");
	?>


	<!--Continutul paginii sus-->
	<div style="width: 800px; margin: auto; min-height: 400px; ">


		<!--Continutul paginii jos-->
		<div style="display: flex;">
			<!--Prieteni-->
			<div id="StangaBox">
				<div id="BaraPrieteni" style="color: black">


					<?php

					$image = "";
					if (file_exists($user_data['profile_image'])) {
						$image = $user_data['profile_image'];
					}
					?>
					<img id="rotund" src="<?php echo $image ?>"><br>
					<a href="Profil.php" style="text-decoration:none; color:black;">
						<?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?>
					</a>

				</div>
				<br>
			</div>
			<!--Posteaza-->
			<div id="DreaptaBox">
				<div style="border: solid thin #aaa; padding: 10px; background-color: white;">
					<textarea placeholder="La ce te gandesti?"></textarea>
					<input id="Posteaza" type="submit" name="Submit">
					<br>
				</div>
				<!--Postari 1-->
				<div id="PostBox">
					<div id="PostUser">
						<div id="PostImage">
							<img id="prieten" src="Poze/prieten1.png"><br>
						</div>
						<div id="PostComent">
							<div style="font-weight: bold;color: green;">Firest Guy</div>
							Tehnicile și metodele Wikipediei sunt folosite de unele companii intern la colecționarea și oferirea de informații și documentații propriilor angajați. Conform principiilor Wiki informațiile pot fi plasate pe serverul Wiki chiar de către angajații implicați în diversele procese ale întreprinderii. Acest gen de proiecte interne se numesc
							<br><br>
							<a href="">Link</a> . <a href="">Comment</a> . <span style="color:#999;">April 23 2020</span>
						</div>

					</div>
					<!--Postari 2-->
					<div id="PostUser">
						<div id="PostImage">
							<img id="prieten" src="Poze/prieten2.png"><br>
						</div>
						<div id="PostComent">
							<div style="font-weight: bold;color: green;">Firest Guy</div>
							Tehnicile și metodele Wikipediei sunt folosite de unele companii intern la colecționarea și oferirea de informații și documentații propriilor angajați. Conform principiilor Wiki informațiile pot fi plasate pe serverul Wiki chiar de către angajații implicați în diversele procese ale întreprinderii. Acest gen de proiecte interne se numesc
							<br><br>
							<a href="">Link</a> . <a href="">Comment</a> . <span style="color:#999;">April 23 2020</span>
						</div>
						<!--Postari 3-->
					</div>

					<div id="PostUser">
						<div id="PostImage">
							<img id="prieten" src="Poze/prieten3.png"><br>
						</div>
						<div id="PostComent">
							<div style="font-weight: bold;color: green;">Firest Guy</div>
							Tehnicile și metodele Wikipediei sunt folosite de unele companii intern la colecționarea și oferirea de informații și documentații propriilor angajați. Conform principiilor Wiki informațiile pot fi plasate pe serverul Wiki chiar de către angajații implicați în diversele procese ale întreprinderii. Acest gen de proiecte interne se numesc
							<br><br>
							<a href="">Link</a> . <a href="">Comment</a> . <span style="color:#999;">April 23 2020</span>
						</div>

					</div>
				</div>



			</div>
		</div>

	</div>

</body>

</html>