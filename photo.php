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
				
			</ul>
			
			<hr />
			</div>
	
	<div id="photo">
	
<img src="public_html/Project/photos/ch13.jpg" width="560" height="250" title="Church Photo" alt="Church Photo" />
</div>
<div id = "mainbody">
	
	<strong><p>Church in the Sun</p>
	<p>This vibrant photo of a church taken in the farout reaches of the Cotswold hills is by far one of my better photos.
	With it's strong colours and almost perfect composition, I hope that there are many people who share my admiration for
	this kind of photography and have an interest in taking these kinds of photos</p>
	
	
	


		</div>		
		
		<div id="form">
	
		<div id="form">
	
		<form action="../Project/" method = "post">
				<p>Your Name: <br>
				<input type="text" name="name" size="50">
				<br><br>
				Email Address:<br>
				<input type="text" name="email" size="50">
				<br><br>
				Comment:<br>
				<textarea name="comments" rows="8" cols="40"></textarea>
				<br><br>
				<input type="submit" value="Send">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset">
				</form>

				</select>
			</form>
		</div>	
		

	</body>
</html>	