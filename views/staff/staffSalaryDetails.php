<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Staff_Salary_Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNav">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffSalaryDetails">





</head>
<body>


<!--------------------------------------Navigation bar-------------------------------------->
<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="staffDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
      <li><a href="studentRegistration"><i class="fa fa-user-o"></i>Register Student</a></li>
      <li><a href="viewStudent"><i class="fas fa-user-edit"></i>View Student</a></li>
      <li><a href="enrollStudent"><i class="fa fa-user-o"></i>Enroll Student</a></li>
      <li><a href="markAttendance"><i class="fas fa-users"></i>Mark Attendance</a></li>
      <li><a href="collectClassFees"><i class="fa fa-money"></i>Collect fees</a></li>
      <li><a href="staffSalaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
	</ul>
	
  </div>

 <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-money-bill-wave"></i>Salary Details</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
   <div class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello Staff ;-)</div>
  </div>
  <!-----------------------------------Middle contant----------------------->
  <div class="middle" style="background-color:white;">	
	  <div class="wrapper">
		  <div class="title">
			  <h3>Salary payment details</h3>
		  </div>
	  <div class="details">
      <p>Payment date :</p>
      <p>Salary details of Month</p>
      <p>Total Salary :</p>
      <button class="btn" style="width:100%"><i class="fa fa-download"></i> Download Report</button>
    </div>
	  </div>	
  </div>



 

<!----------------------------------------Footer----------------------------->
<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>