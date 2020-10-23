<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance marking</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigationBar">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/studentRegistration">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/libraries/filter-form-Controls-filtable/filtable.js"></script>

<script>
$(function(){
  // Basic Filtable usage - pass in a div with the filters and the plugin will handle it
  $('#data').filtable({ controlPanel: $('.table-filters')});
});
</script>
</head>


<body>
<!-------------------------Navigation Bar------------------->
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
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-user-o"></i>Attendance marking</h2>
    <div class="chip"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Staff Name</div>
  </div>
  
  <!----------------------------------Middle contet------------------------------------>
  <div class="middle" style="background-color:white;">
  

    <div id="table-filters">
      <label for="filter-country">Subject</label>
      <input type="text" id="filter-country" data-filter-col="3">
    </div>


    <table id="mytable">
    <thead>
      <tr>
        <th>Time</th>
        <th>Day</th>
        <th>Subject</th>
        <th>Teacher</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>10.00-11.00</td>
        <td>Sunday</td>
        <td>Chemistry</td>
        <td>Mr.Perera</td>
      </tr>
      <!-- ...and so on -->
    </tbody>
    </table>

       
      
  </div>
  
<!---------------------------------------Footer-------------------------------------->  

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>

