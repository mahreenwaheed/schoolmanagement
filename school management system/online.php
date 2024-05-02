

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exam Management System</title>
  <link rel="stylesheet" href="online.css">
</head>
<body>
  
    <div id="header">
      <h2>Online Exam</h2>
      <div id="search-bar">
        <label>Search :</label>
        <input type="text" id="search" onkeyup="load_search()" autocomplete="off">
      </div>
    </div>
    
    <div id="table-data">
      <h3>All Records</h3>
      <button class="add_new" onclick="addNewModal()">Add New</button>
      <table border="1" width="100%" cellspacing="0" cellpadding="10px">
        <thead>
          <tr>
          
          <th width="60px;" >ID</th>
        <th width="60px;" >Exam</th>
        <th>Quiz</th>
        <th>Exam From</th>
        <th>Exam To</th>
        <th>Result Published</th>
        <th></th>
        <th>Time Duration</th>
        
        <th>Attempts</th>
        <th>percentage</th>
        <th>desciption</th>
<th></th>
<th></th>
<th></th>
      
          </tr>
        </thead>
        <tbody id="tbody"></tbody>
      </table>
    </div>

    <div id="error-message"></div>
    <div id="success-message"></div>
  </div>


  <!-- modal for show add new -->
  <div id="addModal">
    <div id="modal-form" >
      <h2>Add New Form</h2>
      <form   style="
    height: 150vh;
  
    background-position: center;
    background-size: cover;
    margin: auto;" method="POST" id="addModal-form">
        <table cellpadding="10px" width="100%" id="add-form">
        <tr>
            <td width='90px'>id</td>
            <td><input type='text' id='id' name="id">
               
            </td>
          </tr>
          <tr>
            <td width='90px'>exam</td>
            <td><input type='text' id='exam'  name="exam"></td>
          </tr>
          <tr>
            <td width='90px'>quiz</td>
            <td>
            <input type='text' id='quiz' name="quiz">
            </td>
          </tr>
          <tr>
            <td width='90px'>exam_from</td>
            <td><input type='text' id='exam_from' name="exam_from"></td>
          </tr>
          <tr>
            <td width='90px'>exam_to</td>
            <td><input type='text' id='exam_to' name="exam_to"></td>
          </tr>
          <tr>
            <td width='90px'>result_pub</td>
            <td><input type='text' id='result_pub' 
            name="resulr_pub"></td>
          </tr>
          <tr>
            <td width='90px'>time_duration</td>
            <td><input type='text' id='time_duration'
             name="time_duration"></td>
          </tr>
          <tr>
            <td width='90px'>attempt</td>
            <td><input type='text' id='attempt'
             name="attempt"></td>
          </tr>
          <tr>
            <td width='90px'>percentage</td>
            <td><input type='text' id='percentage'
          name="percentage"></td>
          </tr>
          <tr>
            <td width='90px'>description</td>
            <td><input type='text' id='description' 
            name="description"></td>
          </tr>
  
         
          <tr>
            <td></td>
            <td><button type="button" onclick='submit_data()' id='new-submit'>Save</button></td>
          </tr>
          </tr>
        </table>
      </form>
      <div id="close-btn" onclick="hide_modal()">X</div>
    </div>
  </div>



 

  <!-- modal for show edit -->
  
  <div id="modal">
    <div id="modal-form">
      <h2>Edit Form</h2>
      <form method="POST">
        <table cellpadding="10px" width="100%" id="edit-form">
          <tr>
            <td width='90px'>id</td>
            <td><input type='text' id='id' autocomplete="off">
                <input type='text' id='id' name="id" hidden>
            </td>
          </tr>
          <tr>
            <td width='90px'>exam</td>
            <td><input type='text' id='exam'  name="exam" autocomplete="off"></td>
          </tr>
          <tr>
            <td width='90px'>quiz</td>
            <td>
            <input type='text' id='quiz' name="quiz" autocomplete="off">
            </td>
          </tr>
          <tr>
            <td width='90px'>exam_from</td>
            <td><input type='text' id='exam_from' name="exam_from" autocomplete="off"></td>
          </tr>
          <tr>
            <td width='90px'>exam_to</td>
            <td><input type='text' id='exam_to'
            name="exam_id"  autocomplete="off"></td>
          </tr>
          <tr>
            <td width='90px'>result_pub</td>
            <td><input type='text' id='result_pub' 
            name="result_pub" autocomplete="off"></td>
          </tr>
          <tr>
            <td width='90px'>time_duration</td>
            <td><input type='text' id='time_duration'
            name="time_duration"  autocomplete="off"></td>
          </tr>
          <tr>
            <td width='90px'>attempt</td>
            <td><input type='text' id='attempt'
            name="attempt"  autocomplete="off"></td>
          </tr>
          <tr>
            <td width='90px'>percentage</td>
            <td><input type='text' id='percentage'
            name="percentage"  autocomplete="off"></td>
          </tr>
          <tr>
            <td width='90px'>description</td>
            <td><input type='text' id='description' 
            name="description" autocomplete="off"></td>
          </tr>
          <tr>
            <td></td>
            <td><button type="button" onclick='modify_data()' id='edit-submit'>Save</button></td>
          </tr>
        </table>
      </form>
      <div id="close-btn" onclick="hide_modal()">X</div>
    </div>
  </div>

  
<script type="text/javascript" src="js/fetch.js"></script>
</body>
</html>
