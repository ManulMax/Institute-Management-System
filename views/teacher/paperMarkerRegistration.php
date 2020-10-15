<!DOCTYPE html>
<html lang="en">
<head>
<title>Teacher Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../public/css/teacherNavStylesheet.css">
<link rel="stylesheet" href="../../public/css/paperMarkerRegistrationStylesheet.css">

</head>


<body>

<div class="row">
  <div class="leftNav">
  <img src="../../public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="teacherHome.html"><i class="fas fa-home"></i>Dashboard</a></li>
	  <li><a href="materials.php"><i class="fas fa-upload"></i>Upload Materials</a></li>
	  <li><a href="createQuiz.html"><i class="fas fa-question"></i>Quizzes</a></li>
	  <li><a href="addNewClass.html"><i class="fas fa-users"></i>New Class</a></li>
	  <li><a href="reschedule.html"><i class="far fa-calendar-alt"></i>Re-schedule</a></li>
	  <li><a href="paperMarkerRegistration.html"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
	  <li><a href="salaryDetails.html"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
	</ul>
	<div class="chip"><img src="../../public/icons/Logout.png" alt="Person" width="96" height="96">Log out</div>
	<div class="chip" style: "float:left;"><img src="../../public/icons/School Director_30px.png" alt="Person" width="96" height="96">Profile</div>
  </div>
  <div class="header">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-user-edit"></i>Papermarker Registration</h2>
	  <div class="chip"><img src="../../public/icons/School Director_30px.png" alt="Person" width="96" height="96">Teacher Name</div>
  </div>
  <div class="middle" style="background-color:white;">
	<form action="" style="padding: 10%;">
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Name :</label>
		</div>
		<div class="col-75">
		  <input type="text">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject"> NIC :</label>
		</div>
		<div class="col-20">
		  <input type="text">
		</div>
		<div class="col-20" style="width: 15%;">
		</div>
		<div class="col-20">
		  <label for="subject">DOB :</label>
		</div>
		<div class="col-20">
		  <input type="date">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Email :</label>
		</div>
		<div class="col-75" style="width: 40%">
		  <input type="text">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Address :</label>
		</div>
		<div class="col-75">
		  <textarea rows="4" cols="90"></textarea>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Tel No. :</label>
		</div>
		<div class="col-20">
		  <input type="text">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Qualifications :</label>
		</div>
		<div class="col-75">
		  <textarea rows="4" cols="90"></textarea>
		</div>
	  </div>
	  
	  <div class="row" style="margin-top:30px;margin-right:50px;">
		<input type="submit" value="Send Details">
	  </div>
	  
	</form>
  </div>
  <div class="right" style="background-color:#2F4F4F;">
	  
  </div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>