<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mug Calculator</title>
</head>

<body>
	<h1>NMPD Mug Superstore</h1>
	<form method="post" action="receipt.php">
		<!--Also create a POST version to show the difference-->
    	<label for="fullname">What is your name?</label>
		<input type="text" id="fullname" name="fullname" required />
		<br />
    	<label for="quantity">How many mugs do you wish to purchase?</label>
		<input type="number" id="quantity" name="quantity" required />
        
        <br />
        <input type="submit" value="Place Order" />
    </form>
</body>
</html>