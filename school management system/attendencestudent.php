<?php

include('config.php');

if(isset($_POST['create']))
{


$id=$_POST['id'];
$name = $_POST['name'];
$time = $_POST['time'];
$select = $_POST['select'];



$sql = "INSERT INTO `attendencestudent` (`id`, `name`, `time`, `select`) VALUES ('$id', '$name', '$time', '$select')";


$result = mysqli_query($conn, $sql);

if($result){
    header("location: Attendencereport.php");
   

}else{
    echo ' no insert data in database';
}
}


?>