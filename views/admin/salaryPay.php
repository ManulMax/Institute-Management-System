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
    <h2><i class="fas fa-money-bill-wave"></i>Pay Here</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>
  <div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>
  <!-------------------Middle contet---------------------------------->
<div class="middle" style="background-color:#F8F8FF;">
	
<div id="tableDiv">
    <table id="data">
    <thead>
      <tr>
        <th>Name</th>
        <th>Acc No</th>
        <th>Bank</th>
        <th>Branch</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

    <?php
    while($row = mysqli_fetch_assoc($this->tecList)){  ?>
    <tr><td><?php echo $row['fname']?></td>
    <td><?php echo $row['acc_no'] ?> </td>
    <td><?php echo $row['bank_name'] ?></td>
    <td><?php echo $row['branch_name'] ?></td>
    <td><form action="https://sandbox.payhere.lk/pay/of3fcdd76" method="get"><input id="btn" name="submit" type="image" src="https://www.payhere.lk/downloads/images/pay_with_payhere.png" style="width:200px;" value="Pay Now"></form></td>
 </tr>

    <?php } ?>
    </tbody>
    </table>
    </div>
  </form>
  
  </div>    	
</div>
    
</body>
</html>

