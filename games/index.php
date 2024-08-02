<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/css3.css">
		<link rel="stylesheet" type="text/css" href="css/style2016.css">
		<link rel="stylesheet" href="css/flipclock.css">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<script src="js/js.js"></script>
		<script src="js/flipclock.js"></script>
		<meta property="og:url" content="https://uofu.bobsonlineworld.net" />
		<meta property="og:site_name" content="The Ute Football Video Archive" />
		<meta property="og:image" content="https://uofu.bobsonlineworld.net/images/UteFBIcon.png" />
		<meta property="og:description" content="An ever-increasing archive of Utah football games!" />
	</head>
	<body>
		<div>
		
			<div class="loginBox fade-in one shadow">
			
			<form name="frmLogin" method="post" action="processlogin2016.php">
				<p>
					<center>
						<table class="loginstyle">
							<tr>
								<td>
									Password: <input type="password" name="password" class="pwBox"><br />
								</td>
							</tr>
						</table>
					</center>
				<center><input type="submit" name="submit" value="Login"></center>
				</p>
			</form>
<?php /*
$handle = fopen("counter.txt", "r");
if(!$handle){
 echo "could not open the file" ;
}
else {
	$counter = ( int ) fread ($handle,20) ;
	fclose ($handle) ;
	$counter++ ;
	echo "You are visitor no ".  $counter;
$handle =  fopen("counter.txt", "w" ) ;
fwrite($handle,$counter) ;
fclose ($handle) ;
	}
*/?>
	</body>
	
</html>