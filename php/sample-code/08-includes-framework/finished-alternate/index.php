<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sample Website</title>
    <link href="styles.css" rel="stylesheet" />
</head>

<body>
	<div id="wrapper">
    	<header>
			<h1>Sample Website</h1>
            <nav>
            	<ul>
                	<li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=products">Products</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
        	<?php
				if($_GET['page']=="about"){
					require('pages/about.php'); 
				}
				else if($_GET['page']=="products"){
					require('pages/products.php'); 
				}
				else if($_GET['page']=="contact"){
					require('pages/contact.php'); 
				}
				else{
					//Homepage by default
					require('pages/home.php'); 
				}
			?>
        <footer>
        	<p>Copyright 2016 Dan Stephenson. All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>