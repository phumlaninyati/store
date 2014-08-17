<?php include "base.php"; ?>
<?php
	require_once("tabs.php");
?>
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
<div id="maincontainer">
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
			


	
		<div id= "mainbody4">
	
	<div class="tabGroup">
    <input type="radio" name="tabGroup1" id="rad1" class="tab1" checked="checked"/>
    <label for="rad1">Tab 1</label>
 
    <input type="radio" name="tabGroup1" id="rad2" class="tab2"/>
    <label for="rad2">Tab 2</label>
     
    <input type="radio" name="tabGroup1" id="rad3" class="tab3"/>
    <label for="rad3">Tab 3</label>
     
    <br/>
 
    <div class="tab1"><div class="form product-create">
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
				</div>
				</div>
			</form>
		</div>
    <div class="tab2">Change your details</div>
    <div class="tab3">Update your Public User profile</div>
</div>

	</div>
	</div>
	</div>
</div>
<?php require "footer.php" ; 
	// ensures that the footer file is printed in the place as designated by the css file *//
	?>

</body>

</div>

</html>