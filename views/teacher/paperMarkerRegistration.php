<!DOCTYPE html>
<html lang="en">
<head>
<title>Teacher Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/paperMarkerRegistrationStylesheet">

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
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-home"></i>Papermarker Registration</h2>
	  <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
	  <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Teacher ;-)</div>
  </div>

  
  <div class="middle" style="background-color:white;width: 83%;">



	<form action="<?php echo URL; ?>paperMarkerRegistration/create" method="post" style="padding-left: 20%;padding-right: 20%;padding-top: 10%;">
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Name :</label>
		</div>
		<div class="col-75">
		  <input type="text" name="name">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject"> NIC :</label>
		</div>
		<div class="col-20">
		  <input type="text" name="NIC">
		</div>
		<div class="col-20" style="width: 15%;">
		</div>
		<div class="col-20">
		  <label for="subject">DOB :</label>
		</div>
		<div class="col-20">
		  <input type="text" name="DOB">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Email :</label>
		</div>
		<div class="col-75" style="width: 40%">
		  <input type="text" name="email">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Address :</label>
		</div>
		<div class="col-75">
		  <textarea rows="4" cols="90" name="address"></textarea>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Tel No. :</label>
		</div>
		<div class="col-20">
		  <input type="text" name="tel">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Qualifications :</label>
		</div>
		<div class="col-75">
		  <textarea rows="4" cols="90" name="qualifications"></textarea>
		</div>
	  </div>
	  
	  <div class="row" style="margin-top:30px;margin-right:50px;">
		<input type="submit" value="Save" style="padding-right: 30px;padding-left: 30px;">
	  </div>
	  
	</form>

  </div>
 </div>


<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>