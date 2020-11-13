<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>View_Student</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigation">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/classFeesLandingPage">

<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script>



</head>
<body>
<!---------------------------------------Navigation bar------------------------------------->
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
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-money"></i>Fees Collection</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt fa-2x"></i></a></div>
   <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

  
 

  <!------------------------------middle content-------------------------->
  <div class="middle" style="background-color:#F8F8FF;">
    
  
<div class="container" style="margin: 30px;margin-top: 0px;">

    <div>
      <table class="allocation">
        <tr>
          <td>Subject
            <select>
              <option>- All -</option>
              <option>Chemistry</option>
              <option>Physics</option>
              <option>Maths</option>
            </select></td>
            <td>Batch
            <select><option value="">- All -</option>
      <option value="1"><?php echo date("Y");?> A/L</option>
      <option value="2"><?php echo date("Y")+1;?> A/L</option>
      <option value="3"><?php echo date("Y")+2;?> A/L</option>
      <option value="4">Revision</option></select></td>

      <td><a href="<?php echo URL; ?>collectClassFees"><input type="submit" class="scan-btn" value="Scan" ></a></td>
          </tr>
        </table>
    </div>
</div>

 </div>


  
  
<!----------------------Footer----------------------->
<div class="footer">
  <p>Footer</p>
</div>





</body>
</html>