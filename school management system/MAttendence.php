<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
        }
 
        table, td, th {
  border: 1px solid ;
  width: 50%;

border-collapse: collapse;
margin-left:auto;
margin-right:auto;

}


/* table {

  
  width: 50%;

  border-collapse: collapse; */

/* } */
    </style>
</head>
<body style="background-color:pink;">
    

<div style='text-align:center';>

<form action="dailyattendence.php" method = "post">

<h1>Daily Attendence</h1>

<label style='text-align:center;'>All Classes</label>
<select name="class"  id="class">
        <option>...select...</option>
        <option> <?php $query=mysqli_query($conn,"select * from student")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){
	?>
	<option><?php echo $row['class']; ?></option>
	<?php } ?> </option>
      
</select>


<label style='text-align:center;'>Date</label>
  <select name="date"  id="date">
          <option>...select...</option>
          <option> <?php $query=mysqli_query($conn,"select * from student")or die(mysqli_error());
  while($row=mysqli_fetch_array($query)){
    ?>
    <option><?php echo $row['date']; ?></option>
    <?php } ?> </option>
          </select>
 

 <button  type="student"  value="Submit" name="create" style="background-color:blue; color:white;">Get Student</button>

 <br>
 <br>
 <br>

 </form>


 <form method="POST" action="phpsearch.php">
    <input type="text" name="search" placeholder="Enter your search term">
  
    <input type="submit" value="Search">
</form>




<br>
<br>
<br>
<br>
<br>
<form action="attendencestudent.php" method="post">
<table >
  <tr>
    <th>Student ID</th>
    <th>Student Name</th>
    <th>In Time</th>
    <th>Out Time</th>
    <th>Status</th>
  </tr>
  <tr>

   <td><input type="text" name="id"  placeholder='1' /></td>
    <td><input type="text" name="name"  placeholder='khizra' /></td>
    <td><input type="text" name="time"  placeholder='2.00' /></td>
    <td><input type="text"   name="time"  placeholder='3.00' /></td>
   <td><select name="select" id="select">
   <option >select</option>
   <option >weakly</option>
    <option >leave</option>
   </select></td>
  </tr>
  <tr>
  <td><input type="text" name="id"  placeholder='2' /></td>
    <td><input type="text" name="name"  placeholder='mahreen' /></td>
    <td><input type="text" name="time"  placeholder='3.00' /></td>
    <td><input type="text" name="time"  placeholder='4.00' /></td>
    <td><select name="select" id="select">
    <option >select</option>
    <option >weakly</option>
    <option >leave</option>
   </select></td>

  </tr>

  <tr>
    <td><input type="text" name="id"  placeholder='3' /></td>
    <td><input type="text" name="name"  placeholder='kinza' /></td>
    <td><input type="text" name="time"  placeholder='4.00' /></td>
    <td><input type="text"   name="time"  placeholder='5.00' /></td>
    <td><select name="select" id="select">
    <option >select</option>
    <option >weakly</option>
    <option >leave</option>
   </select></td>
  </tr>
  
</table>
<br>
<br>
<button  type="student"  value="Submit" name="create" style="background-color:blue; color:white;">Submit</button>

</form>




</div>
</body>
</html>