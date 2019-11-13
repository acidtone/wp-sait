<?php
// Global Navigation
$nav = array(
  'home'  =>  array(
    'label' =>  'Home',
    'link'  =>  'index.php'
  ),
  'services'  =>  array(
    'label' =>  'Services',
    'link'  =>  'services.php'
  ),
  'products'  =>  array(
    'label' =>  'Products',
    'link'  =>  'products.php'
  )
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Adding Machine</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    aside {
      margin-bottom: 50vh;
    }
    
    label {
      display: block;
    }

  </style>
</head>
<body>
  <nav>
    <ul>
<?php

foreach($nav as $key => $value) {
  echo '<li class="'.$key.'"><a href="'.$value['link'].'">'.$value['label']."</a></li>\n";
}

?>
    </ul>
  </nav>
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
    <aside>
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
      <h2>Associative Arrays</h2>
      <pre>
<?php

$fav_vegs = ['potato', 'tomato'];

$user = array(
  'first_name'    => 'Tony',
  'last_name'     => 'Grimes',
  'email'         =>  'acidtone@tonygrimes.com',
  'fav_fruits'    =>  array('apple', 'pear','orange'),
  'fav_vegs'      => $fav_vegs
);

var_dump($user);

?>
      </pre>
      <p>Hello, <?php echo $user['first_name']; ?>! I hear one of your fav fruits is <?php echo $user['fav_fruits'][2]; ?> and a fav veggie is <?php echo $user['fav_vegs'][] = 'french fries'; ?>.</p>
      <pre>
<?php

$user['fav_vegs'][] = 'green bean';
var_dump($user);

?>
      </pre>
      <h2>Conditionals</h2>
<?php

if (count($user['fav_vegs']) == 4) {
  echo "<p>There are 4 veggies.</p>";
} else if (count($user['fav_vegs']) > 4) {
  echo "<p>There are more than 4 veggies.</p>";
} else {
  echo "<p>There are less than 4 veggies.</p>";
}

?>
    </aside>
</main>
</body>
</html>