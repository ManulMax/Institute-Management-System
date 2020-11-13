<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/admin.css">
<title>Subject</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
    <div class="leftNav">
        <img src="<?php echo URL; ?>public/img/logo2.png" class="img1" width="100%" height="12%" >
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="<?php echo URL; ?>teacherRegistration"><i class="fa fa-graduation-cap"></i>Register Teacher</a></li>
            <li><a href="<?php echo URL; ?>staffRegistration"><i class="fa fa-user-circle-o"></i>Register Staff</a></li>
            <li><a href="<?php echo URL; ?>updateTeacher"><i class="fa fa-user-o"></i>Update Teacher</a></li>
            <li><a href="<?php echo URL; ?>UpdateStaff"><i class="fa fa-user-o"></i>Update Staff</a></li>
            <li><a href="<?php echo URL; ?>addSubject"><i class="fa fa-book"></i>Edit Subject</a></li>
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
	
		
	
		<div class="title">
			<h3>Add/Update subject records</h3>
		</div>
	<div class="details">
		<label for="regNo">New Subject </label>
		<input type="text" class ="search "name="sub" placeholder="Subject" required>
		
		<input type="submit" class="btn" value="Add" name="add">
		
		
	</div>
	<table id="allocations">
  <tr>
    <th>Subject Name</th>
    <th>Taught by</th>
    <th></th>
	<th></th
  </tr>
  <tr>
    <td>Maths</td>
    <td>M.H.S.Perera</td>
    <td><input type="submit" class="btn2" value="Edit" name="search"></td>
	<td><input type="submit" class="btn2" value="Delete" name="search"></td>
  </tr>
  <tr>
    <td>Chemistry</td>
    <td>A.M.Hasini</td>
    <td><input type="submit" class="btn2" value="Edit" name="search"></td>
	<td><input type="submit" class="btn2" value="Delete" name="search"></td>
  </tr>
  <tr>
    <td>Physics</td>
    <td>Amasha Gamage</td>
    <td><input type="submit" class="btn2" value="Edit" name="search"></td>
	<td><input type="submit" class="btn2" value="Delete" name="search"></td>
  </tr>
</table>

	
	 

		
  </div>
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>