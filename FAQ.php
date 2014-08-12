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
	
	<div id= "mainbody">
	
	<ul>
	
	<strong><p> How do I register for an account?</strong></p>
	<p> Click on the link on the homepage and it will let you input your various details and will let you open
	an account with us</p>
	
	<strong><p>What do I do if I have forgotten my password?</strong></p>
	<p>If you have forgetten your password or username, you can use the comments section to contact us about the issue
	We can then send you a link which will enable you to reset your password/ username</p>
	
	<strong><p> How do I upload photos onto my account?</strong></p>
	<p> There is the option within your account to enable you to upload photos. Simply click on this link and it will
	let you upload and manage any other photos that you've uploaded already</p>
	
	<strong><p> Where do I enter payment details for buying photos?</strong></p>
	<p> You can either enter the details during the registration process or you can do it through your account page</p>
	
	<strong><p> Will my account be deleted if I am inactive on it for too long?</strong></p>
	<p>If you hold an account with us and are inactive for over 12 months, it will be deactivated during our yearly hard drive purge.
	If you want to prevent this from happening, log into the website at least once a year and it won't be deleted.</p>
	
	<strong><p> How many photos can I upload in total?</strong></p>
	<p>When you register with us, you are buying a space on our server which you can use how ever you want. The limit to how many
	photos you upload is dependent on the size of the photos that you upload along with how much space you purchased when you
	registered with us</p>
	
	<strong><p>Will my photos be deleted after a certain time or will they stay there?</strong></p>
	<p>The photos you choose to upload are tied to your account. So long as your account exists, those photos will also
	remain on the website. They can be deleted if you want or they will be deleted should your account ever be terminated</p>
	
	</ul>
	</div>
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