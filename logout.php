<?PHP
require_once("./include/membersite_config.php");

$fgmembersite->LogOut();
?>
<maincontainer">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Photo Stack - The place for photo sales</title>
		<meta content='application/xhtml+xml; charset=UTF-8' http-equiv='Content-Type'/>
		<link rel="icon" type="image/png" href="photos/weblogo.png" />
		<link rel="stylesheet" type="text/css" href="css/fic1.css"/>
		
	</head> 
	
	<body>
	
	<?php require "heading.php" ; 
	// ensures that the heading file is printed in the place as designated by the css file *//
	?>
	<div id="menu">
	
			
			<ul>
				<li><a href="">All Image Types</a></li>
				<li><a href="">Technology  </a></li>
				<li><a href="">Rural  </a></li>
				<li><a href="">People  </a></li>
				<li><a href="">Animals</a></li>
				<li><a href="">Sports  </a></li>
				<li><a href="">Business  </a></li>
				<li><a href="">Travel  </a></li>
				<li><a href="">Food  </a></li>
				<li><a href="">Family  </a></li>
				<li><a href="">History  </a></li>
				<li><a href="">Science </a></li>
			</div>

<h2>You have logged out</h2>
<p>
<a href='login.php'>Login Again</a>
</p>

</body>
</html>