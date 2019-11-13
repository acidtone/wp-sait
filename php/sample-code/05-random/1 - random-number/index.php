<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Random Number Guesser</title>
</head>

<body>
	<h1>Random Number Guesser</h1>
    <form method="post" action="game.php">
    	<label for="yournumber">Please select a number from 1-10</label>
        <input type="number" id="yournumber" name="yournumber" maxlength="2" min="1" max="10" required>
        
        <input type="submit" value="Guess">
    </form>
</body>
</html>