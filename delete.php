<?php


$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" delete from login where  Username = '".$_GET["d"]."'   " ;






$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

$sql1=" delete from customerinfo where  Username = '".$_GET["d"]."'   " ;






$result1 = mysqli_query($connect,$sql1) or die  ( mysqli_error($connect)  );

$sql2=" delete from serviceproinfo where  Username = '".$_GET["d"]."'   " ;






$result2 = mysqli_query($connect,$sql2) or die  ( mysqli_error($connect)  );





echo "<script>alert('Account Deletion Successful ');</script>";

header("location:adminhome.php");
?>
