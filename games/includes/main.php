<?php
if (isset($_COOKIE['uteVids'])) {
	include 'imIn2016.php';
}

elseif (isset($_COOKIE['uteTubeVids'])) {
	include 'iwannawatch.php';
}

else {
	include 'login/loginfrm.php';
}
?>