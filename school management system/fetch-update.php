<?php

include 'config.php';

$input = file_get_contents('php://input');
$decode = json_decode($input, true);




$id = $decode['id'];
$exam = $decode['exam'];
$quiz = $decode['quiz'];
$exam_from = $decode['exam_from'];
$exam_to = $decode['exam_to'];
$result_pub = $decode['result_pub'];
$time_duration = $decode['time_duration'];
$attempt = $decode['attempt'];
$percentage = $decode['percentage'];
$description = $decode['description'];

$sql = "UPDATE examonline SET exam = '{$exam}', quiz= '{$quiz}',exam_from = '{$exam_from}', 
exam_to = '{$exam_to}' , 
result_pub = '{$result_pub}', 
time_duration = '{$time_duration}',  attempt = '{$attempt}', percentage = '{$percantage}', description = '{$description}' WHERE id = '{$id}'";


if(mysqli_query($conn,$sql)){
	echo json_encode(array('update' => 'success'));
}else{
	echo json_encode(array('update' => 'failed'));
}

?>