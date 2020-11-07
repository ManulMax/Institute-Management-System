<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <title>Enroll_Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigation">
  <link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/enrollStudent">
</head>


<body>

<!-------------------------------------Navigation bar--------------------------------------->
<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
    <ul>
       <li><a href="<?php echo URL; ?>staffDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
      <li><a href="<?php echo URL; ?>studentRegistration"><i class="fa fa-user-o"></i>Register Student</a></li>
      <li><a href="<?php echo URL; ?>viewStudent"><i class="fas fa-user-edit"></i>View Student</a></li>
      <li><a href="<?php echo URL; ?>enrollStudent"><i class="fa fa-user-o"></i>Enroll Student</a></li>
      <li><a href="<?php echo URL; ?>attendanceLandingPage"><i class="fas fa-users"></i>Mark Attendance</a></li>
      <li><a href="<?php echo URL; ?>classFeesLandingPage"><i class="fa fa-money"></i>Collect fees</a></li>
      <li><a href="<?php echo URL; ?>staffSalaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
    </ul>
    
  </div>
 <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-user-edit"></i>Enroll Student</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><a href="<?php echo URL; ?>login/logout" style="color: white;"><i class="fas fa-sign-out-alt fa-2x"></i></a></div>
  <div class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
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
<div class="right" style="background-color:#F5F5F5;">
    <div class="container">
        <table class="image-detail">
            <tr><td><img src="<?php echo URL; ?>public/img/placeholder.png" ></td>
                <td><label style="color:black">Reg No</label></br><input type="text" name="regNo" class="input" ></br></br>
                    <label style="color:black">Name</label></br><input type="text" name="name" class="input">
                </td>
            </tr>
            
            <tr>
                
                <td><label style="color:black">Subject</label>
                    <div class="box">
                        <select id="subject">
                            <option value="sub1">Engineering technology</option>
                              <option value="sub2">sub2</option>
                              <option value="sub3">sub3</option>
                              <option value="def" selected>Select subject</option>
                        </select>
                    </div>
                </td>
                
                <td><label style="color:black">Teacher</label>
                    <div class="box">
                        <select id="teacher">
                          <option value="t1">Mr.A.H.D.M.N.Kumarathunga Gamage</option>
                          <option value="t2">Teacher2</option>
                          <option value="t3">Teacher3</option>
                          <option value="def" selected>Select teacher</option>
                        </select>
                    </div>
                </td>
                    
            </tr>   
        </table>
        
        <table id="allocations">
  <tr>
    <th>Class</th>
    <th>Maximum no of students</th>
    <th>Current no of studnets</th>
    <th></th>
  </tr>
  <tr>
    <td>1</td>
    <td>100</td>
    <td>50</td>
    <td><input type="submit" class="btn2" value="Enroll" name="enroll"></td>
  </tr>
  <tr>
    <td>2</td>
    <td>100</td>
    <td>50</td>
    <td><input type="submit" class="btn2" value="Enroll" name="enroll"></td>
  </tr>
  <tr>
    <td>3</td>
    <td>100</td>
    <td>50</td>
    <td><input type="submit" class="btn2" value="Enroll" name="enroll"></td>
  </tr>
</table>
    
    </div>
 
</div>



<!-------------------------------footer------------------------------------------>
<div class="footer">
    <p>Footer</p>
  </div>
  
  </body>
  </html>