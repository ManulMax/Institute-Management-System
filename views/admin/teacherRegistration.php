<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/admin.css" />
<title>Teacher Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>

</head>
<body>
<!-------------------------Navigation Bar------------------->
<div class="row">
    <div class="leftNav">
        <img src="<?php echo URL; ?>public/img/logo2.png" class="img1" width="100%" height="12%" >
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="<?php echo URL; ?>teacherRegistration"><i class="fa fa-graduation-cap"></i>Register Teacher</a></li>
            <li><a href="<?php echo URL; ?>staffRegistration"><i class="fa fa-user-circle-o"></i>Register Staff</a></li>
            <li><a href="<?php echo URL; ?>updateTeacher"><i class="fa fa-user-o"></i>Update Teacher</a></li>
            <li><a href="<?php echo URL; ?>UpdateStaff"><i class="fa fa-user-o"></i>Update Staff</a></li>
            <li><a href="<?php echo URL; ?>addSubject"><i class="fa fa-book"></i>Add Subject</a></li>
            <li><a href="<?php echo URL; ?>salaryPay"><i class="fas fa-money-bill-wave"></i>Salary Payment</a></li>
            <li><a href="<?php echo URL; ?>adminIncome"><i class="fas fa-money-bill-wave"></i>Income</a></li>
        </ul>        
    </div>

    
    <div class="header">
        <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i></i>Admin Dashboard</h2>
        <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
        <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>  
    </div>

   
  <!-------------------Middle contet---------------------------------->
  <div class="middle" style="background-color:white;">
	
	<form name="myForm" action="/action_page.php" method="post">
	<div class="container">
   
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>
	
	<label for="psw"><b>Gender</b></label><br>
    <input type="radio" id="male" name="gender" value="male" rquired>
	<label for="male">Male</label><br>
	<input type="radio" id="female" name="gender" value="female" required>
	<label for="female">Female</label><br><br>
	

    <label for="psw"><b>NIC</b></label>
    <input type="text" placeholder="Enter NIC" name="nic" id="nic" required>

    <label for="e-mail"><b>E-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="e-mail" id="e-mail" required>
	
	<label for="dob"><b>DOB</b></label>
    <input type="date" placeholder="Select DOB" name="dob" id="dob" required>
	
	<label for="tel"><b>Tel No</b></label>
    <input type="text" placeholder="Tel " name="tel" id="tel" required>
	
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Address" name="address" id="address" required>
    <hr>
	
    <label for="qualification"><b>Qualifications</b></label>
	<textarea name="qualification" rows="10" cols="10" required> Qualification...</textarea>
	
	<label for="subject"><b>Subject</b></label>
	<select name="subject" required>
		<option value="1">Select subject</option>
		<option value="2">subject1</option>
		<option value="3">subject2</option>
		<option value="4">subject3</option>
	</select>	
		
    
	
	

	
	

    <button type="submit" class="registerbtn">Register</button>
	</div>  
	</form>
  </div>
  

</body>
</html>

<!--.wrapper{
  position: relative;
  top: 48%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  max-width: 800px;
  max-height:5000px;
  background: rgba(0,0,0,0.8);
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}