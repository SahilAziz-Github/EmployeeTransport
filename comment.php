
<?php


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{


?>

<!DOCTYPE html>
<html>
<head>
	<title>Comment </title>

	<script   type="text/javascript">




  
function valid()
{



var un = document.fm.com.value;
//var pw = document.fm.pass.value;


var flag =true;


if( un.value == Null)

{

    flag=false;

    document.getElementById("una").innerHTML="Null Submission";
    document.getElementById("una").style.color="orange";
    
}

return flag;

}







</script>



</head>
<body>
	
	<form name = "fm" method="POST" action="comment.php" >
<fieldset>
<legend><b> Let us know your valuable opinion  </b></legend>
Comment Box <br>
<input type="text" name="com" /> 


<div><input type="submit" name="submit" value="Place Comment" onclick="return valid()" />  </div>

<a href="customerhome.php"> Go Back </a>

</fieldset>
</form>
<?php
 
 if(isset($_POST['submit']))
 {	//$temp=array();
	$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" insert into comment values ('".$_COOKIE["uname"]."','".$_POST["com"]."'

) ";
//$sql=" select * from carinfo";
$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

}

?>

</body>
</html>


<?php

}



else
{

 echo "<h1 style='color:red;text-align:center;'>You are not authorized to enter this page without Login.</h1><br><br>";

 echo "<h1 ><b style='color:black;text-align:center;'><u>Login First:</u><a  href='login.php' style='color:green;text-decoration:none;' >Go To Login Page    </a></b></h1>";

 

       
}


?>
