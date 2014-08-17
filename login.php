<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>
<div id="maincontainer">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Photo Stack - The place for photo sales</title>
		<meta content='application/xhtml+xml; charset=UTF-8' http-equiv='Content-Type'/>
		<link rel="icon" type="image/png" href="photos/weblogo.png" />
		<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
		<link rel="stylesheet" type="text/css" href="css/fic1.css"/>
		
	</head> 
	
	<body>
	
	<?php require "heading.php" ; 
	// ensures that the heading file is printed in the place as designated by the css file *//
	?>
	<div id="menu">
	
			
			<ul>
				<li><a href="">All Image Types</a></li>
				<li><a href="">Technology  </a></li>
				<li><a href="">Rural  </a></li>
				<li><a href="">People  </a></li>
				<li><a href="">Animals</a></li>
				<li><a href="">Sports  </a></li>
				<li><a href="">Business  </a></li>
				<li><a href="">Travel  </a></li>
				<li><a href="">Food  </a></li>
				<li><a href="">Family  </a></li>
				<li><a href="">History  </a></li>
				<li><a href="">Science </a></li>
			</div>

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >Username*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
</div>
<?php require "footer.php" ; 
	// ensures that the footer file is printed in the place as designated by the css file *//
	?>
</body>
</div>
</html>