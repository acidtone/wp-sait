<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Random Number Guesser</title>
</head>

<body>
	<h1>Random Number Guesser</h1>
    <p>You guessed <?php echo $_POST['yournumber']; ?></p>
    <?php
		$random = rand(1,10);
		echo "<p>The random number was $random.</p>"; 
		
		if($_POST['yournumber']==$random){
			echo "<p>WINNER WINNER CHICKEN DINNER!</p>";
		}else{
			echo "<p>You didn't guess the right number. You lost.</p>";
		}
	?>
    <p><a href="index.php" />Guess again?</a></p>
</body>
</html>