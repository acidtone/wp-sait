<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Mug Order Calculator</title>
    </head>
	<style>
		*{
			margin:0;
			padding:0;
		}
		body{
			background-color:#5e87e4;
			font-family:'Trebuchet MS';
		}
		div#wrapper{
			margin:0 auto;
			background-color:white;
			border:3px dashed #000;
			width:40%;
			padding:2rem;
			margin-top:1.8rem;
		}
		h1{
			text-align:center;
			margin-bottom:3rem;
		}
		h2{
			margin-bottom:0.8rem;
		}
		p{
			margin-bottom:1rem;
		}
		footer{
			clear:both;
			text-align:center;
			font-style:italic;
		}
	</style>
    <body>
    <?php
        $firstName = "Dan";
		$quantity = 2;
		$mugCost = 5.00;
		$taxRate = 0.05; //5% GST
		
		//Perform Calculations
		$subTotal = $mugCost * $quantity;
		$totalTax = $subTotal * $taxRate;
		$grandTotal = $subTotal + $totalTax;

    ?>
    	<div id="wrapper">
            <h1><?php echo $firstName; ?>'s Mug Superstore</h1>
			<img src="mug.png" alt="SAIT Mug" style="width:301px;height:300px;float:left;margin-right:5px;" />
            <h2>Order Receipt</h2>
            <div id="receipt">
                <p>SAIT Mug - $<?php echo number_format($mugCost,2); ?> (Quantity: <?php echo $quantity; ?>)</p>
                <p>Sub Total: $<?php echo number_format($subTotal,2); ?></p>
                <p>GST: $<?php echo number_format($totalTax,2); ?> (5%)</p>
                <p id="total"><strong>Grand Total: $<?php echo number_format($grandTotal,2); ?></strong></p>
            </div>
			<footer>
				<p>Thank you for your business</p>
			</footer>
        </div>
    </body>
</html>