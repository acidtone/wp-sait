<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$mainCourse = array('steak','meatloaf','spaghetti','stir fry','casserole','chicken stew','pepperoni pizza','meat lovers pizza');

$sideDish = array('french fries','mashed potatoes','cobb salad','caesar salad','fruit salad','chicken soup','crackers','potato chips','pizza pops');

$dessert = array('cupcakes','cookies','an eclair','doughnut','black forrest cake','cheesecake','brownie','truffles','vanilla ice cream');

	$mainRandom = mt_rand(0,(count($mainCourse)-1));
	$sideRandom = mt_rand(0,(count($sideDish)-1));
	$dessertRandom = mt_rand(0,(count($dessert)-1));

print "<p>For dinner I will have ".$mainCourse[0]." with a side of ".$sideDish[0]." with ".$dessert[0]." for dessert.</p>";

?>
</body>
</html>

















