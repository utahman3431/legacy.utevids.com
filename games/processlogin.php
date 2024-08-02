<?php
$pass = "utevids";
$youTube = "utetube";

if (isset($_POST['password'])) {
	if ($_POST['password'] == $pass){
		if(isset($_POST['rememberme'])) {
			//sets cookie to 1 year
			setcookie('uteVids', $_POST['password'], time()+60*60*24*365);
			header("Location: index.php");

		}
		else {
			setcookie('uteVids', $_POST['password'], false);
			header("Location: index.php");
		}
	}
	//http://bobsonlineworld.net/games
	elseif ($_POST['password'] == $youTube){
		if(isset($_POST['rememberme'])) {
			//sets cookie to 1 year
			setcookie('uteTubeVids', $_POST['password'], time()+60*60*24*365);
			header("Location: index.php");

		}
		else {
			setcookie('uteTubeVids', $_POST['password'], false);
			header("Location: index.php");
		}
	}
	
	else {
		echo "<script type='text/javascript'>alert('Invalid Password!  Try again.');window.location.assign('http://bobsonlineworld.net/games');</script>";
	}
}
else {
	echo "<script type='text/javascript'>alert('Please enter a password!');window.location.assign('http://bobsonlineworld.net/games');</script>";
}
?>