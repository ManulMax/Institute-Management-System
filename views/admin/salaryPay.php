<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/admin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminNav.css">
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/registerTeacher.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
    <title>Pay Here</title>
</head>
<body>
	<div class="row"> 
		<div class="leftNav">
        <img class="logo" src="<?php echo URL; ?>public/img/logo.png">
        <ul>
            <li><a href="<?php echo URL; ?>adminDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="<?php echo URL; ?>teacherRegistration"><i class="fa fa-graduation-cap"></i>Register Teacher</a></li>
            <li><a href="<?php echo URL; ?>staffRegistration"><i class="fa fa-user-circle-o"></i>Register Staff</a></li>
            <li><a href="<?php echo URL; ?>updateTeacher"><i class="fa fa-user-o"></i>Update Teacher</a></li>
            <li><a href="<?php echo URL; ?>updateStaff"><i class="fa fa-user-o"></i>Update Staff</a></li>
            <li><a href="<?php echo URL; ?>updateStudent"><i class="fa fa-user-o"></i>Update Student</a></li>
            <li><a href="<?php echo URL; ?>addSubject"><i class="fa fa-book"></i>Add Subject</a></li>
            <li><a href="<?php echo URL; ?>salaryPay"><i class="fas fa-money-bill-wave"></i>Salary Payment</a></li>
            <li><a href="<?php echo URL; ?>adminIncome"><i class="fas fa-money-bill-wave"></i>Income</a></li>
        </ul>         
    	</div>

  <div class="headerClass">
    <h2><i class="fas fa-upload"></i>Pay Here</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>
  <!-------------------Middle contet---------------------------------->
<div class="middle" style="background-color:#F8F8FF;">
	
	<form id="regForm" action="#" method="post">
    <div class="row">
    <div class="col-20" style="width: 25%;">
      <label for="subject">Teacher :</label>
    </div>
    <div class="col-75">
      <div style="width:250px;">
      <select>
      <option value="0">Select Teacher:</option>
      <option value="1">sub1</option>
      <option value="2">sub2</option>
      <option value="3">sub3</option>
      <option value="4">sub4</option>
      </select>
    </div>
    </div>    
   
    <div class="row">
    <div class="col-15">
      <label for="subject">Email :</label>
    </div>
    <div class="col-75" style="width: 60%">
      <input type="email" placeholder="Email address..." name="email" disabled="">
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject">Mobile No. :</label>
    </div>
    <div class="col-25">
      <input type="text" placeholder="Mobile number..." name="tel" disabled="">
    </div>
    </div>

    <div class="row">
    <div class="col-15">
      <label for="subject">Account No. :</label>
    </div>
    <div class="col-25">
      <input type="text" placeholder="Account number..." name="tel" disabled="">
    </div>
    </div>

    <div class="row">
    <div class="col-15">
      <label for="subject">Branch Name. :</label>
    </div>
    <div class="col-25">
      <input type="text" placeholder="Branch Name..." name="tel" disabled="">
    </div>
    </div>
  </div>
  </form>
  <form action="https://sandbox.payhere.lk/pay/of3fcdd76" method="get"><input id="btn" name="submit" type="image" src="https://www.payhere.lk/downloads/images/pay_with_payhere.png" style="width:200px;" value="Pay Now"></form>
  </div>    	
</div>
    
</body>
</html>