


<?php


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{


?>


<!DOCTYPE html>
<html>
<head>


<script  type="text/javascript">

	
	
function valid()

{  
	 var un = document.fm.uname.value;

	 var flag = true;


	 if (un.length == 0)
	 {
       

        document.fm.uname.style.color="red";
        document.getElementById("una").innerHTML="Enter a User Name First.";

	     flag = false;

     }


     return flag;

 }


 </script>



</head>
<body>
<p><h2>Admin Page:</h2></p>

<p>
    
  <form action="adminhome.php" method="post" name="fm">
    <strong>User List:</strong>
     <select  style="width: 100%; padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
     box-sizing: border-box;"
id="utist" name="ulist">
      <option value="customer">Customer </option>
      <option value="service">Service Provider</option>
      


    </select>

    <b id="una"></b>


<strong>Search User(User Name):</strong>

 <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" name="uname" placeholder="User Name...">
    
     
     <input style="width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;
    cursor: pointer;float: left;" type="submit"  name="search" value="search"   onclick="return  valid()"  ><br>


     <input style="width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;
    cursor: pointer;float: left;" type="submit"  name="showall" value="Show All"><br>




  </form> 
   
  


</p>



<p>
<table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;">
  <tr>

  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Name :</th>


    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">User Name: </th>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Phone: </th>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Email:</th>

  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Gender:</th>


  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">User Type:</th>




  </tr>


  <!--- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->



  <?php


if(isset($_POST["search"]) &&   $_POST["ulist"] == "service" )

{


$data=array();

$cd=array();

include("function.php");

serviceproviderdataread();


$i=0;

foreach ($data as  $v) 
{

if ($_POST["uname"] == $v["UserName"]  )
 {
  
 global $i;

 $i++



 ?>


<tr >
    <td style="border: 1px solid #ddd; padding: 8px;" ><?php echo $v["FirstName"] ."  ". $v["LastName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Phone"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Email"];   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Gender"];   ?></td>
  <!--   <td style="border: 1px solid #ddd; padding: 8px;"><?php  //echo $v["Occupation"];   ?></td> -->
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserType"];   ?></td>
     

 </tr>


<?php 






}

 }

        if ($i==0) 
        {
          echo "<h3 style='color:red;text-align:center';>No match found !!!</h3>";
        }

      
   }	


?>



<!--- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->






<?php


if(isset($_POST["search"]) &&   $_POST["ulist"] == "customer" )

{


$data=array();

$cd=array();

include("function.php");

 customerdataread();


$i=0;

foreach ($data as  $v) 
{

if ($_POST["uname"] == $v["UserName"]  )
 {
  
 global $i;

 $i++



 ?>


<tr >
    <td style="border: 1px solid #ddd; padding: 8px;" ><?php echo $v["FirstName"] ."  ". $v["LastName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Phone"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Email"];   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Gender"];   ?></td>
   <!--  <td style="border: 1px solid #ddd; padding: 8px;"><?php // echo $v["Occupation"];   ?></td> -->
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserType"];   ?></td>
     

 </tr>


<?php 






}

 }

        if ($i==0) 
        {
          echo "<h3 style='color:red;text-align:center';>No match found !!!</h3>";
        }





}


?>	






<!--- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->






<?php

if(isset($_POST["showall"]) &&   $_POST["ulist"]== "customer" )

{


$data=array();

$cd=array();

include("function.php");

customerdataread();


foreach ($data as  $v) 
{




 ?>


<tr >
    <td style="border: 1px solid #ddd; padding: 8px;" ><?php echo $v["FirstName"] ."  ". $v["LastName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Phone"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Email"];   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Gender"];   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserType"];   ?></td>
     

 </tr>


<?php 








 }




}


?>




<!--- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->






<?php

if(isset($_POST["showall"]) &&   $_POST["ulist"]== "service" )

{


$data=array();

$cd=array();

include("function.php");

serviceproviderdataread();


foreach ($data as  $v) 
{




 ?>


<tr >
    <td style="border: 1px solid #ddd; padding: 8px;" ><?php echo $v["FirstName"] ."  ". $v["LastName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Phone"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Email"];   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Gender"];   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserType"];   ?></td>
     

 </tr>


<?php 








 }




}


?>





<!--- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->






<?php

if( !  (  isset($_POST["showall"]) ||  isset($_POST["search"]) )   )

{


$data=array();

$cd=array();

include("function.php");

customerdataread();


foreach ($data as  $v) 
{




 ?>


<tr >
    <td style="border: 1px solid #ddd; padding: 8px;" ><?php echo $v["FirstName"] ."  ". $v["LastName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Phone"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Email"];   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Gender"];   ?></td>
     <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserType"];   ?></td>
     

 </tr>


<?php 








 }




}


?>




 
</table>
</p>

<a href="history.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Check History</a><br><br><br>

<a href="seerequest.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Pending Requests</a><br><br><br>




<a href="Logout.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Log Out</a><br><br><br>




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