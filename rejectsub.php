<?php

$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" update customerinfo  set   subscription ='Rejected',month='N/A',air='N/A',payment='N/A' where  userName = '".$_GET["d"]."'   " ;






$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );






echo "<script>alert('Account Subscription Successful ');</script>";

header("location:subscriptionrequest.php");
?>
