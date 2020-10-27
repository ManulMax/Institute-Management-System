<!DOCTYPE html>
<html lang="en">
<head>
<title>View_Student</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigationBar">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/viewStudent">


</head>
<body>
<!---------------------------------------Navigation bar------------------------------------->
<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
  <ul>
    <li><a href="staffDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
      <li><a href="studentRegistration"><i class="fa fa-user-o"></i>Register Student</a></li>
      <li><a href="updateStudent"><i class="fas fa-user-edit"></i>View Student</a></li>
      <li><a href="enrollStudent"><i class="fa fa-user-o"></i>Enroll Student</a></li>
      <li><a href="markAttendance"><i class="fas fa-users"></i>Mark Attendance</a></li>
      <li><a href="collectClassFees"><i class="fa fa-money"></i>Collect fees</a></li>
      <li><a href="staffSalaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
  </ul>
  <div class="chip"><img src="<?php echo URL; ?>public/icons/Logout.png" alt="Person" width="96" height="96">Log out</div>
  <div class="chip" ><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Profile</div>
  </div>
  <div class="header">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-user-edit"></i>View Student</h2>
    <div class="chip"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Staff Name</div>
  </div>
  

  <!------------------------------middle content-------------------------->
  <div class="middle" style="background-color:white;">
		<div class="title">
			<h3>Edit/Delete student records</h3>
		</div>
	<div class="details">
		<label for="regNo">Reg No</label>
		<input type="text" class ="search "name="regNo" placeholder="Reg No" required>
		
		<input type="submit" class="btn" value="Search" name="search">
		
		
	</div>
	<table id="allocations">
  <tr>
    <th>Reg No</th>
    <th>Name</th>
    <th></th>
	<th></th>
  </tr>
  <tr>
    <td>100</td>
    <td>M.H.S.Perera</td>
    <td><input type="submit" class="btn2" value="Edit" name="search"></td>
	<td><input type="submit" class="btn2" value="Delete" name="search"></td>
  </tr>
  <tr>
    <td>101</td>
    <td>A.M.Hasini</td>
    <td><input type="submit" class="btn2" value="Edit" name="search"></td>
	<td><input type="submit" class="btn2" value="Delete" name="search"></td>
  </tr>
  <tr>
    <td>102</td>
    <td>Amasha Gamage</td>
    <td><input type="submit" class="btn2" value="Edit" name="search"></td>
	<td><input type="submit" class="btn2" value="Delete" name="search"></td>
  </tr>
</table>
 </div>
  
  
<!----------------------Footer----------------------->
<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>