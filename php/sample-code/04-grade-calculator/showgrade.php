<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SAIT Grade Calculator</title>
</head>

<body>
<?php
	if(isset($_POST['calculate'])){
		//If the calculate button was pressed on the last screen
		$percentage = ($_POST['grade']/$_POST['total'])*100;
				
		if($percentage<50){
			$letter = "F";	
		}
		else if($percentage<55){
			$letter="D";		
		}
		else if($percentage<60){
			$letter="D+";		
		}
		else if($percentage<63){
			$letter="C-";		
		}
		else if($percentage<67){
			$letter="C";		
		}
		else if($percentage<70){
			$letter="C+";
		}
		else if($percentage<73){
			$letter="B-";
		}
		else if($percentage<77){
			$letter="B";
		}
		else if($percentage<80){
			$letter="B+";
		}
		else if($percentage<85){
			$letter="A-";
		}
		else if($percentage<90){
			$letter="A";
		}
		else if($percentage<=100){
			$letter="A+";
		}
	}?>
    <h2>Your Grade Details</h2>
    	<p>On the assignment that you recently submitted you earned a grade of <?php echo $_POST['grade']; ?> out of a possible <?php echo $_POST['total']; ?> which is <?php echo number_format($percentage,0); ?>%. In SAIT's grading scale that is a letter grade of <strong><?php echo $letter; ?></strong>. </p>
        <p><a href="index.php">Calculate another grade</a></p>
</body>
</html>