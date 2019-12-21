<!DOCTYPE html>
<html>
<head>
	<title>Comment on our service</title>
</head>
<body>
	
	<form name = "comment.php" method="POST" action="../php/loginCheck.php" >
<fieldset>
<legend><b> Sign In </b></legend>
Email <br>
<input type="text" name="email" value=" " /> 
<span id="validEmail">  </span> <br>
Password <br>
<input type="Password" name="pass" size = "8" maxlength="8" /> 
<span id="validPass">  </span> <br>
<hr>
<input type="submit" name="submit" value="Sign In" onclick ="return loginvalidation()"/>



</fieldset>
</form>

	<?php
	echo "string";

	?>


</body>
</html>