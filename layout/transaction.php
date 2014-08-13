<div id="maincontainer">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Photo Stack - The place for photo sales</title>
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
			
			<hr />
			</div>
		
			
	
		<div id="mainbody">
<h2>To complete your transaction, please enter your details into the 
table below:</h2>
<p class="form-label">First Name:</p>
            <input class="text" id="first-name" spellcheck="false"></input>
             
            <p class="form-label">Last Name:</p>
            <input class="text" id="last-name" spellcheck="false"></input>
             
            <p class="form-label">Email Address:</p>
            <input class="text" id="email" spellcheck="false"></input>
             
            <p class="form-label">Credit Card Number:</p>
            <input class="text" id="card-number" autocomplete="off"></input>
             
            <p class="form-label">Expiration Date:</p>
            <select id="expiration-month">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
            </select>
             
            <select id="expiration-year">
                <?php 
                    $yearRange = 20;
                    $thisYear = date('Y');
                    $startYear = ($thisYear + $yearRange);
                 
                    foreach (range($thisYear, $startYear) as $year) 
                    {
                        if ( $year == $thisYear) {
                            print '<option value="'.$year.'" selected="selected">' . $year . '</option>';
                        } else {
                            print '<option value="'.$year.'">' . $year . '</option>';
                        }
                    }
                ?>
            </select>
             
            <p class="form-label">CVC:</p>
            <input class="text" id="card-security-code" autocomplete="off"></input>
             
            <input id="buy-submit-button" type="submit" value="Place This Order »"></input>
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