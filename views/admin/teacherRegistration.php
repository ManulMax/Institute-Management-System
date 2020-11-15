<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/adminNav.css" />
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/registerTeacher.css" />
  <title>Teacher Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>

</head>
<body>
<!-------------------------Navigation Bar------------------->
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
    <h2><i class="fas fa-upload"></i>Register Teacher</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

   
  <!-------------------Middle contet---------------------------------->
<div class="middle" style="background-color:#F8F8FF;">
	
	<form id="regForm" action="<?php echo URL; ?>teacherRegistration/create" method="post">
    <div class="row">
    <div class="col-15">
      <label for="subject">Full Name :</label>
    </div>
    <div class="col-75">
      <input type="text" placeholder="Full name..." name="name">
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject"> NIC :</label>
    </div>
    <div class="col-25">
      <input type="text" placeholder="Identity card number..." name="NIC">
    </div>
    <div class="col-10">
    </div>
    <div class="col-15">
      <label for="subject">DOB :</label>
    </div>
    <div class="col-25">
      <input type="date" name="DOB">
    </div>
    </div>

    <div class="row">
    <div class="col-15">
      <label for="subject">Gender :</label>
    </div>
    <div class="col-15" class="genderLabel">
      <input type="radio" value="male" name="gender">
      <label for="male">Male</label>
    </div>
    <div class="col-15" class="genderLabel">
      <input type="radio" value="female" name="gender">
      <label for="female">Female</label>
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject">Email :</label>
    </div>
    <div class="col-75" style="width: 60%">
      <input type="email" placeholder="Email address..." name="email">
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject">Address :</label>
    </div>
    <div class="col-75">
      <textarea rows="4" cols="90" placeholder="Address..." name="address"></textarea>
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject">Mobile No. :</label>
    </div>
    <div class="col-25">
      <input type="text" placeholder="Mobile number..." name="tel">
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject">Qualifications :</label>
    </div>
    <div class="col-75">
      <textarea rows="4" cols="90" name="qualifications"></textarea>
    </div>
    </div>

    <div class="row">
    <div class="col-20" style="width: 25%;">
      <label for="subject">Subject :</label>
    </div>
    <div class="col-75">
      <div style="width:250px;">
      <select>
      <option value="">Select Subject:</option>
      <?php

            while($row = mysqli_fetch_assoc($this->subList)){  

               echo "<option value='".$row['id']."'>".$row['name']."</option>";

            }
      ?>
      </select>
    </div>
    </div>
  </div>
    
    <div class="row" style="margin-top:30px;margin-right:10%;">
    <input type="submit" value="Save" style="padding-right: 30px;padding-left: 30px;">
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