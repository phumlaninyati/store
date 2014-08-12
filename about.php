<?php
session_save_path(trim(`echo ~`).'/php_sessions');
session_start(); 
if(isset($_POST['username']))
    $_SESSION['username'] = $_POST['username'];
if (!isset($_SESSION['Basket']))
	$_SESSION['Basket'] = array();
	
if (isset($_POST['refNumber'])) {
	$refNumber = $_POST ['refNumber'] ;
	array_push($_SESSION['Basket'],$refNumber);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Photo Stack - The place for photo sales</title>
		<meta content='application/xhtml+xml; charset=UTF-8' http-equiv='Content-Type'/>
		<link rel="icon" type="image/png" href="css/weblogo.png" />
		<link rel="stylesheet" type="text/css" href="css/fic1.css"/>
		
	</head>
	
	<body>
	
	<?php require "heading.php" ; ?>
		<div id="menu">
	
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="help.php">Help</a></li>
				
			
			<hr />
			</div>
		
		</div>	
		<div id="mainbody">
<h2>About Us</h2>

<p>We at Photo Stack vow to offer a place where people can upload, view and purchase photos. Although it may appear to emulate 
other websites, we endeavour to offer a service that is just as good while also being a different one entirely. We think of ourselves as the
Amazon of photography and while we are not nearly as well known or well established, we strive to offer the best photo selling and
auction service that we can be.</p>
<p>
</p>

<p id="disclaimer">Any information displayed on this page and any
other produced by me, Findlay Cruden (fic1@aber.ac.uk) is done so
under my own responsibility and in no way that of Aberystwyth
University. In the same way, any and all opinions that are
expressed are mine and mine alone. These do not reflect those of
the University.</p>
</div>
</body>
</html>
