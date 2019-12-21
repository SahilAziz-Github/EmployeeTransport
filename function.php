
<?php

function logindataRead()
{


global $temp;
global $cred;
global $stat;



$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" select * from login ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$uname = trim($row["userName"] );
$pass = trim( $row["password"]) ;
$utype	=  trim($row["uType"] );
$status	=  trim($row["status"] );

$temp [ $uname ] = $pass ;

$cred [ $uname ] = $utype ;

$stat [ $uname ] = $status ;


}


}

function searchdata()
{


global $temp;

$x=$_POST['plocation'];
$y=$_POST['dlocation'];


$connect = mysqli_connect( "localhost", "root", "","transporter");

//$sql=" select * from carinfo where pickup LIKE '$x%' AND dropoff LIKE  ";
$sql=" select * from carinfo";
$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$temp[] = $row ;

}


}




function bookingdataRead()
{


global $data;




$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" select * from booking ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{



$cd["userName"]=$row["userName"];

$cd["carName"]=$row["carName"];

$cd["driverName"]=$row["driverName"];

$cd["departureTime"]=$row["departureTime"];

$cd["departureLocation"]=$row["departureLocation"];



$data[] = $cd;


}


}


function pendingrequestdataread()

{


global $data;




$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" select * from login ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$cd["userName"]=$row["userName"];

$cd["password"]=$row["password"];

$cd["uType"]=$row["uType"];

$cd["status"]=$row["status"];




$data[] = $cd;



}

}








function customerdataread()

{


global $data;




$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" select * from customerinfo ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$cd["FirstName"]=$row["firstName"];

$cd["LastName"]=$row["lastName"];

$cd["UserName"]=$row["userName"];

$cd["Phone"]=$row["phone"];

$cd["Email"]=$row["email"];

$cd["Password"]=$row["password"];

$cd["Gender"]=$row["gender"];

$cd["UserType"]=$row["userType"];


$data[] = $cd;



}




}



function serviceproviderdataread()

{



	global $data;




$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" select * from serviceproinfo ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$cd["FirstName"]=$row["firstName"];

$cd["LastName"]=$row["lastName"];

$cd["UserName"]=$row["userName"];

$cd["Phone"]=$row["phone"];

$cd["Email"]=$row["email"];

$cd["Password"]=$row["password"];

$cd["Gender"]=$row["gender"];

$cd["UserType"]=$row["userType"];


$data[] = $cd;







}


}









?>