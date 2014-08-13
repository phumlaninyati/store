<?php
session_save_path(trim(`echo ~`).'/php_sessions');
session_start(); 
if(isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
	}
if (!isset($_SESSION['Basket'])) {
	$_SESSION['Basket'] = array();
	//creates and maintains the array for this particular session *//
	}
	
	
	if (isset($_post['refnumber'])){
	 $_SESSION['Basket'] = array_diff ($_SESSION['Basket'], array ($_GET['refnumber']));
	 $_SESSION['Basket'] = array_values($_SESSION['Basket']);
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
	
	<?php require "heading.php" ; ?>
	
		<div id="menu">
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><p><a href = 'checkout.php'>Checkout</a></p>

			</ul>
			
			<hr />
			<p>
				<a href="mailto:fic1@aber.ac.uk">fic1@aber.ac.uk</a>

			</p>
			<p>
				<a href="http://validator.w3.org/check?uri=referer">
					<img style="border:0;width:88px;height:31px"
						 src="http://www.w3.org/Icons/valid-xhtml11"
						 alt="Valid XHTML 1.1" height="31" width="88"/>
				</a>
			</p>
			<p>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px"
						 src="http://jigsaw.w3.org/css-validator/images/vcss" 
						 alt="Valid CSS!" />

				</a>
			</p>		
		</div>
	<div id="mainbody"> 
	<?php
      $conn = pg_connect("host=db.dcs.aber.ac.uk port=5432
      dbname=teaching user=csguest password=rohishe");
     for($i = 0; $i <count($_SESSION['Basket']); $i++) {
		$basket =  $_SESSION['Basket'];
		$refNum = $basket[$i];
		$res = pg_query ($conn, "SELECT * FROM CSGames WHERE refnumber  = $refNum");
	  echo "<table border='1'>";
	  echo "<tr><th>Title</><th>Platform</th><th>Description</th><th>Price</th><th>Buy</th></tr>\n" ;
      while ($a = pg_fetch_array($res)) {
        echo "<tr>";
		//prints all items present in the basket array *//
echo "<td>".htmlspecialchars($a[title], ENT_QUOTES) . "</td\n>";
echo "<td>".htmlspecialchars($a[platform], ENT_QUOTES) . "</td\n>";
echo "<td>".htmlspecialchars($a[description], ENT_QUOTES) . "</td\n>";
echo "<td>".htmlspecialchars($a[price], ENT_QUOTES) . "</td\n>";    
echo "<td> <form action = 'basket.php' method = 'get'>\n 
     <p><input type = 'hidden' name = 'refNumber' value = '" . htmlspecialchars($a[refnumber], ENT_QUOTES) . "' />\n
	 <input type = 'submit' value = 'Remove from Basket'/></p>\n
	</form>\n </td>";
	//prints remove from basket button within the table *//
        }       
        }
        echo "</tr>\n";
    echo "</table>\n";
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