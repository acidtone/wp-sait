<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Week 7: Random Numbers</title>
	<style>
		body{
			background-color:#1e5d26;
			font-family:sans-serif;
			color:white;
		}
		#main{
			width:50%;
			margin:0 auto;
		}
	</style>
</head>

<body>
	<div id="main">
		<h1>Roll The Dice</h1>
		<?php
			$random1 = rand(1,6);
			$random2 = rand(1,6);
			$total = $random1+$random2;
		?>
		<img src="images/dice-<?php echo $random1; ?>.png" alt="Dice" />
		<img src="images/dice-<?php echo $random2; ?>.png" alt="Dice" />
		
		<?php 
		print "<p>You rolled a $random1 and a $random2 for a total roll value of $total.</p>";
		
		if($random1==$random2){
			print "<p>You rolled doubles!</p>";
		}
		?>
	</div>
</body>
</html>