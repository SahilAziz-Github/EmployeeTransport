<?php
	//$temp=array();
	$connect = mysqli_connect( "localhost", "root", "","transporter");

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
	$sql1="insert into booking (userName,carName,driverName,departureTime,route) values (	'".$_COOKIE["uname"]."'	,'".$temp["carName"]."' , '".$temp["driverName"]."'	, '".$temp["departureTime"]."'	, '".$temp["departureLocation"]."') ";
	$result1 = mysqli_query($connect,$sql1) or die  ( mysqli_error($connect)  );

header("Location:fake.php");


	
?>