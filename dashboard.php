<!DOCTYPE html>
<html lang="en">  <!-- Above Needed? Lets browser now what type of document/html. If not specified, will use 'quirks mode' - a general format to render which might not do it properly--> 
<head>
	<title> Dashboard </title>
	<meta charset="utf-8"> <!-- Use of this? Ensures default encoding, not sure if 100% necessary. HTML5 slides say 100% necessary. Closes UTF-7 security hole. --> 
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="home.js" charset="utf-8"> </script>
</head>

<body>
	<nav class = "navbar"> 
	
	<ul>
		<li id="logo"> DashBoard </li>
		<li> <a href = "dashboard.php#intro">HOME </a></li>
		<li> <a href = "dashboard.php#wordpress"> WORDPRESS </a></li>
		<li> GIT UPDATES</li>
	</ul>
	
	</nav> 

	<div class = "introBackground">
	<section id = "intro">
		<h1> About Me </h1>
		
		<article>
		<?php include_once('apiDashboard.php') ?>
		</article> 
		
		<article> Text from fb. Other BS. Filler. Text from fb. Other BS. Filler. Text from fb. Other BS. Filler. Text from fb. Other BS. Filler.
		<?php // Include api file here ?>
			
		</article>
		<br />		
		
		<h1> Project </h1>
		<article>  
		Inline text 
		</article>	
	</section> 
	</div> 
	
	
	<section id ="wordpress">
		<h1> Updates  </h1>
		<br />
		<iframe width="420" height="315" src="http://numbugs.wordpress.com/" frameborder="0" allowfullscreen></iframe>
	</section>

</section> 


<section id ="github">

</section> 

<section id = "footer">
	<?php
	$filename = 'dashboard.php';
    echo "File was last modified: " . date ("F d Y H:i:s.", filemtime($filename));

	?>
</section> 


</body>