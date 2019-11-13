<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Adding Machine</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    main {
      margin-bottom: 25vh;
    }
    
    label {
      display: block;
    }

  </style>
</head>
<body>
  <main>
    <header>
      <h1>Adding Machine</h1>
    </header>
    <p><?php echo 'Hello World'; ?></p>
    <form action="calculate.php" method="post">
      <p><label for="a">First Operand: </label><input id="a" name="a" type="number"></p>
      <p><label for="b">Second Operand: </label><input id="b" name="b" type="number"></p>
      <p><input type="submit" name="submit" value="Calculate"></p>
    </form>
    <h2>Coersion</h2>
      <pre>
<?php

$a = 'One';
$b =  2;

// concatenate two strings
echo $a.$b;
echo $a.$b."\n";
echo "$a.$b.\n";
echo '$a.$b.\n';


?>
      </pre>
    <h2>Indexed Arrays</h2>
    <pre>
<?php
// don't use camelcase
$list_of_fruit = array('apple', 'pear','orange',7);
$list_of_veg = ['potato', 'tomato',3];

// won't work
// echo $list_of_fruit; 

var_dump($list_of_fruit);
print_r($list_of_veg);

// Stops the script immediatly
// die('Just died');
?>
    </pre>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>

</main>
</body>
</html>