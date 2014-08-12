<?php
session_save_path(trim(`echo ~`).'/php_sessions');
session_start(); 
if(isset($_POST['username']))
    $_SESSION['username'] = $_POST['username'];
	//If the session has been created, the stated text is printed and the session is maintained*//


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Photo Stack - The place for photo sales</title>
		<meta content='application/xhtml+xml; charset=UTF-8' http-equiv='Content-Type'/>
		<link rel= "icon" type="image/png" href="css/weblogo.png"/>
		<link rel="stylesheet" type="text/css" href="css/fic1.css"/>
		
	</head>
	
	<body>

			<div id="menu">
	
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="help.php">Help</a></li>
				
			
			<hr />
			</div>
		
		</div>	
	<div id="mainbody">
			<h2>Log-in to your account here:</h2>
			<form action="../Project/" method = "post">
				<p>Username: <input type="text" name="username" size="15" value="" /></p>
			<p>Password: <input type="text" name="password" size="15" value="" /></p>
				<p><input type="submit" name="process" value="Submit" /></p>
				
			</form>

			<hr />
			<script type="text/javascript">
				<!--
					var theDate = new Date(document.lastModified);
					
					var theMonth = parseInt(theDate.getMonth());
					var theDay = theDate.getDate();
					var theYear = theDate.getFullYear();
					
					if (theDate == "") {
						document.write("To see the date that this document was last modified, please reload the page");
						}
					else {
					 var lastModifiedDisplay="Document last modified on: ";
					 lastModifiedDisplay = lastModifiedDisplay+theDay+"<sup>";
					 switch(theDay){
						case 1: case 21: case 31:
							lastModifiedDisplay = lastModifiedDisplay+"st";
							break;
						case 1: case 22:
							lastModifiedDisplay = lastModifiedDisplay+"nd";
							break;
						case 3: 
							lastModifiedDisplay = lastModifiedDisplay+"rd";
							break;
						default:
							lastModifiedDisplay = lastModifiedDisplay+"th";
							break;
						}
						lastModifiedDisplay = lastModifiedDisplay+"</sup>";
						
						theMonth = theMonth + 1;
						var monthString = "";
						switch(theMonth){
							case 1:
								monthString = " January ";
								break;
							case 2:
								monthString = " February ";
								break;
							case 3:
								monthString = " March ";
								break;
							case 4:
								monthString = " April ";
								break;
							case 5:
								monthString = " May ";
								break;
							case 6:
								monthString = " June ";
								break;
							case 7:
								monthString = " July ";
								break;
							case 8:
								monthString = " August ";
								break;
							case 9:
								monthString = " September ";
								break;
							case 10:
								monthString = " October ";
								break;
							case 11:
								monthString = " November ";
								break;
							case 12:
								monthString = " December ";
								break;
								
							}
							lastModifiedDisplay=lastModifiedDisplay+monthString+theYear;
							
							document.write(lastModifiedDisplay);
						}
							
					
				-->
			</script>
				
				<p id="disclaimer"> Any information displayed on this page and any other produced by me, Findlay Cruden (fic1@aber.ac.uk) 
									is  done so under my own responsibility and in no way that of Aberystwyth University. In the same way, any and all opinions that are expressed
									are mine and mine alone. These do not reflect those of the University.
				</p>			
		</div>

	</body>
</html>	