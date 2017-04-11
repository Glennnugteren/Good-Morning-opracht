<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="klok.css">
	<title>KLOK</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		var timeout = setTimeout(reload, 1000);
		function reload(){
			$("#reload").load("index.php #reload", function(){
				timeout = setTimeout(reload, 1000);
			});
		}
	</script>
	<div id="reload">
	<?php 
		date_default_timezone_set("Europe/Amsterdam");
		$hour = date("H");
		$time = date("H : i : s");	
	 if ($hour >= 06 and $hour < 12){
	 		echo "<h1>Good morning!";
		 	echo "<p>het is nu " . $time .  " uur</p>";
		 	echo "<style>body{background-image: url(morning.png);}</style>";
		 }
	 elseif($hour >= 12 and $hour < 18){
	 		echo "<h1>Good afternoon!";
		 	echo "<p>het is nu</p>";	 	
		 	echo "<h1> ". $time . " uur</h1>";
		 	echo "<style>body{background-image: url(afternoon.png);}</style>";
		 }
	 elseif($hour >= 18 and $hour < 00){
	 		echo "<h1>Good evening!";
		 	echo "<p>het is nu</p>";	 	
		 	echo "<h1> ". $time . " uur</h1>"; 
		 	echo "<style>body{background-image: url(evening.png);}</style>";
		 }
	 elseif($hour >= 00 and $hour < 06){
		 	echo "<h1>Good night!";
		 	echo "<p>het is nu</p>";	 	
		 	echo "<h1> ". $time . " uur</h1>";
		 	echo "<style>body{background-image: url(night.png);}</style>";
		 }
	?>
	</div>
</body>
</html>



