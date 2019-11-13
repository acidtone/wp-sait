<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pizza Place Online Ordering</title>
	<style>
		body{
			background-color:orange;
		}
		main{
			background-color:white;
			width:80%;
			margin:0 auto;
			padding:1.2rem;
			border:2px solid black;
		}
		form p{
			font-weight:bold;
		}
	</style>
</head>

<body>
	<?php
		$coupon = "";
		if(isset($_GET["coupon"])){
			$coupon = $_GET['coupon'];
		}
	?>
	<main>
		<img src="logo.png" alt="Logo">
		<h1>Customize Your Pizza</h1>
		<form method="post" action="vieworder.php">
			<p>What size pizza do you want to order?</p>
			<input type="radio" name="size" id="size-small" value="small"><label for="size-small">Small</label>
			<input type="radio" name="size" id="size-medium" value="medium"><label for="size-medium">Medium</label>
			<input type="radio" name="size" id="size-large" value="large"><label for="size-large">Large</label>

			<p>What style of crust do you want?</p>
			<input type="radio" name="crust" id="crust-regular" value="regular"><label for="crust-regular">Regular</label>
			<input type="radio" name="crust" id="crust-thin" value="thin"><label for="crust-thin">Thin</label>
			<input type="radio" name="crust" id="crust-wheat" value="whole wheat"><label for="crust-wheat">Whole Wheat</label>
			<input type="radio" name="crust" id="crust-glutenfree" value="gluten free"><label for="crust=glutenfree">Gluten Free</label>

			<p>What type of cheese do you want?</p>
			<input type="radio" name="cheese" id="cheese-mozzarella" value="mozzarella"><label for="cheese-mozzarella">Mozzarella</label>
			<input type="radio" name="cheese" id="cheese-provolone" value="provolone"><label for="cheese-provolone">Provolone</label>
			<input type="radio" name="cheese" id="cheese-chedder" value="chedder"><label for="cheese-chedder">Chedder</label>
			<input type="radio" name="cheese" id="cheese-blend" value="three cheese blend"><label for="cheese-blend">Three Cheese Blend</label>

			<p>What meat(s) do you want on your pizza?</p>
			<input type="checkbox" name="meat[]" id="meat-pepperoni" value="pepperoni"><label for"meat-pepperoni">Pepperoni</label>
			<input type="checkbox" name="meat[]" id="meat-bacon" value="bacon"><label for"meat-bacon">Bacon</label>
			<input type="checkbox" name="meat[]" id="meat-ham" value="ham"><label for"meat-ham">Ham</label>
			<input type="checkbox" name="meat[]" id="meat-sausage" value="sausage"><label for"meat-sausage">Sausage</label>
			<input type="checkbox" name="meat[]" id="meat-gchicken" value="grilled chicken"><label for"meat-gchicken">Grilled Chicken</label>
			<input type="checkbox" name="meat[]" id="meat-anchovies" value="anchovies"><label for"meat-anchovies">Anchovies</label>

			<p>What other toppings do you want on your pizza?</p>
			<input type="checkbox" name="toppings[]" id="topping-tomatoes" value="tomatoes"><label for="topping-tomatoes">Tomatoes</label>
			<input type="checkbox" name="toppings[]" id="topping-pineapple" value="pieapple"><label for="topping-pineapple">Pineapple</label>
			<input type="checkbox" name="toppings[]" id="topping-mushrooms" value="mushrooms"><label for="topping-mushrooms">Mushrooms</label>
			<input type="checkbox" name="toppings[]" id="topping-olives" value="olives"><label for="topping-olives">Olives</label>
			<input type="checkbox" name="toppings[]" id="topping-onions" value="onions"><label for="topping-onions">Onions</label>
			<input type="checkbox" name="toppings[]" id="topping-peppers" value="peppers"><label for="topping-peppers">Peppers</label>

			<input type="hidden" name="coupon" id="coupon" value="<?php echo $coupon; ?>">
			<br><br>
			<input type="submit" name="orderpizza" id="orderpizza" value="Submit Order">	
		</form>
	</main>
</body>
</html>














