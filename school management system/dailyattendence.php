<?php

include('config.php');

if(isset($_POST['create']))
{


$class=$_POST['class'];
$date = $_POST['date'];



$sql = "INSERT INTO  student(`class`, `date`) VALUES ('$class','$date')";


$result = mysqli_query($conn, $sql);

if($result){
    echo "insert data in database";
   

}else{
    echo ' no insert data in database';
}
}


?>