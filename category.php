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
	
	$catId = $_GET['cat_id'];
	
	//Empty array, to store product data.
	$products = array();
	$prods =  mysql_query("SELECT * FROM products WHERE catId = '".$catId."'");
	while($product = mysql_fetch_array($prods)){		
		$products[] = $product;
	}	

?>	
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
		<?php include 'menu.php'; ?>		
	</div>
	
	
	<div class="container">
		<div class="page-title">			
		</div>
		<div class="products">
		<?php
		
		//Iterate through the product data. for each product.
			foreach($products as $product => $values){
			$html = "<div class='item'>";
				$html.= "<div class='product-image'>";
					$html.= "<a href='product.php?prodId=".$values['pid']."'><img src='".$values['imgpath']."' alt='".$values['name']."' width='150' height='150' /></a>";
				$html.= "</div>";
				$html.= "<div class='product-price'>";
					$html.= "<a href='product.php?prodId=".$values['pid']."'>".$values['price']."</a>";
				$html.= "</div>";
				$html.= "<div class='product-name'>";
					$html.= "<a href='product.php?prodId=".$values['pid']."'>".$values['name']."</a>";
				$html.= "</div>";
				
			$html.= "</div>";
			echo $html;
	}
		
		
		
		
		
		
		?>	
		
		
		
		
		</div>
	</div>
	
	
	
	</body> 