<!DOCTYPE html>
<html lang="en">
<head>
<title>Create Quiz</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/createQuizStylesheet">

</head>


<body>

<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="<?php echo URL; ?>teacherHome"><i class="fas fa-home"></i>Dashboard</a></li>
	  <li><a href="<?php echo URL; ?>materials"><i class="fas fa-upload"></i>Upload Materials</a></li>
	  <li><a href="<?php echo URL; ?>createQuiz"><i class="fas fa-question"></i>Quizzes</a></li>
	  <li><a href="<?php echo URL; ?>addNewClass"><i class="fas fa-users"></i>New Class</a></li>
	  <li><a href="<?php echo URL; ?>reschedule"><i class="far fa-calendar-alt"></i>Re-schedule</a></li>
	  <li><a href="<?php echo URL; ?>paperMarkerRegistration"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
	  <li><a href="<?php echo URL; ?>salaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
	</ul>
	
	
  </div>
  <div class="headerClass">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-question"></i>Quizzes</h2>
	  <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
	  <div class="userDiv" style="margin-top:7px;float: right;margin-right: 45px;"><i class="fas fa-user fa-2x"></i>Hello Teacher ;-)</div>
	  
  </div>
  
  
  
  <div class="middle" style="background-color:white;">
	<form id="regForm" method="post" action="<?php echo URL; ?>createQuiz/create">
	  <h1>Create Quiz:</h1>
	  <div>Quiz Title:
		<p><input type="text" name="topic"></p><br />
		Time Limit:
		<p><input type="text" name="time"></p>
	  </div>
	  <!-- One "tab" for each step in the form: -->
	  <div class="tab" id="qlist">Question:
		<p><textarea rows="4" cols="90" name="ques"></textarea></p>
		
		<table border="0" width="100%" cellpadding="10px">
			<tbody>
				<tr>
					<td><input placeholder="Choice 1..." oninput="this.className = ''" name="ans1"></td>
					<td><input type="radio"</td>
				</tr>
				<tr>
					<td><input placeholder="Choice 2..." oninput="this.className = ''" name="ans2"></td>
					<td><input type="radio"</td>
				</tr>
				<tr>
					<td><input placeholder="Choice 3..." oninput="this.className = ''" name="ans3"></td>
					<td><input type="radio"</td>
				</tr>
				<tr>
					<td><input placeholder="Choice 4..." oninput="this.className = ''" name="ans4"></td>
					<td><input type="radio"</td>
				</tr>
				<tr>
					<td><input placeholder="Choice 5..." oninput="this.className = ''" name="ans5"></td>
					<td><input type="radio"</td>
				</tr>
			</tbody>
		</table>
		<br />
		
	  </div>

	  <div style="overflow:auto;">
		<div style="float:right;">
		  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
		  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
		  <button type="button" id="next" onclick="myFunction()">New Question</button>
		</div>
	  </div>
	  <!-- Circles which indicates the steps of the form: -->
	  <div style="text-align:center;margin-top:40px;">
		<span class="step"></span>
		<span class="step"></span>
		<span class="step"></span>
		<span class="step"></span>
	  </div>
	</form>
  </div>
  
  
  
</div>



</body>


<script>
var count = 0;
function myFunction(){
	if(count == 0){
		var itm = document.getElementById("qlist");
	}else{
		var itm = document.getElementById("qlist").lastChild;
	}
	
	var cln = itm.cloneNode(true);
	document.getElementById("qlist").appendChild(cln);
	count++;
}







var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</html>