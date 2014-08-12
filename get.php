<?php
mysql_connect("localhost,", "root", "") or die(mysql_error());
mysql_select_db ("cs399_13_14_fic1")or die(mysql_error());

$id = addslashes ($_REQUEST['id']);

$image = mysql_query("SELECT * FROM store WHERE id=$id");
$image = mysql_fetch_assoc($image);
$image = $image['image'];

header("Content-type: image/jpeg");
 
echo $image;



?>

can you send me your upload_filephp and your get.php , i'll fix it locally 
sure