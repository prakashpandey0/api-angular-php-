<?php
$conn = mysqli_connect("localhost","root","","api") or die("connection error");

$query = mysqli_query($conn,"Select * from user");
	$name = [];
	$phone = [];
	
if($query){
	$records = [];
	while ($record = mysqli_fetch_assoc($query)) {
		$records[] = $record; 
		
	}
}

//print_r(json_encode($records))  or die("sorry no data");
echo json_encode($records);







?>