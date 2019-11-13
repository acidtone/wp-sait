<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SAIT Grade Calculator</title>
</head>

<body>
	<h1><abbr title="Southern Alberta Institute of Technology">SAIT</abbr> Grade Calculator</h1>
    <p>This tool will take the mark you earned on a recent gradable component and use <abbr title="Southern Alberta Institute of Technology">SAIT</abbr>'s Grading Scale to calculate your letter grade for that assignment.</p>
    <form method="post" action="showgrade.php">
     	<label for="grade">What grade did you receive on this assignment?</label> 
        <input type="number" id="grade" name="grade" min="0" required>
            
        <label for="total">What was this assignment marked out of?</label>
        <input type="number" id="total" name="total" min="0" value="100" required> 

        <input type="submit" value="Calculate My Grade">
   </form>
</body>
</html>