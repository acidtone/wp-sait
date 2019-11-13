<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Introduction to Arrays</title>
</head>

<body>
	<h1>Arrays</h1>
    <?php
	
		//Building and sorting arrays
		$buildings = array('Clayton Carroll Automotive Centre','Aldred Centre','John Ware Building','E.H. Crandell Building','Cenovus Energy Centre','Johnson-Cobbe Energy Centre','Stan Grad Centre','Heritage Hall','Senator Burns Building','Eugene Coste Building','Thomas Riley Building','Campus Centre');
		//array_push($buildings,'East Hall Residence');
		
		print_r($buildings);
		//sort($buildings);
		//rsort($buildings);
		echo "<br /><br />";
		print_r($buildings);
		
		echo "<p>The first building is ".$buildings[0].".</p>";
		
		//Create an array of the letters in the alphabet
		echo "<br /><br /><br /><br />";
		$alphabet = range('a','z');
		print_r($alphabet);
		
		//Specials
		$specials = array(
			'Monday' => 'Half Priced Burgers',
			'Tuesday' => 'Spaghetti and Meatballs',
			'Wednesday' => 'Chicken Wings',
			'Thursday' => 'All Day Breakfast',
			'Friday' => 'Steak Sandwich',
			'Saturday' => 'Clubhouse Sandwich',
			'Sunday' => 'Half Priced Appetizers',
		);
		
		print_r ($specials);
		
		echo $specials["Monday"];
		
		echo "<p>Today's Special Is ".$specials[date('l')]."</p>";
	?>	
</body>
</html>