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
				 $okext = array(".doc", ".pdf", ".ppt", ".pps", ".xls", ".csv", ".rtf", ".txt", ".htm", ".html", ".jpg", ".gif", ".png");
				 //check for oversize files or empty uploads
				 $thesize = $_FILES['userfile']['size']; 
				 if ( ($thesize > 513024) || ($thesize == 0) ){ 
					$message = "Error... No file, or file too large.";
				 }
				 //read the file from the temp location
					$filename=$_FILES['userfile']['tmp_name'];
					$fd = fopen ($filename, "r");
					$contents = fread ($fd, filesize($filename));
					fclose($fd); 
					
					//set the path for your saving directory
					$respath = "files/"; 
					//check for valid file extension
					$resext = "";
					$extarray = explode(".", $_FILES['userfile']['name']);

					if(count($extarray)>1)
					{
						$extpos = count($extarray)-1;
						$resext = ".".$extarray[$extpos];
					} 
					if (!(in_array($resext, $okext))){ 
						$message = "Error... Invalid filename extension.";
					}
					
					//you can rename the file here if needed
					$resname = $respath.$_FILES['userfile']['name'];
					$resw = fopen($resname, "w");
					fwrite($resw, $contents);
					fclose($resw);
				 
				 
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
				 //print_r($_REQUEST);exit;
				 
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
								$product = "INSERT INTO products (name, title, description, price, qty, imgpath) 
											VALUES('".$name."', '".$title."', '".$description."', '".$price."', '".$qty."', '".$resname."')";
								$result = mysql_query($product);
								
								if($result){
									$pid  = mysql_insert_id();
									$owner = "INSERT INTO ownership (pid, uid) VALUES ('".$pid."', '".$uId."')";	
									$ownerShip = mysql_query($owner);
									
									if($ownerShip){
										header('Location:productList.php');
									}
								}					 					 
							 }else if($create == 'Update'){
								$pid = $_POST['pid'];
								
								$sql = "UPDATE products 
										SET name='".$name."', description='".$description."', price='".$price."', qty='".$qty."', title='".$title."'
										WHERE pid='".$pid."'";
								//echo $sql;exit;		
								$update = mysql_query($sql);								
								if($update){
									//echo "redirect";exit;
									header('Location:productList.php');
								}		
							 }						
						}catch(Exception $e) {
							echo 'Message: ' .$e->getMessage();
						}						
					}										
				}
				
			
			?>
	
	</div>
	</body>
</html>	