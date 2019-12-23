<?php


$connect = mysqli_connect( "localhost", "root", "","transporter");

$sql=" delete from booking where  userName = '".$_GET["d"]."'   " ;






$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );






echo "<script>alert('Account Request Rejected ');</script>";

header("location:seebookingrequest.php");
?>
