<!DOCTYPE html>
<html lang="en">
<head>
<title>Collect Class Fees</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigationBar">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/enrollStudent">
</head>


<body>

<!-------------------------------------Navigation bar--------------------------------------->
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
      <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-money"></i>Collect Class Fees</h2>
      <div class="chip"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Staff Name</div>
  </div>
  

<!-----------------------------middle content------------------------------------->        
<div class="middle" style="background-color:white;">    

    <div class="container">
        <table class="qr-scan">
            <tr><td><div class="qr"></div></td></tr>
            <tr><td><input type="text" name="regNo" class="regNo" placeholder="Reg No"></td></tr>
            <tr><td><input type="submit" name="search" value="Search" class="search"></td></tr>
        </table>
    </div>   
</div>   

<!---------------------------right side bar----------------------------------->
<div class="right" style="background-color:#2F4F4F;">
    <div class="container">
        <table class="image-detail">
            <tr><td><img src="<?php echo URL; ?>public/img/placeholder.png" ></td>
                <td><label style="color:white">Reg No</label></br><input type="text" name="regNo" class="input" ></br></br>
                    <label style="color:white">Name</label></br><input type="text" name="name" class="input">
                </td>
            </tr>

            <tr>
              <td style="color:white"><h3>Payment details<h3></td>
            </tr>

            <tr>
              <td style="color:white">Payment date</td>
              <td><input type="date" name="payment-date" class="payment-date"></td>
            </tr>

            <tr>
              <td style="color:white">Paid amount</td>
              <td><input type="text" name="paid-amount" class="paid-amount"></td>
            </tr>
    
        </table>
        
        <input type="submit" name="save-payment" value="Save payment" class="search" style="margin-left:20%; margin-top:30%">
        
    
    </div>
 
</div>

<!-------------------------------footer------------------------------------------>
<div class="footer">
    <p>Footer</p>
  </div>
  
  </body>
  </html>