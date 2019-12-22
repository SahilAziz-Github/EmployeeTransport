<?php


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{


?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;">
  <tr>

  	 <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Driver Name: </th>
   
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Car Name : </th>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Age:</th>
  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Experience:</th>
  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Phone:</th>
  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Address:</th>
  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Status</th>


  


  </tr>


  <!--- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->



<?php


//$data=array();

//$cd=array();
include("lib.php");

$jsonDATA = getJSONFromDB(" select * from driver where driverName= '".$_GET["d"]."' ");

$jsn=json_decode($jsonDATA);
//include("function.php");

//pendingrequestdataread();


$i=0;

foreach ($jsn as  $v) 
{ 
  if($v->status == "valid")
  {




 ?>


<tr >
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->driverName;   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->carName;   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->age;   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->experience;   ?></td>
      <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->phone;   ?></td>
      <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->address;   ?></td>
       <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->status;   ?></td>
    
     

 </tr>




<?php 








 }

       

      
}	


?>

</table>



<a href="viewbooking.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Return </a><br><br><br>


</body>
</html>

<?php


}
else{
echo "<h1 style='color:red;text-align:center;'>You are not authorized to enter this page without Login.</h1><br><br>";

 echo "<h1 ><b style='color:black;text-align:center;'><u>Login First:</u><a  href='login.php' style='color:green;text-decoration:none;' >Go To Login Page    </a></b></h1>";
}
?>














