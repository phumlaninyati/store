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
	
		<div id= "mainbody">
	
	<ul>
	
	<p>If you are viewing this page, it is reasonable to assume that you are having problems with the website or have
		questions about how this website works. This page contains the links to the necessary pages that you would need
		to answer these queries or to allow you to contact us; just click on the link that best matches the problem that you're having:</p>
	
	<strong><a href= "FAQ.php"><p> FAQs</p>
	<p> This page contains answers to questions that have been frequently asked about the website and the way that the website works
	It will be updated with other questions should they become frequently asked and weren't otherwise included in the original page</p>
	
	<strong><a href= "Comments.php"><p> Comments</p>
	<p>If you have a query that is not addressed by the FAQs page, this page provides a form which allows you to submit a comment/complaint
	that will be sent to one of us and will be addressed as promptly as we can</p>
	
	</ul>
	</div>
		
	
		

	</body>
</html>	