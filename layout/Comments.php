
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
		

			
<?php require "footer.php" ; 
	// ensures that the footer file is printed in the place as designated by the css file *//
	?>
	</body>
</html>	