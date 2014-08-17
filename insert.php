<?php 
// Your database info 
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'cs399_13_14_fic1';

// POST data
$id = $_POST['id'];
$name = trim($_POST["name"]);

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error)
{
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

$sql = "UPDATE characters SET name = ? WHERE id = ?"; 
if (!$result = $con->prepare($sql))
{
    die('Query failed: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('si', $name, $id))
{
    die('Binding parameters failed: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Execute failed: (' . $result->errno . ') ' . $result->error);
}

$result->close();
$con->close();
echo "Successfully updated";
?>
<a href="index.php">Back to index</a>