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

	//echo "<pre>";
		
	
	
	$html = "";
	$html.="<ul>";
	while ($obj = mysql_fetch_array($items)) {
	//print_r($obj);
	 $catId = $obj['id'];
	 $catName = $obj['catName'];
	$html.="<li><a href='category.php?cat_id=".$catId."' class''>".$catName."</a>";
	}
	//exit;
	$html.="</ul>";
	echo $html;
?>