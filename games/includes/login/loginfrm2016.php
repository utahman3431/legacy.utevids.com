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
							<tr>
								<td>
									<!-- disabling for now Stay Logged In: <input type="checkbox" name="rememberme" value="1"><br /> -->
								</td>
							</tr>
						</table>
					</center>
				<center><input type="submit" name="submit" value="Login"></center>
				</p>
			</form>
<?php 
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
?>
<!-- Old Visitor Count
			<center><span class="smallTxt">Visitor Number</center><br />
			<center><a href='https://free-hit-counters.net/'>Free-Hit-Counters.net</a><script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=2263368e1d7ff6a71f30ed26ccca9e129fd03200'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/666737/t/5"></script></span></center>
-->			
			</div>
		<!-- **Countdown Clock**
		<br />
			<div class="timerBox fade-in two shadow lower">
			<span class="timerTitle">Time to Kickoff:</span><br />
		<div class="clock" style="margin:2em;"></div>
		
		<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				// Grab the current date
				var currentDate = new Date();

				// Set some date in the future. In this case, it's always Jan 1
				var futureDate  = new Date("September 1, 2016 18:00:00 MDT");

				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

				// Instantiate a coutdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true
				});
			});
		</script>
		</div>
		</div>
		-->