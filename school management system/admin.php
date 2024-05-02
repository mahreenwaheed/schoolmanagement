<?php
$conn = mysqli_connect("localhost","root","","school management system");

    $name = $_POST['name'];
$password=$_POST['password'];

$sql = " SELECT* FROM login Where name = '$name' and password= '$password'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);



if($count == 1){  
            header("location: Admin.html");
        }  
        else{  
           header("location: Admin form.html");
        }    
    
?>