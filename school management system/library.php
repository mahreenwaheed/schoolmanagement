<?php

include('config.php');


if(isset($_POST['create']))
{

$stdname = $_POST['stdname'];
$class=$_POST['class'];
$day = $_POST['day'];
$time=$_POST['time'];
$year = $_POST['year'];



$sql = "INSERT INTO  library(`stdname`, `class`,`day`,`time`,`year`) VALUES ('$stdname','$class','$day','$time','$year')";

// $sql = "SELECT * FROM admission";

$result = mysqli_query($conn, $sql);

if($result){
    echo "insert data in database";
   

}else{
    echo ' no insert data in database';
}
}
?>