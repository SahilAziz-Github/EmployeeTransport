<?php
$connect = mysqli_connect("localhost", "root", "", "transporter");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM customerinfo 
	WHERE firstName LIKE '%".$search."%'
	OR lastName LIKE '%".$search."%' 
	OR username LIKE '%".$search."%' 
	OR phone LIKE '%".$search."%' 
	OR email LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM customerinfo ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered" border="2px">
						<tr>
							<th>First Name:</th>
							<th>Last Name:</th>
							<th>User Name:</th>
							<th>Phone :</th>
							<th>Email :</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["firstName"].'</td>
				<td>'.$row["lastName"].'</td>
				<td>'.$row["userName"].'</td>
				<td>'.$row["phone"].'</td>
				<td>'.$row["email"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>