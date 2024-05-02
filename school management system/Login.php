<?php      
    include('config.php');  

    $name = $_POST['name'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
   
        // $name = mysqli_real_escape_string($conn, $name);  
        // $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * FROM login where name = '$name' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          



        if($count == 1){  
            header("location: login.html");
        }  
        else{  
           header("location: login form.php");
        }     
?>  