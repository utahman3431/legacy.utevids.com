<?php
$tName = $_GET["f"];

header('Content-disposition: attachment; filename=' . $tName . '.torrent');
header('Content-type: application/octet-stream');
readfile('https://uofu.bobsonlineworld.net/tor/' . $tName . '.torrent');
?>