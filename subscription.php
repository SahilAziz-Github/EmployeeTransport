<?php
session_start();
?>



<html>
<head>


<script type="text/javascript">
	




</script>>







	<style type="text/css">
		
		h1 {
  color: MidnightBlue;
  text-align: center;
}
div {
  border-radius: 5px;
  background-color: powderBlue;
  padding: 20px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: MidnightBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 justify-content: center;
}
input[type=submit]:hover {
  background-color: Navy;
}
	</style>
<head>
	<body>
		<div>
		<form method="POST" action="subscription.php">
			
				<h1><b><u> Subscribe </u></b></h1>
				<h3>Welcome <?php echo $_COOKIE['uname'] ;?></h3>	
				<h3> Month:</h3>
				 <select id="month" name="month">
      <option value="january">january</option>
      <option value="february">february</option>
      <option value="march">march</option>
      <option value="april">april</option>
      <option value="may">may</option>
      <option value="june">june</option>
      <option value="july">july</option>
      <option value="august">august</option>
      <option value="september">september</option>
      <option value="october">october</option>
      <option value="november">november</option>
      <option value="december">december</option>
    </select>
    <h3> Air Condition: </h3>
    <input type="radio" name="ac" value="ac" checked> Ac
    <input type="radio" name="ac" value="nonac"> Non-Ac 
	<h3> Payment: </h3>
    <input type="radio" name="payment" value="bkash" checked> Bkash
    <input type="radio" name="payment" value="card"> Card <br>
	

	 <b id="fill"></b>
    <br> 
  


	<input type="submit" name="submit" value="submit">

			
	</form>
	</div>
	</body>
</html>

<?php
	if(isset($_POST['submit']))
	{

	$s="";
	$connect = mysqli_connect( "localhost", "root", "","transporter");

	$sql=" insert into subscription values ('".$_COOKIE["uname"]."','".$_POST["month"]."','".$_POST["ac"]."','".$_POST["payment"]."') ";

	$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );


	echo "Subscription Request PLaced Successfully";
	}


?>