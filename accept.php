<?php

$up= "valid";

$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" update login  set   status='".$up."' where  Username = '".$_GET["d"]."'   " ;






$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );






echo "<h3 style='color:green'>Update  Successfull.</h3>";

header("location:seerequest.php");
?>
