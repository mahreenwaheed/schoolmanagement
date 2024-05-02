<?php
include('config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            text-align:center;
            top: 50%;
            left:50%;
            position: absolute;
            padding:50px 50px;
            transform:translate(-50%, -50%);
            box-radius:17px;
            box-shadow:7px 7px 60px rgb(60,60,60);
            background:linear_gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5))
  
        }
       
    </style>
</head>
<body style="
    height: 150vh;
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(library.jpg);
    background-position: center;
    background-size: cover;
    margin: auto;">
<h1 style="text-align:center; color:white">School Library Information</h1>


<form  style="color:white;" action="Library.php" method="post" class="container">

    <label>Student Name</label>
    <select name="stdname" class="span3" id="stdname">
        <option>...select...</option>

        <option> <?php $query=mysqli_query($conn,"select * from library")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){
	?>
	<option><?php echo $row['stdname']; ?></option>
	<?php } ?> </option>
        <!-- <option>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option>Friday</option>
        <option>Satursday</option>
        <option>Sunday</option> -->
    </select>
<br>
<br>
    <label>Class</label>
    <select name="class" class="span3" id="class">
        <option>...select...</option>
<option><?php $query= mysqli_query($conn, "select * from library")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){
?>
<option><?php echo $row['class']; ?></option>
	<?php } ?> </option>

        <!-- <option>1 Match</option>
        <option>10 october</option> -->
    
    </select>

    <br>
    <br>
    <label>Day</label>
    <select name="day" class="span3" id="day">
        <option>...select...</option>
        <option> <?php $query=mysqli_query($conn,"select * from library")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){
	?>
	<option><?php echo $row['day']; ?></option>
	<?php } ?> </option>
        <!-- <option>5 April</option>
        <option>15 September</option> -->
    
    </select>

    <br>
    <br>
    <label>Time</label>
    <select name="time" class="span3" id="time">
        <option>...select...</option>
        <option> <?php $query=mysqli_query($conn,"select * from library")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){
	?>
	<option><?php echo $row['time']; ?></option>
	<?php } ?> </option>
        <!-- <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option> -->
    </select>
    
    <br>
    <br>
    <label> year</label>
    <select name="year" class="span3" id="year">
        <option>...select...</option>
        <option> <?php $query=mysqli_query($conn,"select * from library")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){
	?>
	<option><?php echo $row['year']; ?></option>
	<?php } ?> </option>
        <!-- <option>2021</option>
        <option>2022</option>
        <option>2023</option>
        <option>2020</option>
        <option>2019</option>
        <option>2018</option>
        <option>2017</option>
        <option>2016</option>
        <option>2015</option>
        <option>2014</option> -->
    </select>

<br>
<br>

   <button  type="admission"  value="Submit" name="create"> save</button>

    </div>
    </form>
</body>
</html>