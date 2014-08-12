<html> 
    <body> 
        <?php 
        $db = pg_connect("host=localhost dbname=aaron user=root password=admin123");

        $username = pg_escape_string($_POST['username']);
        $password = pg_escape_string($_POST['password']);
        $emailaddress = pg_escape_string($_POST['emailaddress']);

        $query = "INSERT INTO users(username, password, email_address) VALUES('" . $username . "', '" . $password . "', '" . $emailaddress . "')";
        $result = pg_query($query); 
        if (!$result) { 
            $errormessage = pg_last_error(); 
            echo "Error with query: " . $errormessage;
            exit(); 
        } 
        printf ("These values were inserted into the database - %s %s %s", $username, $password, $emailaddress);
		
		pg_close(); 
        ?> 
		<a href= "index.php">Click to get back to the homepage</a>
    </body> 
</html> 