<!DOCTYPE html>
<html lang="en">
<head>
<title>Upload Exam Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/uploadExamResultsStylesheet">

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
	  <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
	  <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Teacher ;-)</div>
	</ul>
	
	
  </div>
  <div class="headerClass">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-home"></i>Dashboard</h2>
	  <h4 style="float: right;padding-right: 20px;margin-bottom: 0;"><i class="fas fa-user"></i>Teacher Name</h4>
  </div>
  
  
  <div class="middle" style="background-color:white;">
	<div class="row">
		<div class="col-20">
		  <label for="subject">Upload Resultsheet :</label>
		</div>
		<div class="col-20" style="width: 40%;">
		   <label class="uploadLabel">
				<input type="file" name="file">Choose File
			</label>
		</div>
	  </div>
  </div>
  
  <div class="right" style="background-color:#2F4F4F;">
	  
  </div>


<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>