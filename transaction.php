
<div id="maincontainer">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Photo Stack - The place for photo sales</title>
		<meta content='application/xhtml+xml; charset=UTF-8' http-equiv='Content-Type'/>
		<link rel="icon" type="image/png" href="photos/weblogo.png" />
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

	
	<?php require "heading.php" ; ?>
		<div id="menu">
	
			
			<ul>
				<li><a href="">All Image Types</a></li>
				<li><a href="">Technology</a></li>
				<li><a href="">Rural</a></li>
				<li><a href="">People</a></li>
				<li><a href="">Animals</a></li>
				<li><a href="">Sports</a></li>
				<li><a href="">Business</a></li>
				<li><a href="">Travel</a></li>
			    <li><a href="">Food  </a></li>
				<li><a href="">Family  </a></li>
				<li><a href="">History  </a></li>
				<li><a href="">Science </a></li>
			</div>
		
			
	
		<div id="mainbody">
<h2>To complete your transaction, please enter your details into the 
table below:</h2>
<form name = 'pay' action = 'insert.php' method = 'post'
>	
<p><strong>First Name: </strong><input type = 'text' name = 'firstname' size = '50'/></p>
<p><strong>Last Name: </strong><input type = 'text' name = 'lastname' size = '50'/></p>
<p><strong>Email: </strong><input type = 'text' name = 'emailaddress' size = '50'/></p>
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
	<p><strong>Credit Card Number: </strong><input type = 'text' name = 'creditcardnumber'/></p>
	<p><strong>Date of Expiry: </strong><input type = 'date' name = 'expirationdate'/></p>
	<p><strong>CVC: </strong><input type = 'text' name = 'cvc'/></p>
	<p><input type = 'submit' value = 'Pay' /></p>
</form>
    </body>
</html>

</div>


</div>
</div>
<?php require "footer.php" ; 
	// ensures that the footer file is printed in the place as designated by the css file *//
	?>

</body>

</div>

</html>