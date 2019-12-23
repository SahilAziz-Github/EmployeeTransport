<?php


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{


?>



<?php
	//$temp=array();
	$connect = mysqli_connect( "localhost", "root", "","transporter");
	$status = "0";
	$sql = "SELECT * from carinfo where carName = '".$_GET["d"]."' ";
//$sql=" select * from carinfo";
$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
	{
		$temp["carName"] = $row["carName"];
		$temp["driverName"] = $row["driverName"];
		$temp["departureTime"] = $row["departureTime"];
		$temp["departureLocation"] = $row["departureLocation"];

	}
	$sql1="insert into booking (userName,carName,driverName,departureTime,departureLocation,status) values (	'".$_COOKIE["uname"]."'	,'".$temp["carName"]."' , '".$temp["driverName"]."'	, '".$temp["departureTime"]."'	, '".$temp["departureLocation"]."','".$status."') ";
	$result1 = mysqli_query($connect,$sql1) or die  ( mysqli_error($connect)  );
echo "<script>alert('Your Booking is Successful ');</script>";
header("Location:customerhome.php");


	
?>



<?php

}



else
{

 echo "<h1 style='color:red;text-align:center;'>You are not authorized to enter this page without Login.</h1><br><br>";

 echo "<h1 ><b style='color:black;text-align:center;'><u>Login First:</u><a  href='login.php' style='color:green;text-decoration:none;' >Go To Login Page    </a></b></h1>";

 

       
}


?>
