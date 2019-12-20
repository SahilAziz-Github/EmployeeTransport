
<?php

function logindataRead()
{


global $temp;
global $cred;



$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" select * from login ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$uname = trim($row["userName"] );
$pass = trim( $row["password"]) ;
$utype	=  trim($row["uType"] );

$temp [ $uname ] = $pass ;

$cred [ $uname ] = $utype ;

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




function propertydataRead()
{


global $data;




$connect = mysqli_connect( "localhost", "root", "","final_project");

$sql=" select * from propertyinfo ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$proID = trim( $row["PropertyID"] );
$unam = trim( $row["UserName"] );


$cd["UserName"]=$unam;

$cd["Price"]=$row["Price"];

$cd["Phone"]=$row["Phone"];

$cd["Email"]=$row["Email"];

$cd["Area"]=$row["Area"];

$cd["Address"]=$row["Address"];

$cd["Room"]=$row["Room"];

$cd["Size"]=$row["Size"];

$cd["Floor"]=$row["Floor"];

$cd["Image"]=$row["Image"];

$cd["PropertyID"]=$proID;


$data[] = $cd;


}


}




function renttakerdataread()

{


global $data;




$connect = mysqli_connect( "localhost", "root", "","final_project");

$sql=" select * from renttakerinfo ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$cd["FirstName"]=$row["FirstName"];

$cd["LastName"]=$row["LastName"];

$cd["UserName"]=$row["UserName"];

$cd["Phone"]=$row["Phone"];

$cd["Email"]=$row["Email"];

$cd["Password"]=$row["Password"];

$cd["Gender"]=$row["Gender"];

$cd["Occupation"]=$row["Occupation"];

$cd["UserType"]=$row["UserType"];


$data[] = $cd;



}




}



function rentgiverdataread()

{



	global $data;




$connect = mysqli_connect( "localhost", "root", "","final_project");

$sql=" select * from rentgiverinfo ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$cd["FirstName"]=$row["FirstName"];

$cd["LastName"]=$row["LastName"];

$cd["UserName"]=$row["UserName"];

$cd["Phone"]=$row["Phone"];

$cd["Email"]=$row["Email"];

$cd["Password"]=$row["Password"];

$cd["Gender"]=$row["Gender"];

$cd["Occupation"]=$row["Occupation"];

$cd["UserType"]=$row["UserType"];


$data[] = $cd;







}


}









?>