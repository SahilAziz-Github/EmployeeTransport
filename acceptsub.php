<?php

$up= "valid";

$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" update customerinfo  set   subscription ='".$up."' where  userName = '".$_GET["d"]."'   " ;






$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );






echo "<script>alert('Account Subscription Successful ');</script>";

header("location:subscriptionrequest.php");
?>
