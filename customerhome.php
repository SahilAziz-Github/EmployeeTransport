<?php


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{


?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="POST" action="customerhome.php" name= "customerhome" style="width:500px; height:500px; display:inline-block;">
<fieldset>
<table border="0" width=100%>
<tr>

<td ><a href="route.php"> Route </a></td>
<td ><a href="profile.php"> Profile </a></td>
<td > <a href="subscription.php"> Subscribe! </a></td>
<td> <a href="changepasscustomer.php"> Change Password </a></td>
<td> <a href="comment.php"> comment </a></td>
<td><a href="logout.php"> Log Out </a></td>

</tr>
</table>



<h1 align='center'> Welcome !</h1>

<!--<input type="text" name="searchBar" size="80" placeholder="search" /> 
<td><input type="submit" name="searchButton" value="Search"/>-->


<div>Pickup Location: </div>
 <select name = "plocation">
	        <option value = ""> Select pickup location </option>
			<option value = "shyamoli"> Shyamoli </option>
			<option value = "mohakhali"> Mohakhali </option>
			<option value = "banani"> Banani </option>
			<option value = "gulshan"> Gulshan </option>
			<option value = "baridhara"> Baridhara </option>			
			<option value = "bashundhara"> Basundhara </option>
			</select><span id="pl"></span><br>

<div>Drop off Location: </div>
 <select name = "dlocation" >
	        <option value = ""> Select drop off location </option>
			<option value = "shyamoli"> Shyamoli </option>
			<option value = "mohakhali"> Mohakhali </option>
			<option value = "banani"> Banani </option>
			<option value = "gulshan"> Gulshan </option>
			<option value = "baridhara"> Baridhara </option>
			<option value = "basundhara"> Basundhara </option>
			</select><span id="dl"></span><br>

<div><input type="submit" name="search" value="Search"/>  </div>
</fieldset>
</form>

<p>
<table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;">
  <tr>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">car name </th>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">departure time </th>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">departure location</th>

  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">route </th>
  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">booking </th>

  


  
  </tr>
  
 <?php
 
 if(isset($_POST['search']))
 {	$temp=array();
	$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql = "SELECT * from carinfo where  dropoff LIKE '%{$_POST['dlocation']}%' and pickup LIKE '%{$_POST['plocation']}%' ";
//$sql=" select * from carinfo";
$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
	{$temp[] = $row;}
	foreach($temp as $v)
	{
		
	
	 
	 
	 

?> 

  <tr >
    <td style="border: 1px solid #ddd; padding: 8px;" ><?php echo $v["carName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["departureTime"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["departureLocation"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["route"];   ?></td>

    <td style="border: 1px solid #ddd; padding: 8px;"><a style='text-decoration:none;color:green;' href='booking.php?d=<?php echo $v["carName"] ; ?> ' >

    

     Book Car</a></td>



  </tr>
  
  <?php
 }
 }
  ?>
  </table>









<script type="text/javascript">
	function getSelectValue()
	{
		var pickup = document.userHome.plocation.value;
		var dropoff = document.userHome.dlocation.value;

		if(pickup==" " || dropoff==" ")
			{
				alert("Please Fill Up the Fields!");
				return false;
			}

		else if(pickup==dropoff)
		{
			document.getElementById('dl').innerHTML="**Pickup and drop off location can not be same";
				return false;
		}


	}


</script>
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
