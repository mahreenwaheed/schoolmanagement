<?php include('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left:auto;
  margin-right:auto;
}
    </style>
</head>
<body>

<form  style= "text-align:center;" action="report.php" method = "post">
<h1 style="text-align:center;">Attendence Report</h1>
<label style='text-align:center;'>All Classes</label>
<select name="class"  id="class">
        <option>...select...</option>
    <option><?php $query = mysqli_query($conn, "select * from attentendencereport")or die(mysqli_error());
  while($row = mysqli_fetch_array($query)){
    ?>
<option> <?php echo $row['class'] ;?> </option>
<?php }?>  </option>
</select>


<label style='text-align:center;'>Year</label>
  <select name="year"  id="year">
          
          <option>2021</option>
          <option> <?php $query = mysqli_query($conn, "select* from  attentendencereport") or die(mysqli_error());
          while($row  = mysqli_fetch_array($query)){
          ?>
<option><?php   echo $row['year']; ?>
        </option><?php }?></option>
        
  </select>

  <label style='text-align:center;'>Month</label>
  <select name="month"  id="month">
          <option>January</option>
          <option> <?php $query = mysqli_query($conn, "select* from  attentendencereport") or die(mysqli_error());
          while($row  = mysqli_fetch_array($query)){
          ?>
<option><?php   echo $row['month']; ?>
        </option><?php }?></option>
        
        
        
  </select>
  


 <button  type="student"  value="Submit" name="create" style="background-color:blue; color:white;">Show Report</button>
  </form>

<br>
<br>
  <form  action="" method="post">
<table style="background-color:pink;"  >
  <tr>
    <th>Student ID</th>
    <th>Students </th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
    <th>11</th>
    <th>12</th>
    <th>13</th>
    <th>14</th>
    <th>15</th>
    <th>16</th>
    <th>17</th>
    <th>18</th>
    <th>19</th>
    <th>20</th>
    <th>21</th>
    <th>22</th>
    <th>23</th>
    <th>24</th>
    <th>25</th>
    <th>26</th>
    <th>27</th>
    <th>28</th>
    <th>29</th>
    <th>30</th>
    <th>31</th>


  </tr>
  <tr>

   <td>1</td>
    <td>Std Monthly</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;" >ON</td>
   <td style="background-color:yellow;">L</td>
   <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:Red;">OFF</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:yellow;">L</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:Red;">OFF</td>
    <td  style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:yellow;">L</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:Red;">OFF</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>

  </tr>
  <tr>
  <td>2</td>
    <td >Std Weekly</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
   <td style="background-color:green;">ON</td>
   <td style="background-color:green;">ON</td>
    <td style="background-color:Red;">OFF</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:yellow;">L</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:Red;">OFF</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:yellow;">L</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:Red;">OFF</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:yellow;">L</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
  


  </tr>

  <tr>
    <td>3</td>
    <td>Std Hourly</td>
    <td></td>
    <td style="background-color:Red;">OFF</td>
   <td style="background-color:green;">ON</td>
   <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:Red;">OFF</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:yellow;">L</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:Red;">OFF</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:yellow;">L</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:Red;">OFF</td>
    <td style="background-color:green;">ON</td>
    <td style="background-color:green;">ON</td>
  </tr>



</table>
</body>
</html>

