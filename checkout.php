<?php
session_save_path(trim(`echo ~`).'/php_sessions');
session_start(); 
if(isset($_POST['username']))
    $_SESSION['username'] = $_POST['username'];
if (!isset($_SESSION['Basket']))
	$_SESSION['Basket'] = array();
	
if (isset($_POST['refNumber'])) {
	$refNumber = $_POST ['refNumber'] ;
	array_push($_SESSION['Basket'],$refNumber);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Quantum Studios - The game has only just begun</title>
		<meta content='application/xhtml+xml; charset=UTF-8' http-equiv='Content-Type'/>
		<link rel="icon" type="image/png" href="css/weblogo.png" />
		<link rel="stylesheet" type="text/css" href="css/fic1.css"/>
		<script type = "text/javascript">
			<!--
			function validate(payForm) {
				payForm.onsubmit = function() {
					//http://www.regular-expressions.info/creditcard.html
					//http://regexlib.com/REDetails.aspx?regexp_id=1204
					var creditCardRegexp = /^((67\d{2})|(4\d{3})|(5[1-5]\d{2})|(6011))-?\s?\d{4}-?\s?\d{4}-?\s?\d{4}|3[4,7]\d{13}$/
					var emailRegexp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					
					if(!emailRegexp.test(payForm.elements['email'].value) || payForm.elements['email'].value == "") {
						alert("Invalid email address!");
						return false;
					}
					
					if(!creditCardRegexp.test(payForm.elements['credit_card'].value) || payForm.elements['credit_card'].value == "") {
						alert("Invalid credit card number!");
						return false;
					}	
					return true;
				}
			}
			-->
		</script>
	</head>
	
	<body>
	
	<?php require "heading.php" ; ?>
	
		<div id="menu">
			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
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
		<div id = "mainbody">
			<h2>Note: This is not a really web store. It was written as part of my University assignment. Please do not attempt to purchase anything from it or enter any of your real credit card details into the form below</h2>
<form name = 'pay' action = '../Project/checkout.php' method = 'post'
>	<p><strong>Email: </strong><input type = 'text' name = 'email' size = '50'/></p>
	<p><strong>Credit Card Type: </strong>
	<select name = 'credit_card_type'>

								<option>Select Card Type</option>

								<option value = 'Visa'>Visa</option>

								<option value = 'MasterCard'>MasterCard</option>

								<option value = 'American Express'>American Express</option>

								<option value = 'Diners Club'>Diners Club</option>

								<option value = 'Discover'>Discover</option>

								<option value = 'JCB'>JCB</option>

							</select></p>
	<p><strong>Credit Card Number: </strong><input type = 'text' name = 'credit_card'/></p>
	<p><input type = 'submit' value = 'Pay' /></p>
</form>
<script type='text/javascript'>

							<!--

							new validate(document.forms['pay']);

							-->
</script>
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
		
		