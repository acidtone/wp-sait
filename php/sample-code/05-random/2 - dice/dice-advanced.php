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
		
		#cpu{
			width:50%;
			float:left;
		}
		#player{
			width:48%;
			text-align:right;
			float:right;
			border-left:2px solid white;
		}
		
		#results{
			clear:both;
			float:left;
			width:100%;
			margin-top:1rem;
			padding-top:0.8rem;
			border-top:2px dotted white;
		}
		#results h2{
			margin:0;
		}
	</style>
</head>

<body>
	<div id="main">
		<?php
			$CPURandom1 = rand(1,6);
			$CPURandom2 = rand(1,6);
			$CPUTotal = $CPURandom1+$CPURandom2;
			
			$random1 = rand(1,6);
			$random2 = rand(1,6);
			$total = $random1+$random2;
		?>
		<h1>Roll The Dice</h1>
		<p>The dealer has randomly rolled two pairs of dice...one for itsself, and one for you. If your roll equals the same total as the dealer's roll...you win!</p>
		
		<div id="cpu">
			<h2>The Computer's Roll</h2>
			<img src="images/dice-<?php echo $CPURandom1; ?>.png" alt="Dice" />
			<img src="images/dice-<?php echo $CPURandom2; ?>.png" alt="Dice" />
		</div>
		
		<div id="player">
			<h2>Your Roll</h2>
			<img src="images/dice-<?php echo $random1; ?>.png" alt="Dice" />
			<img src="images/dice-<?php echo $random2; ?>.png" alt="Dice" />
		</div>
		
		<div id="results">
		<h2>Results</h2>
			<?php 
			print "
			<p>The dealer rolled $CPURandom1 and a $CPURandom2 for a total roll value of $CPUTotal.<br />You rolled a $random1 and a $random2 for a total roll value of $total.</p>";
			
			
			if($total > $CPUTotal){
				print "<p>Your total was greater than the computer's! You win!</p>";				
			}else if($total == $CPUTotal){
				print "<p>You tied the computer. You win!</p>";
			}else{
				print "<p>The computer's roll was higher. You lose!";
			}
			
			/*if($random1==$random2){
				print "<p>You rolled doubles!</p>";
			}
			if($total==$CPUTotal){
				print "<p>You and the dealer had the same totals! You Win!</p>";
			}
			else{
				print "<h3>Totals don't match....you didn't win this time!</h3>";
			}*/
			
			?>
		</div>
	</div>
</body>
</html>