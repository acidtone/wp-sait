<?php
	$firstName = "Dan";
	$hometown = "Calgary";
	$colour = "red";
	$TVShow = "Gotham";
	$favouriteFood = "pizza";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Week 3 Tutorial - My Biography</title>
    <style>
		body{
			font-family:Verdana, Arial, Helvetica,sans-serif;
		}
		div#bio{
			margin:1rem;
		}
	</style>
</head>

<body>
	<div id="bio">
        <h1>About Me</h1>
        <p>Hello my name is <?php echo $firstName; ?>. I was born in <?php echo $hometown; ?>. Today I am a New Media Production and Design Student at <a href="http://www.sait.ca">SAIT</a> in Calgary, Alberta, Canada.</p>
		<p>My favourite colour is <?php echo $colour ?> and I love to eat <?php echo $favouriteFood; ?>.</p>
        <p>When I am not working hard in class I like to watch <?php echo $TVShow;?> on TV.</p>
    </div>
</body>
</html>