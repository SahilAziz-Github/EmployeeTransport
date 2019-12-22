<?php
$connect = mysqli_connect("localhost", "root", "", "transporter");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM driver 
	WHERE driverName LIKE '%".$search."%'
	OR carName LIKE '%".$search."%' 
	OR age LIKE '%".$search."%' 
	OR experience LIKE '%".$search."%' 
	OR phone LIKE '%".$search."%'
	OR address LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM driver ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Driver Name:</th>
							<th>Car Name:</th>
							<th>Age:</th>
							<th>Experience:</th>
							<th>Phone:</th>
							<th>Address:</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["driverName"].'</td>
				<td>'.$row["carName"].'</td>
				<td>'.$row["age"].'</td>
				<td>'.$row["experience"].'</td>
				<td>'.$row["phone"].'</td>
				<td>'.$row["address"].'</td>
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