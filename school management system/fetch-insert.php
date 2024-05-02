<?php


include('config.php');


$input =  file_get_contents('php://input');

$decode = json_decode($input,true);



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

$sql = "INSERT INTO `examonline`(`id`, `exam`, `quiz`, `exam_from`, `exam_to`, `result_pub`, `time_duration`, `attempt`, `percentage`, `description`) VALUES ('$id','$exam','$quiz','$exam_from','$exam_to','$result_pub','$time_duration','$attempt','$percentage','$description')";

if(mysqli_query($conn, $sql)){
    echo json_decode(array('inserted' => 'success'));
}else{
    echo json_decode(array('inserted' => 'failed'));
}


// if(isset($_POST['create'])){



// $exam = $_POST['exam'];
// $quiz = $_POST['quiz'];
// $exam_from = $_POST['exam_from'];
// $exam_to = $_POST['exam_to'];
// $result_pub = $_POST['result_pub'];
// $time_duration = $_POST['time_duration'];
// $attempt = $_POST['attempt'];
// $percentage = $_POST['percentage'];
// $answer_word = $_POST['answer_word'];
// $description = $_POST['description'];

// $sql = "INSERT INTO examonline( `exam`, `quiz`, `exam_from`, `exam_to`, `result_pub`, `time_duration`, `attempt`, `percentage`, `answer_word`, `description`) VALUES ('$exam','$quiz','$exam_from','$exam_to','$result_pub','$time_duration','$attempt','$percentage','$answer_word','$description' )";

// $result = mysqli_query($conn, $sql);

//     if($result){
//         // header("location: Attendencereport.php");
//    echo "insert data in database ";

//     }else{
//         echo ' no insert data in database';
//     }

   
// }

?>