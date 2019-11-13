<footer>
	<?php
		if(date('Y')==2015){
			$copyrightDate = date('Y');
		}
		else if(date('Y')>2015){
			$copyrightDate = "2015 - ".date('Y');
		}
	?>
	<p>Copyright <?php echo $copyrightDate; ?> Dan Stephenson. All Rights Reserved.</p>
</footer>