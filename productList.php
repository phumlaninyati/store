<?php include "base.php"; ?>
<?php
	require_once("tabs.php");
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
					
				
				<ul/>
				</div>
			
			</div>	
		<div id="body">
		<?php
			if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
				{
		?>
 
     <h1>Member Area</h1>
     <p Thanks logging in! You are <code><?=$_SESSION['Username']?></code> and your email address is <code><?=$_SESSION['EmailAddress']?></code>.</p>
     
	 <a href= "logout.php"> Log Out</a>
	 <?php } ?>
	 
	 <?php tabs_header(); ?>		
		<?php
		
				 //echo "<pre>";
				 //print_r($_SESSION);exit;
				 
				 				 //get session user data
				 $username = $_SESSION['Username'];
				 $email = $_SESSION['EmailAddress'];
				 $sql =  mysql_query("SELECT UserId FROM users WHERE EmailAddress = '".$email."'");
				 while($userId = mysql_fetch_array($sql)){
					$uId = $userId['UserId'];					
				 }				 
				if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
				{		


				
					$sql =  mysql_query("SELECT * 
										FROM products
										 LEFT JOIN ownership on products.pid = ownership.pid
										 LEFT JOIN users on users.UserID = ownership.pid 
										 WHERE ownership.uid = '".$uId."'");
					

	
					//print_r($sql);exit;
						
					while($products = mysql_fetch_array($sql)){
						$pName = $products['name'];
						$pTitle = $products['title'];
						$pDescription = $products['description'];
						$pPrice = $products['price'];
						$pQty = $products['price'];	
						$pId = $products['pid'];
						//echo $pName;
						
						$productLink = "<a href='index.php?pid=".$pId."&act=edit'>".$pName."</a>";
						 
						echo "<br/>".$productLink."<br/>";		
					}
				  //echo "<pre>";
				 //print_r($_REQUEST);

				 
				 
				}
		?>
		</div>
	</body>
</html>	