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
	
			<?php
				 
				 //get session user data
				 $username = $_SESSION['Username'];
				 $email = $_SESSION['EmailAddress'];
				 
				 //Products data from the form
				 $name = $_POST['name'];
				 $title = $_POST['title'];
				 $description = $_POST['description'];
				 $qty = $_POST['qty'];
				 $price = $_POST['price'];
				 if($_POST['create'] == 'Create'){
					$create = 'Create';
				 }elseif($_POST['create'] == 'Update') {
					$create = 'Update';
				 }else {
					$create = 'Delete';
				 }
				 
				 //$create = $_POST['Create'];
				 
				 //$request = $_REQUEST;
				 //echo "<pre>";
				 //print_r($_REQUEST);
				 
				 //Get User Id to store 
				 $sql =  mysql_query("SELECT UserId FROM users WHERE EmailAddress = '".$email."'");
				 while($userId = mysql_fetch_array($sql)){
					$uId = $userId['UserId'];					
				 }	
				
				if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
				{		
					if(!empty($name) && !empty($qty)){
						try{
						
							 if($create == 'Create'){
								$product = "INSERT INTO products (name, title, description, price, qty) 
											VALUES('".$name."', '".$title."', '".$description."', '".$price."', '".$qty."')";
								$result = mysql_query($product);
								
								if($result){
									$pid  = mysql_insert_id();
									$owner = "INSERT INTO ownership (pid, uid) VALUES ('".$pid."', '".$uId."')";	
									$ownerShip = mysql_query($owner);
									
									if($ownerShip){
										header('Location:productList.php');
									}
								}					 					 
							 }elseif($create = 'Update'){
								
							 }						
						}catch(Exception $e) {
							echo 'Message: ' .$e->getMessage();
						}						
					}										
				}
				
			
			?>
	
	
	</body>
</html>	