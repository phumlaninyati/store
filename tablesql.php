<html>
<head>
<title>Creating MySQL Tables</title>
</head>
<body>
<?php
$dbhost = 'db.dcs.aber.ac.uk';
$dbuser = 'fic1';
$dbpass = 'tcbttp4tp';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$sql = "CREATE TABLE users( ".
       "UserID INT (25) NOT NULL AUTO_INCREMENT PRIMARY KEY, ".
       "Username VARCHAR(65) NOT NULL, ".
       "Password VARCHAR(32) NOT NULL, ".
       "EmailAddress VARCHAR (255) NOT NULL ".
       " ) ";
mysql_select_db( 'cs399_13_14_fic1' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
</body>
</html>