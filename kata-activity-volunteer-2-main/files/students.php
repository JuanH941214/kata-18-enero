<?php 

$students = [];
$jsonData = file_get_contents('students.json');
$data = json_decode($jsonData, true);

foreach($data['alumnes'] as $name ) {
	$students[] = "Student ".$name['nom'];
}



?>