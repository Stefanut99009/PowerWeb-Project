<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profil</title>
</head>

<style type="text/css">
	#bar {
		height: 50px;
		background-color: rgb(219, 110, 0);
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
		background-color: rgb(219, 110, 0);
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
	<!--Bara de sus-->
	<div id="bar">
		<div style="width: 800px;margin: auto;font-size: 30px;">
			Catalog &nbsp &nbsp <input type="text" id="search_box" placeholder="Nume elev">
			<img src="./Poze/poza.png" style="width: 50px; float: right; margin-top: 5px;">
			<a href="Logout.php">
				<span style="font-size: 11px; float: right;margin: 10px;color: whitesmoke;">Logout</span>
			</a>
		</div>
	</div>
	<!--Continutul paginii sus-->
	<div style="width: 800px; margin: auto; min-height: 400px; ">


		<!--Continutul paginii jos-->
		<div style="display: flex;">
			<!--Prieteni-->
			<div id="StangaBox">
				<div id="BaraPrieteni" style="color: black">

					<img id="rotund" src="./Poze/profil.png"><br>
					Marry Ana

				</div>

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
							<img id="prieten" src="prieten1.png"><br>
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
							<img id="prieten" src="prieten2.png"><br>
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
							<img id="prieten" src="prieten2.png"><br>
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