<?php include "base.php"; ?>
<?php
	//require_once("tabs.php");
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
    // let the user access the main page
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    // let the user login
}
else
{
    // display the login form
}
?>

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	if(!empty($_GET['pid']) ) {
		$pid = $_GET['pid'];
		$action = $_GET['act'];
		$editClass = '';
		//echo $pid;exit;
	}else {
		$editClass = 'disabled';
		$pid = "";
	}
	 $productName = "";
	 $productPrice = "";
	 $productDescription = "";
	 $productTitle = "";
	 $productQty = "";
	 $sql =  mysql_query("SELECT * FROM products WHERE pid = '".$pid."'");
	 $num_rows = mysql_num_rows($sql);
	 
	 if($num_rows > 0)
		{
				 while($product = mysql_fetch_array($sql)){
					//$uId = $userId['UserId'];	
					  $productName = $product['name'];
					  $productPrice = $product['price'];
					  $productDescription = $product['description'];
					  $productTitle = $product['title'];
					  $productQty = $product['qty'];
					  $productImage = $product['imgpath'];	
				 }
	 }
	 
     ?>
 
     <h1>Member Area</h1>
     <p Thanks logging in! You are <code><?=$_SESSION['Username']?></code> and your email address is <code><?=$_SESSION['EmailAddress']?></code>.</p>
     
	 <a href= "logout.php"> Log Out</a>
	 
	 <?php //tabs_header(); ?>

	<?php //tabs_start(); ?>	
	<?php //tab( "Photo Upload" ); ?>
	<div class="form product-create">
		<div class="page-title">
			<h3>Create Product</h3>
		</div>
		<div class="form-content">
			<form method="POST" action="createProductList.php" enctype="multipart/form-data">
				<div class="input-box">
					<label for="name">Product Name :</label>
					<input name="name" title="Product Name" value="<?php echo $productName; ?>" />
				</div>
				<div class="input-box">
					<label for="title">Title :</label>
					<input name="title" title="Product Title" value="<?php echo $productTitle; ?>" />				
				</div>				
				<div class="input-box">
					<label for="Description">Product Description :</label>
					<textarea name='description'><?php echo $productDescription; ?></textarea>			
				</div>
				<div class="input-box">
					<label for="Quantity">Quantity :</label>
					<input name="qty" title="" value="<?php echo $productQty; ?>" />				
				</div>
				<div class="input-box">
					<label for="price">Price :</label>
					<input name="price" title="Price" value="<?php echo $productPrice; ?>" />				
				</div>
				<?php if(empty($productImage)) { ?>
				<div class="input-box">
					<label for="price">Product Image :</label>
					<input class="inputform" type="file" name="userfile" />				
				</div>
				<?php }else{ ?>
					<img src="<?php echo $productImage; ?>" alt="<?php echo $productName; ?>" />
				<?php } ?>	
				<!--<div class="input-box">
					<label for=""></label>
					<input name="" title="" />				
				</div>-->
				<div class="button input">
					<input type="hidden" name="pid" value="<?php echo $pid; ?>" />
					<input class="button" type="submit" value="Create" name="create" />
					<input class="button <?php echo $editClass; ?>" type="submit" <?php echo $editClass; ?> value="Update" name="create" />
					<input class="button" type="submit" value="Delete" name="create" />
					<input class="inputform" type="hidden" name="MAX_FILE_SIZE" value="513024">
				</div>	
			</form>
		</div>
	</div>

	
	<?php //tab( "Tab two" ); ?>
	<!--This is the third tab-->
	
	<?php //tab( "Tab three" ); ?>
	<!--This is the third tab-->
	<?php //tabs_end(); ?>
	</div>
	 <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
     
    $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
		
	
		
        $email = $row['EmailAddress'];
         
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
         
        echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
		echo "<script> setTimeout(function(){ window.location.href='index.php';}, 100);</script>";
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
    ?>
     
   <h1>Member Login</h1>
     
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
     
    <form method="post" action="index.php" name="loginform" id="loginform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <input type="submit" name="login" id="login" value="Login" />
    </fieldset>
    </form>
     
   <?php
}
?>
 
</div>
</body>
</html>