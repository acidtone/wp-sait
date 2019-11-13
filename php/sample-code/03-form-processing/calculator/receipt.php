<?php
	$cost = 5.25;
	$taxRate = 0.05; //5% Tax
	$subTotal = $cost*$_POST['quantity'];
	$tax = $subTotal * $taxRate;
	$total = $subTotal+$tax;
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Your Receipt</title>
</head>

<body>
	<h1>NMPD Mug Superstore</h1>
    <h2>Receipt For <?php echo $_POST['fullname']; ?></h2>
    <p>Unit Cost: $<?php echo $cost; ?></p>
    <p>Quantity: <?php echo $_POST['quantity']; ?></p>
    <p>Sub Total: $<?php echo number_format($subTotal,2); ?></p>
    <p>Tax: $<?php echo number_format($tax,2); ?> (5% GST)</p>
    <p><strong>Total: $<?php echo number_format($total,2); ?></strong></p>
    
    <p>Thank You For Your Order <?php echo $_POST['fullname'];?>!</p>
    
    <p><a href="index.php">Place a new order</a></p>
</body>
</html>