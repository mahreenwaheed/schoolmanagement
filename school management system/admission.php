<?php

include('config.php');

if(isset($_POST['create']))
{

$day = $_POST['day'];
$start=$_POST['start'];
$end = $_POST['end'];
$class=$_POST['class'];
$year = $_POST['year'];



$sql = "INSERT INTO  admission(`day`, `start`,`end`,`class`,`year`) VALUES ('$day','$start','$end','$class','$year')";

// $sql = "SELECT * FROM admission";

$result = mysqli_query($conn, $sql);

if($result){
    echo "insert data in database";
   

}else{
    echo ' no insert data in database';
}
}
?>