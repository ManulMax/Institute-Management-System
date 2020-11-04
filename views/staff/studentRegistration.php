<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNav">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/studentRegistration">
</head>


<body>
<!-------------------------Navigation Bar------------------->
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
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-user-edit"></i>Student Registration</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
   <div class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello Staff ;-)</div>
  </div>
  
  <!----------------------------------Middle contet------------------------------------>
  <div class="middle" style="background-color:white;">
	
	<form enctype="multipart/form-data" action="<?php echo URL;?>studentRegistration/create" method="post" >
	<div class="container">
   
    <table >

			<tr>
				<td>First Name</td>
				<td><input type="text" placeholder="Enter Name" name="fname" id="name" required></td>
				<td>Middle Name</td>
				<td><input type="text" placeholder="Enter Name" name="mname" id="name" required></td>
				<td>Last Name</td>
				<td><input type="text" placeholder="Enter Name" name="lname" id="name" required></td>
			</tr>
			
			<tr>
				<td>NIC</td>
				<td colspan=2><input type="text" placeholder="Enter NIC" name="nic" id="nic" required></td>
				<td>DOB</td>
				<td><input type="date" placeholder="Select DOB" name="dob" id="dob" required></td>
				<td></td>
			</tr>
			
			<tr>
				<td>E-mail</td>
				<td colspan=2><input type="text" placeholder="Enter E-mail" name="email" id="e-mail" required></td>
				<td>Tel No</td>
				<td><input type="tel" placeholder="Tel " name="tel" id="tel" required></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				<td>Male<input type="radio" id="male" name="gender" value="male" rquired></td>
				<td>Female<input type="radio" id="female" name="gender" value="female" required></td>
			</tr>
				
			<tr>
				<td>Address</td>
				<td colspan=5><input type="text" placeholder="Address" name="address" id="address" required></td>
			</tr>
			
	
			<tr>
				<td>Parent/Gardian Name</td>
				<td colspan=5><input type="text" placeholder="Enter Parent/Gardian Name" name="parent_name" id="parent_name" required></td>
				
			</tr>
			
			<tr>
				<td>Tel No</td>
				<td><input type="tel" placeholder="Parent/Gardian Tel " name="parent_tel" id="parent_tel" required></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
		
			<tr>
				<td>School</td>
				<td colspan=5><input type="text" placeholder="Enter School" name="school" id="school" required></td>
				
			</tr>
			
			<tr>
				<td>Grade</td>
				<td colspan=2><input type="text" placeholder="Enter grade" name="grade" id="grade" required></td>
				<td>Stream</td>
				<td><input type="tel" placeholder="Stream " name="stream" id="stream" required></td>
			</tr>
			
			<tr>
				<td>Subjects</td>
				<td><input type="text" placeholder="Subject 1 " name="subject1" id="subject1" required></td>
				<td><input type="text" placeholder="Subject 2 " name="subject2" id="subject2" required></td>
				<td><input type="text" placeholder="Subject 3 " name="subject3" id="subject3" required></td>
			
			</tr>
			
			<tr>
				<td>Photo</td>
				<td colspan=5><input type="file" placeholder="Upload photo " name="img" id="photo" required></td>
			</tr>
			
			<tr>
				<td></td>
				<td colspan=6><button type="submit" class="registerbtn" name="submit">Register</button></td>
			</tr>	
			
		</table>
	</div>  
	</form>
  </div>
  
<!---------------------------------------Footer-------------------------------------->  

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>

