// function for load student record in table on page load

function loadTable(){ 
	fetch('load-table.php')
	.then((response) => response.json())
	.then((data)=>{
		var tbody = document.getElementById('tbody');
		if(data['empty']){
			tbody.innerHTML = '<tr><td colspan="6" align="center"><h3>No Record Found.</h3></td></tr>'
		}else{
			var tr = '';
			for(var i in data){
				tr += `<tr>
		            <td align="center">${data[i].id}</td>
		            <td>${data[i].exam}</td>
                    <td>${data[i].quiz}</td>
		            <td>${data[i].exam_from}</td>
		            <td>${data[i].exam_to}</td>
                    <td>${data[i].exam_from}</td>
		            <td>${data[i].result_pub}</td>
                    <td>${data[i].time_duration}</td>
		            <td>${data[i].attempt}</td>
                    <td>${data[i].percentage}</td>
                    <td>${data[i].description}</td>
		          
		            <td align="center"><button class="edit-btn" onclick="editRecord(${data[i].id})">Edit</button></td>
		            <td align="center"><button class="delete-btn" onclick="deleteRecord(${data[i].id})">Delete</button></td>
		          </tr>`;
			}
			tbody.innerHTML = tr;
		}
	})
	.catch((error) => {
		show_message('error',"Can't Fetch Data");
	});
}

loadTable(); // Load Student Record on Page opening

// Open Add new student Modal Box 
// Open Add new student Modal Box 
function addNewModal(){
	var addModal = document.getElementById("addModal");
	addModal.style.display = 'block';

	fetch('fetch-class-field.php')
	.then((response) => response.json())
	.then((data)=>{
			var select = document.getElementById('id');
			var option = '<option value="0" disabled selected>Select Class</option>';
			for(var i=0; i < data.length; i++){
				option += `<option value="${data[i].id}">${data[i].id}</option>`;
			}
			select.innerHTML = option;
	})
	.catch((error) => {
		show_message('error',"Can't Fetch Class List");
	});
}

// Hide Modal Box / Popup Box
function hide_modal(){
	var addModal = document.getElementById("addModal");
	addModal.style.display = 'none';

	var editModal = document.getElementById("modal");
	editModal.style.display = 'none';
}

// Add Student Record
function submit_data(){
	var id = document.getElementById('id').value;
	var exam = document.getElementById('exam').value;
	var quiz = document.getElementById('quiz').value;
	var exam_from = document.getElementById('exam_from').value;
	var exam_to = document.getElementById('exam_to').value;
	   var result_pub = document.getElementById('result_pub').value;
	var	time_duration = document.getElementById('time_duration').value;
		var attempt = document.getElementById('attempt').value;
	  var  percentage = document.getElementById('percentage').value;  
	var description = document.getElementById('description').value;

	if(id === ''|| exam === ''|| quiz === ''|| exam_from === '' || exam_to === ''|| result_pub === ''|| time_duration === ''|| attempt === '' || percentage === ''||  description === ''){
		alert('Please Fill All The Fields');
		return false;
	}else{
		var formdata = {
			'id': id,
						'exam' : exam,
			            'quiz': quiz,
						'exam_from': exam_from,
						'exam_to' :exam_to,
			            'result_pub': result_pub,
						'time_duration': time_duration,
						'attempt' :attempt,
			            'percentage': percentage,
						'description' : description
		}

		jsondata = JSON.stringify(formdata);

		fetch('fetch-insert.php',{
			method : 'POST',
			body : jsondata,
			headers: {
				'Content-type' : 'application/json',
			}
		})
		.then((response) => response.json())
		.then((result)=>{
				if(result.insert == 'success'){
					show_message('success','Data Inserted Successfully.');
					loadTable();
					hide_modal();
					document.getElementById('addModal-form').reset();
				}else{
					show_message('error',"Data Can't Inserted.");
					hide_modal();
				}
		})
		.catch((error) => {
			show_message('error',"Data not Inserted.");
		});
	}
}





	


