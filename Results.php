<?php
session_save_path(trim(`echo ~`).'/php_sessions');
session_start(); 
if(isset($_POST['username']))
    $_SESSION['username'] = $_POST['username'];
	//creates and maintains the session under the username as designated by the user *//
if (!isset($_SESSION['Basket']))
	$_SESSION['Basket'] = array();
	
if (isset($_POST['refNumber'])) {
	$refNumber = $_POST ['refNumber'] ;
	array_push($_SESSION['Basket'],$refNumber);
	// prints the basket link and allows for entries to be entered into the created array using the add to basket buttons *//
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
	
	<?php require "heading.php" ; 
	// ensures that the heading file is printed in the place as designated by the css file *//
	?>
	<div id="menu">
	
	
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="help.php">Help</a></li>
				
		
		
		
	
		

	</body>
	</div>
	<div id ="body">

<ul>

<a href="photo.php"><img source = "photos/ch13.jpg"</a>
<img src="../Project/photos/baw2.jpg" width="280" height="150"/>
<img src="../Project/photos/clr125.jpg" width="280" height="150"/>
<img src="../Project/photos/pld1.jpg" width="280" height="150"/>
<img src="../Project/photos/ch23.jpg" width="280" height="150"/>
<img src="../Project/photos/ch33.jpg" width="280" height="150"/>
<img src="../Project/photos/meteo15a.jpg" width="280" height="150"/>
<img src="../Project/photos/bridge1a.jpg" width="280" height="150"/>

</ul>
</div>
</html>	



