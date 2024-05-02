<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .form-container{
         
            position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)) ;
    width: 380px;
    padding: 50px 50px;
    border-radius: 10px;
    box-shadow: 7px 7px 60px rgb(92, 91, 91);
        }
        .button{
            text-align: center;
        }
    </style>
</head>
<body>
   <div class="form-container">
    <form  action="login.php" method="post">
       
  <label  for="name">UserName:</label>   
<input  type="name" placeholder="Enter UserName" name="name" required>
<br>
<br>
<label for="password"> Password:</label>   
<input type="password" placeholder=" Enter password" name="password" required>
<br>
<br>
<div class="button">
    <button type="sign-up"  value="Submit" name="create" >
        Login</button>
    </div>
    </form>
   </div>

</body>
</html>