// // Open Update Modal Box and show Student record in it
function editRecord(id){
	var editModal = document.getElementById("modal");
	editModal.style.display = 'block';

	fetch('fetch-edit.php?editId=' + id)
	.then((response) => response.json())
	.then((data)=>{
		var option = '';
		for(var i in data['response']){
			
				document.getElementById('id').value = data['response'][i].id;
				document.getElementById('exam').value = data['response'][i].exam;
				document.getElementById('quiz').value = data['response'][i].quiz;
				document.getElementById('exam_from').value = data['response'][i].exam_from;
				document.getElementById('exam_to').
				value = data['response'][i].exam_to;
				document.getElementById('result_pub').value = data['response'][i].result_pub;
				document.getElementById('exam_from').value = data['response'][i].exam_from;
				document.getElementById('time_duration').value = data['response'][i].time_duration;
				document.getElementById('attempt').value = data['response'][i].attempt;
				document.getElementById('percentage').value = data['response'][i].percentage;
				document.getElementById('description').value = data['response'][i].description;
				

			var selected = '';
			for(var j in data['class']){
				if(data['class'][j].cid === data['response'][i].id){
					selected = 'selected';
				}else{
					selected = '';
				}
				option += `<option ${selected} value="${data['class'][j].id}">${data['class'][j].id}</option>`;
			}
		}
			document.getElementById('id').innerHTML = option;
		
	})
	.catch((error) => {
		show_message('error',"Can't Fetch Data");
	});
}




	
// // Update student record
function modify_data(){
	var id = document.getElementById('id').value;
	 var exam = document.getElementById('exam').value;
	 var quiz = document.getElementById('quiz').value;
	var exam_from = document.getElementById('exam_from').value;
	var exam_to = document.getElementById('exam_to').value;
  var  result_pub = document.getElementById('result_pub').value;
var	time_duration = document.getElementById('time_duration').value;
	 var attempt = document.getElementById('attempt').value;
 var   percentage = document.getElementById('percentage').value;  
	var description = document.getElementById('description').value;


	if(id === ''|| exam === ''|| quiz === ''|| exam_from === '' || exam_to === ''|| result_pub === ''|| time_duration === ''|| attempt === '' || percentage === ''||  description === ''){
		alert("fill all the record");
		return false;
	}else{
		var formdata = {
			'id': id,
			'exam' : exam,
            'quiz': quiz,
			'exam_from': exam_from,
			'exam_to' :exam_to,
            'result_pub': result_pub,
			'time_duration': time_duration,
			'attempt' :attempt,
            'percentage': percentage,
			'description' : description
		}

		jsondata = JSON.stringify(formdata);

		fetch('fetch-update.php',{
			method : 'PUT',
			body : jsondata,
			headers :{
				'content_type' : 'application/json',
			}
		})
		.then((response) => response.json())
		.then((result)=>{
             if(result.update == 'success'){
				show_message('success', 'data updated');
				loadTable();
				hide_modal();
				document.getElementById('addModel-form').reset();
			 }else{
				show_message('error', 'data not updated');
				hide_modal();
			 }
		})

.catch((error)=>{
    show_message('error', 'data error not updated');
});
	}
}




// Delete student record
function deleteRecord(id){
	if(confirm("Are you sure want to Delete this record ?")){
		fetch('fetch-delete.php?delId=' + id,{
			method : 'DELETE'
		})
		.then((response) => response.json())
		.then((result)=>{
				if(result.delete == 'success'){
					show_message('success','Deleted Successfully.');
					loadTable();
				}else{
					show_message('error',"Can't Delete Data.");
				}
		})
		.catch((error) => {
			show_message('error',"Data not Deleted.");
		});
	}
}




// Search student record
function load_search(){
	var search = document.getElementById('search').value;
	if(search === ''){
		loadTable();
		return false;
	}else{
	fetch('fetch-search.php?search=' + search)
	.then((response) => response.json())
	.then((data)=>{
		var tbody = document.getElementById('tbody');
		if(data['empty']){
			tbody.innerHTML = '<tr><td colspan="6" align="center"><h3>No Record Found.</h3></td></tr>'
		  }else{
			var tr = ''	;
			for(var i in data){
				tr += `<tr>
				            <td align="center">${data[i].id}</td>
				 		            <td>${data[i].exam} ${data[i].quiz}</td>
					            <td>${data[i].exam_from}</td>
					            <td>${data[i].exam_to}</td>
								<td>${data[i].result_pub}</td>
								<td>${data[i].time_duration}</td>
								<td>${data[i].attempt}</td>
								<td>${data[i].percentage}</td>
								<td>${data[i].description}</td>
						            <td align="center"><button class="edit-btn" onclick="editRecord(${data[i].id})">Edit</button></td>
				            <td align="center"><button class="delete-btn" onclick="deleteRecord(${data[i].id})">Delete</button></td>
				          </tr>`;
			}
			tbody.innerHTML = tr;
			

			}	 
		 
		})

		.catch((error)=>{
			show_message('error' , 'cannot be fecth data');
		});
	}
}



//show error / success message
function show_message(type,text){
	if(type=='error'){
		var message_box = document.getElementById('error-message');
	}else{
		var message_box = document.getElementById('success-message');	
	}
	message_box.innerHTML = text;
	message_box.style.display = "block";
	setTimeout(function(){
		message_box.style.display = "none";
	},3000);
}