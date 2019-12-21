<!DOCTYPE html>
<html>
<head>
	<title>Booking History</title>
</head>
<body>

<p>
<table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;">
  <tr>

  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">CustomerName :</th>


    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Car Name: </th>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Driver Name: </th>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Departure Time:</th>

  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Departure Location:</th>


  



  </tr>


<?php




$data=array();

$cd=array();

include("function.php");

bookingdataread();


foreach ($data as  $v) 
{




 ?>


<tr >
    <td style="border: 1px solid #ddd; padding: 8px;" ><?php echo $v["userName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["carName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["driverName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["departureTime"];   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["departureLocation"];   ?></td>
     
     

 </tr>


<?php 








 }







?>

</table>
</p>


</body>
</html>