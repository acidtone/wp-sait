<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sample Website - <?php echo $pageName; ?></title>
    <link href="styles.css" rel="stylesheet" />
    <meta name="description" content="<?php echo $description; ?>">
	<meta name="author" content="Dan Stephenson">
</head>

<body>
	<div id="wrapper">
    	<header>
	<h1>Sample Website</h1>
    <nav>
    	<ul>
        	<li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
        <main>
        	<h1><?php echo $pageName; ?></h1>