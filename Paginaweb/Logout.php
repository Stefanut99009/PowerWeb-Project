<?php

//cand te deloghezi nu poti da back pentru a reveni la profil
session_start();
if(isset($_SESSION['powerweb_userid']))
{
	$_SESSION['powerweb_userid'] = NULL;
	unset($_SESSION['powerweb_userid']);
}


header("Location: Login.php");
die;
