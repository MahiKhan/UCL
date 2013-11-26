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
		<li> <a href="dashboard.php#github"> GIT UPDATES </a></li>
	</ul>
	
	</nav> 

	<section id = "intro">
		<h1> About Me </h1>
		
		<article>
			<?php include_once('apiDashboard.php') ?>
			<p> I'm a second year at UCL studying CS, working on a systems project to redesign the UCL Go app. I'm experienced with Java, PHP, and SQL, and enjoy building web applications. </p>
		</article> 
		<br />
		
		<article>  
		<h1> Project </h1>
			<p> Our project is to re-design the UCL Go phone application, as the current system is designed by an external party whom UCL has to license the app from.  </p>
			<p> We'll be using the PhoneGap SDK to develop and application that'll be available on all mobile platforms. </p>
			<p> Our goal is to create a fast application, well designed and available offline.  </p>
		</article>	
	</section> 
	
	
	<section id ="wordpress">
		<h1> Wordpress Updates  </h1>
		<br />
		<iframe width="420" height="315" src="http://numbugs.wordpress.com/" frameborder="0" allowfullscreen></iframe>
	</section>


	<section id ="github">
		<h1> Git Updates </h1>  
  <iframe src="http://nlalonde.github.com/commits-widget/index.html?owner=mahikhan&repo=UCL&limit=6&width=500&height=200" width="502px" height="202px"></iframe>

	</section> 

	<footer>
		File was last modified: 
		<script>
			document.write(document.lastModified);
		</script>
		<?php /*
		$filename = 'dashboard.php';
    	echo "File was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
		 */ ?>
	</footer> 

</body>