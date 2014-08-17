<?php
	//include_once 'db.php';
	
	$dbhost = "localhost"; 
	$dbname = "aaron"; 
	$dbuser = "root"; 
	$dbpass = "admin123"; 
 
	mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
	mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
	
	$sql = "SELECT id, catName FROM categories";
	$items = mysql_query($sql);
	
	//Product Id posted from the cat page.
	$prodId = $_GET['prodId'];
	
	//Get Peoduct with the id of the product that was clicked
	$prods =  mysql_query("SELECT * FROM products WHERE pid = '".$prodId."'");
	
	
	while($product = mysql_fetch_array($prods)){		
		$productTitle = $product['name'];
		$productPrice = $product['price'];
		$productDescrption = $product['description'];
		$productImg = $product['imgpath'];
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

	
	<?php require "heading.php" ; ?>
		<div id = "product">
		<img src="<?php echo $productImg; ?>" alt="placeholder image" width="335" height="500" />
		</div>
		<div id="menu">	
			<?php include 'menu.php'; ?>		
		</div>
		
			
	
		<div id="mainbody">

		<h2><?php echo $productTitle; ?></h2>

<p><?php echo $productDescrption; ?></p>
</div>
<div id = "container06">
<span class="price"><?php echo $productPrice; ?></span>
</div>
<div id = "container09">

<img src="css/quantity.png" alt="placeholder image">
</div>
<div id = "container07">
<img src="css/buy.png" alt="placeholder image">



</div>
<div id = "container07">
<img src="css/comments.png" alt="placeholder image">
</div>

</div>
</div>
<?php require "footer.php" ; 
	// ensures that the footer file is printed in the place as designated by the css file *//
	?>

</body>

</div>

</html>
