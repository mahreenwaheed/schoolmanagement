<?php
include 'config.php';

$sql = "SELECT  examonline.id, examonline.exam,examonline.quiz,examonline.exam_from,examonline.exam_to,examonline.result_pub,examonline.time_duration,
examonline.attempt,examonline.percentage,
examonline.description FROM examonline LEFT JOIN  exam ON  exam.id = examonline.id ";

$result = mysqli_query($conn,$sql);
$output = [];
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){
$output[]= $row;
  }
}else{
  $output['empty'] = ['empty'];
}

 mysqli_close($conn);

 echo json_encode($output);












?>