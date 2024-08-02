<?php
$pass = "utevids";
$returnHome = "https://legacy.utevids.com";
$cookie_name = "uteVids";
$cookie_value = $_POST['password'];
$cookie_expire_1yr = time()+60*60*24*365;
$cookie_path = "/";
$cookie_secure = "false";


if (isset($_POST['password'])) {
	if ($_POST['password'] == $pass){
		setcookie('uteVids', $_POST['password'], 0,"/","utevids.com",false,true);
		header("Location: index2.php");
	}
	else {
		echo "<script type='text/javascript'>alert('Invalid Password!  Try again.');window.location.assign('" & returnHome & "');</script>";
	}
}
else {
	echo "<script type='text/javascript'>alert('Please enter a password!');window.location.assign('" & returnHome & "');</script>";
}
?>