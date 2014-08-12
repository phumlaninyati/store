<?php
session_save_path(trim(`echo ~`).'/php_sessions');
session_start(); 
if(isset($_POST['username']))
    $_SESSION['username'] = $_POST['username'];
	//creates and maintains the session under the username as designated by the user *//
if (!isset($_SESSION['Basket']))
	$_SESSION['Basket'] = array();
	
if (isset($_POST['refNumber'])) {
	$refNumber = $_POST ['refNumber'] ;
	array_push($_SESSION['Basket'],$refNumber);
	// prints the basket link and allows for entries to be entered into the created array using the add to basket buttons *//
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Photo Stack - The place for photo sales</title>
		<meta content='application/xhtml+xml; charset=UTF-8' http-equiv='Content-Type'/>
		<link rel="icon" type="image/png" href="css/weblogo.png" />
		<link rel="stylesheet" type="text/css" href="css/fic1.css"/>
		<SCRIPT LANGUAGE="JavaScript">
		<!-- Begin
function checkFields() {
missinginfo = "";
if (document.form.name.value == "") {
missinginfo += "\n     -  Name";
}
if ((document.form.from.value == "") || 
(document.form.from.value.indexOf('@') == -1) || 
(document.form.from.value.indexOf('.') == -1)) {
missinginfo += "\n     -  Email address";
}
if(document.form.comments.value == "") {
missinginfo += "\n     -  Comments";
}

if (missinginfo != "") {
missinginfo ="_____________________________\n" +
"You failed to correctly fill in your:\n" +
missinginfo + "\n_____________________________" +
"\nPlease re-enter and submit again";
alert(missinginfo);
return false;
}
else return true;
}

</script>
		
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
				
			</ul>
			
			<hr />
			</div>
	
	<div id="form">
	
<form action="mailto:fcruden@googlemail.com" name=form method=post onSubmit="return checkFields();">
<input type=hidden name=to value='fcruden@googlemail.com'>
<input type=hidden name=subject value="Email">
Name:      <input type=text name="name" size=30>
<br><br>
E-mail:    <input type=text name="from" size=30>
<br><br>
Comments:  
<textarea rows=3 cols=40 name="comments"></textarea>
<br><br>
<input type=submit name="submit" value="Submit Form">

			</form>

		</div>		
		

			
<?php
	 
	
    ?>
	
	
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
		<?php
			$viewmonth=date("n");
			if (($viewmonth==12)||($viewmonth<7))
			{
			if (isset($_POST["viewsource"])) {echo"<hr />";highlight_file(__FILE__);}
			else echo('<form action="' . $_SERVER["PHP_SELF"] . '" method="post">
			<p><input type="submit" name="viewsource" value="View source"/></p></form>');
			}
			?>				
		</div>
		

	</body>
</html>	