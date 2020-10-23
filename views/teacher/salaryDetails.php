<!DOCTYPE html>
<html lang="en">
<head>
<title>Salary Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/salaryDetailsStylesheet">




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
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-money-bill-wave"></i>Salary Details</h2>
	  <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
	  <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Teacher ;-)</div>
  </div>
  
  
  <div class="middle" style="background-color:white;">

  	<div class="wrapper">
		  <div class="title" style="text-align: center;">
			  <h3>Salary payment details</h3>
		  </div>
	  <div class="details">
	      <p>Payment date :</p>
	      <p>Salary details of Month</p>
	      <p>Total Salary :</p>
      <input type="submit" name="" style="width:100%" value=" Download Report">
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