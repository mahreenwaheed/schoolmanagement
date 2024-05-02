<?php


include('config.php');

if(isset($_POST['create'])){


    $class = $_POST['class'];
    $year = $_POST['year'];
    $month = $_POST['month'];

    $sql = "INSERT INTO `attentendencereport`(`class`, `year`, `month`) VALUES ('$class','$year','$month')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: Attendencereport.php");
//    echo "insert data in database ";

    }else{
        echo ' no insert data in database';
    }
}

?>