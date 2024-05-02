<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Table Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>


 
  
<table>
    <tr>
        <th>id</th>
        <th>exam</th>
        <th>Quiz</th>
        <th>Exam From</th>
        <th>Exam To</th>
        <th>Result Published</th>
        <th>Time Duration</th>
        <th>Attempts</th>
        <th>percantage</th>
        <th>description</th>
        <th>Edit</th>
    </tr>
 <tr>
        <td >1</td>
        <td >cs</td>
        <td>3</td>
        <td >10/2/2023</td> 
        <td>21/2/1023</td>
        <td>2024</td>
        <td>2 hours</td>
        <td>1</td>
        <td>50%</td>
        <td>Hello world</td>
        <td><button  onclick="editRow(this)"> 
        Edit</button></td>
    </tr>
    <!-- Add more rows as needed -->
</table>
 




<script>
    function editRow(button) {
        var row = button.parentNode.parentNode;
        var cells = row.getElementsByTagName("td");

        // Get the current values
        var id = cells[0].innerText;
        var exam = cells[1].innerText;
         var quiz = cells[2].innerText;
        var exam_from= cells[3].innerText;
        var exam_to = cells[4].innerText;
        var result_pub = cells[5].innerText;  
        var time_duration = cells[6].innerText;
        var attempt = cells[7].innerText;
        var percentage = cells[8].innerText;
        var description = cells[9].innerText;


        // Create input elements
        var idInput = document.createElement("input");
        idInput.value = id;

        var examInput = document.createElement("input");
        examInput.value = exam;

         var quizInput = document.createElement("input");
        quizInput.value = quiz;

        var exam_fromInput = document.createElement("input");
        exam_fromInput.value = exam_from;

        var exam_toInput = document.createElement("input");
        exam_toInput.value = exam_to;

        var result_pubInput = document.createElement("input");
        result_pubInput.value = result_pub;
        
        var time_durationInput = document.createElement("input");
        time_durationInput.value = time_duration;

        var attemptInput = document.createElement("input");
        attemptInput.value = attempt;

        var percentageInput = document.createElement("input");
        percentageInput.value = percentage;

        var descriptionInput = document.createElement("input");
        descriptionInput.value = description;

        
        // Replace cell content with input elements
        cells[0].innerHTML = "";
        cells[0].appendChild(idInput);

        cells[1].innerHTML = "";
        cells[1].appendChild(examInput);

        cells[2].innerHTML = "";
        cells[2].appendChild(quizInput);

        cells[3].innerHTML = "";
        cells[3].appendChild(exam_fromInput);

        cells[4].innerHTML = "";
        cells[4].appendChild(exam_toInput);

        cells[5].innerHTML = "";
        cells[5].appendChild(result_pubInput);
        
        cells[6].innerHTML = "";
        cells[6].appendChild(time_durationInput);

        cells[7].innerHTML = "";
        cells[7].appendChild(attemptInput);

        cells[8].innerHTML = "";
        cells[8].appendChild(percentageInput);

        cells[9].innerHTML = "";
        cells[9].appendChild(descriptionInput);

        

        // Change button to Save
        button.innerHTML = "Save";
        button.onclick = function() {
            saveRow(row);
        };
    }

    function saveRow(row) {
        var cells = row.getElementsByTagName("td");

        // Get the edited values
        var newid = cells[0].getElementsByTagName("input")[0].value;
        var newexam = cells[1].getElementsByTagName("input")[0].value;
         var newquiz = cells[2].getElementsByTagName("input")[0].value;
        var newexam_from = cells[3].getElementsByTagName("input")[0].value;
        var newexam_to = cells[4].getElementsByTagName("input")[0].value;
        var newresult_pub = cells[5].getElementsByTagName("input")[0].value;

        var newtime_duration = cells[6].getElementsByTagName("input")[0].value;
        var newattempt = cells[7].getElementsByTagName("input")[0].value;
        var newpercentage = cells[8].getElementsByTagName("input")[0].value;
        var newdescription= cells[9].getElementsByTagName("input")[0].value;

        // Update cell content
        cells[0].innerHTML = newid;
        cells[1].innerHTML = newexam;
         cells[2].innerHTML =  newquiz;
        cells[3].innerHTML = newexam_from;
        cells[4].innerHTML =  newexam_to;
        cells[5].innerHTML = newresult_pub;
        cells[6].innerHTML =  newtime_duration;
        cells[7].innerHTML = newattempt;
        cells[8].innerHTML = newpercentage;
        cells[9].innerHTML = newdescription;
     

   

        // Change button back to Edit
        cells[2].getElementsByTagName("button")[0].innerHTML = "Edit";
        cells[2].getElementsByTagName("button")[0].onclick = function() {
            editRow(this);
        };
    }
</script>

</body>
</html>

