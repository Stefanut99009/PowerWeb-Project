<?php
session_start();

include("classes/connect.php");
include("classes/login.php");
include("classes/user.php");
include("classes/post.php");

$login = new Login();
$user_data = $login->check_login($_SESSION["userid"]);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$post = new Post();
	$id = $_SESSION['userid'];
	$result = $post->create_post($id, $_POST, $filename);

	if ($result == "") {
		header("Location: Profil.php");
		die;
	} else {
		echo "<div style= 'text-align: center; font-size:12px; color:white; background-color:grey>";
		echo "<br> The following erros occured: <br></br>";
		echo $result;
		echo "</div>";
	}
}

//collect posts
$post = new Post();
$id = $_SESSION['userid'];
$posts = $post->get_posts($id);

$user = new User();
$id = $_SESSION['userid'];
$friends = $user->get_friends($id);

// Debug statements
/*echo "User ID: " . $id . "<br>";
echo "User data: " . var_dump($user_data) . "<br>";
if ($user_data !== null) {
	echo "First name: " . $user_data['first_name'] . "<br>";
	echo "Last name: " . $user_data['last_name'] . "<br>";
} else {
	echo "User data is null.<br>";
}*/
?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Profil | PowerSocial</title>
	<link rel="icon" type="image/x-icon" href="Poze/PS-favicon.png">
</head>

<style type="text/css">
	#bar {
		height: 50px;

		background-color: #65d1d4;
		;

		color: black;

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
		margin-top: -400px;
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

	#post_bar {
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
	<div style="width: 800px; margin: auto; min-height: 400px;">

		<div style="background-color: white; text-align: center; color: black;">
			<img src="Poze/back1.png" style="width: 100%; ">

			<?php

			$image = "Poze/back1.png";
			if (file_exists($user_data['cover_image'])) {
				$image = $image_class->get_thumb_cover($user_data['cover_image']);
			}
			?>



			<?php

			$image = "";
			if (file_exists($user_data['profile_image'])) {
				$image = $user_data['profile_image'];
			}
			?>




			<img id="rotund" src="<?php echo $image ?>"><br>

			<a href="Change-profile-image.php" style="text-decoration: none; color:grey;">Change profile picture</a>
			<?php

			echo "<img src='$user_data[cover_image]' style='max-width:500px;' >";

			?>

			<div style="font-size: 22px;">
				<a href="Profil.php" style="text-decoration:none; color: black;">
					<?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?>
				</a>
			</div>
			<br>



			<a href="Timeline.php" style="text-decoration:none; color:black;">
				<div id="menu_but">Timeline</div>
			</a>
			<a href="profile.php" style="text-decoration:none; color:black;">
				<div id="menu_but">About</div>
			</a>
			<a href=" profile.php?section=followers&id=<?php echo $user_data['userid'] ?>" style="text-decoration:none; color:black;">
				<div id="menu_but">Followers</div>
			</a>
			<a href=" profile.php?section=following&id=<?php echo $user_data['userid'] ?>" style="text-decoration:none; color:black;">
				<div id="menu_but">Following</div>
			</a>
			<a href=" profile.php?section=photos&id=<?php echo $user_data['userid'] ?>" style="text-decoration:none; color:black;">
				<div id="menu_but">Photos</div>
			</a>
		</div>
		<!--Continutul paginii jos-->
		<div style=" display: flex;">
			<!--Prieteni-->
			<div id="StangaBox">
				<div id="BaraPrieteni" style="color: black; height: 500px; overflow: auto;">
					Friends <br>
					<?php
					if ($friends) {
						foreach ($friends as $FRIEND_ROW) {
							include("user.php");
						}
					}
					?>
				</div>
			</div>

			<!--Posteaza-->
			<div id="DreaptaBox">
				<div style="border: solid thin #aaa; padding: 10px; background-color: white;">
					<form method="post">
						<textarea name="post" placeholder="What's on your mind?"></textarea> <!--without name this won't be submmted-->
						<input id="Posteaza" type="submit" value="Post">
						<br>
					</form>
				</div>
				<!--Postari 1-->
				<div id="post_bar">


					<?php


					if ($posts) {
						foreach ($posts as $ROW) {
							$user = new User();
							$ROW_USER = $user->get_user($ROW['userid']);

							include("post.php");
						}
					}



					?>


				</div>



			</div>
		</div>

	</div>

</body>


</html>