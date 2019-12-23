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
  color: white;">User Name: </th>

    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">User Type:</th>
  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Subscription:</th>

  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Accept</th>
  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Reject</th>


  


  </tr>


  <!--- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->



  <?php


$data=array();

$cd=array();

include("function.php");

subscriptiondataread();


$i=0;

foreach ($data as  $v) 
{ 
  if($v["subscription"] == "no")
  {




 ?>


<tr >
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["userName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["uType"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["subscription"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><a style='text-decoration:none;color:green;' href='acceptsub.php?d=<?php echo $v["userName"] ; ?> ' >

    

     Accept</a></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><a style='text-decoration:none;color:green;' href='deletesub.php?d=<?php echo $v["userName"] ; ?> ' >

    

     Delete</a></td>
     

</tr>




<?php 








 }

       

      
}	


?>

</table>



<a href="adminhome.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Return to Homepage</a><br><br><br>


</body>
</html>

<?php


}
else{
echo "<h1 style='color:red;text-align:center;'>You are not authorized to enter this page without Login.</h1><br><br>";

 echo "<h1 ><b style='color:black;text-align:center;'><u>Login First:</u><a  href='login.php' style='color:green;text-decoration:none;' >Go To Login Page    </a></b></h1>";
}
?>