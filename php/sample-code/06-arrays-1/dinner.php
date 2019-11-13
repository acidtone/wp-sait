<?php
	$mainCourse = array('steak','meatloaf','spaghetti','stir fry','casserole','chicken stew','pepperoni pizza','meat lovers pizza');
	$sideDish = array('french fries','mashed potatoes','cobb salad','caesar salad','fruit salad','chicken soup','crackers','potato chips','pizza pops');
	$dessert = array('cupcakes','cookies','an eclair','doughnut','black forrest cake','cheesecake','brownie','truffles','vanilla ice cream');
	
	$mainRandom = mt_rand(0,count($mainCourse)-1);
	$sideRandom = mt_rand(0,count($sideDish)-1);
	$dessertRandom = mt_rand(0,count($dessert)-1);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>What's For Dinner?</title>
</head>

<body>
	<h1>What's For Dinner?</h1>
    <p>Are you indecisive? Do you hate making decisions? Let the computer do it for you!</p>
    <p>A random meal has been generated for you, and is displayed below.</p>
    
    <h2>Tonight for dinner you will have...</h2>
    <?php echo '<p id="dinner"><strong>Tonight for dinner will be '.$mainCourse[$mainRandom].' with '.$sideDish[$sideRandom].' on the side, and '.$dessert[$dessertRandom].' for dessert.</strong></p>'; ?>
    
    <p>Want a different meal? Refresh the page.</p>
</body>
</html>














