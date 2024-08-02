<?php
	if (isset($_COOKIE['uteVids'])) {
		setcookie('uteVids', null, 1);
		session_destroy();
		echo "<script type='text/javascript'>window.location.assign('index.php');</script>";//http://bobsonlineworld.net/games
	}
	elseif (isset($_COOKIE['uteTubeVids'])) {
		setcookie('uteTubeVids', null, 1);
		session_destroy();
		echo "<script type='text/javascript'>window.location.assign('index.php');</script>";
	}
?>