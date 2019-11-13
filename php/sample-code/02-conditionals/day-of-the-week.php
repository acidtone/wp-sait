<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dan's Cafe Specials</title>
</head>

<body>
	<h1>Dan's Cafe - Daily Specials</h1>
	<p>
    <?php
		$day = "Thursday";
		//$day = date("l");
		
		if($day=="Sunday"){
			echo "All day breakfast - $6.";
		}
		else if($day=="Monday"){
			echo "All appetizers - 50% off.";
		}
		else if($day=="Tuesday"){
			echo "Spaghetti and meatballs - $8.";
		}
		else if($day=="Wednesday"){
			echo "Chicken wings - $2.50/pound (35 flavours).";
		}
		else if($day=="Thursday"){
			echo "8oz Steak sandwich - $10.";
		}
		else if($day=="Friday"){
			echo "Deluxe burger & fries - $14.";
		}
		else if($day=="Saturday"){
			echo "12 inch pizza - $18 (up to 3 toppings).";
		}
	?>
    </p>
</body>
</html>