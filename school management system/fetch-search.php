<?php

include 'config.php';

$search = $_GET['search'];

$sql = "SELECT examonline.id,examonline.exam,examonline.quiz, examonline.exam_from,  examonline.exam_to,  examonline.result_pub,  examonline.time_duration, 
 examonline.attempt,  examonline.percentage,  examonline.description, exam.id 
FROM examonline LEFT JOIN exam ON exam.id = examonline.id 
WHERE concat(exam,quiz) LIKE '%{$search}%'";

$result = mysqli_query($conn, $sql) or die("SQL Failed");
$output = [];

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $output[] = $row;
  }
}else{
    $output['empty'] = ['empty'];
}

mysqli_close($conn);

echo json_encode($output);

?>