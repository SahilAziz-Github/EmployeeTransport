


<?php



function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","transporter");
	
	$result = mysqli_query($conn, $sql)or die(mysqli_error($$conn));
	$arr=array();
	
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	
	return json_encode($arr);
}




function loadFromXML(){
	global $data;
	$data=array();
	$xml=simplexml_load_file("cred.xml") or die("Error: Cannot create object");

	
		foreach($xml->user as $st)
		{
		
		    $ar=array();

            $ar["name"]=(string)$st->name;
			$ar["age"]=(string)$st->age;
			$ar["university"]=(string)$st->university;
			$data[]=$ar;
		}
	}


?>