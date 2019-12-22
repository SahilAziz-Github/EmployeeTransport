<!DOCTYPE html>
<html>
<head>

</head>
<body style="background-color:powderblue; font-size: 28px ">




<ul style=" list-style-type: none; margin: 0;padding: 0;overflow: hidden;background-color: #333;position: sticky;top: 0;">

  <li style="float: left;"><a  style="display: block;color: white;text-align: center;padding: 14px 16px;text-decoration: none ; background-color: #4CAF50;"  href="#home">Home</a></li>

  <li style="float: left;"><a style="display: block;color: white;text-align: center;padding: 14px 16px;text-decoration: none;"  href="login.php">Login</a></li>
 
  <li style="float: left;"><a style="display: block;color: white;text-align: center;padding: 14px 16px;text-decoration: none;"  href="Reg.php">Registration</a></li>
  
  <li style="float: left;"><a style="display: block;color: white;text-align: center;padding: 14px 16px;text-decoration: none;"  href="contact.html">Contact us</a></li>

  <li style="float: left;"><a style="display: block;color: white;text-align: center;padding: 14px 16px;text-decoration: none;"  href="vision.html">Our Vision</a></li>
</ul>
   
<div >
   <marquee>
  <h2 style="color: black ;"> Employee Transport Service </h2>
   </marquee>
</div> 
   
  

<img style="float:right;" src="c1.jpg" height="500px" width="700px" alt="">

<h3 >Why should we use this website?</h3>
<ul>
  <li>This is the best transportation in dhaka.</li>
  <li>We ensure your travel security as top priority.</li>
  <li>No trips are cancelled without any valid reason.</li>
  <li>User data is safely stored inside our secure servers.</li>
  <li>No fake accounts since all types of user accounts are verified first.</li>
</ul>
   
<br/>




<?php

$data=array();
include("lib.php");
loadFromXML();


foreach ($data as $v) 

{

  

  if($v["name"]=="Sahil Aziz")
  {

    ?>

<b><u><span style="font-size:30px;color:green "> Founder:</span></u></b><br>



<b>Name:</b><span> <?php echo $v["name"];     ?> </span><br>
<b>Age:</b><span> <?php echo $v["age"];     ?> </span><br>
<b>University:</b><span> <?php echo $v["university"];     ?> </span><br><br><br>



<?php
}


  if($v["name"]=="Priya Roy")
  {

    ?>



<b><u><span style="font-size:30px;color:green  "> Co-founder:</span></u></b><br>



<b>Name:</b><span> <?php echo $v["name"];     ?> </span><br>
<b>Age:</b><span> <?php echo $v["age"];     ?> </span><br>
<b>University:</b><span> <?php echo $v["university"];     ?> </span><br><br><br>




<?php
}





}

?>







</body>
</html>
