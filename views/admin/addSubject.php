<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminNav.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminUpdate.css">
  <title>Subject</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
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
    <h2><i class="fa fa-book"></i>Add Subject</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>
  <div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>
    <!-------------------Middle contet---------------------------------->
  
  
  <div class="middle" style="background-color:#F8F8FF;padding-top: 5%;">
  
  <div class="row" style="margin-left: 30%;">
    <div class="col-25">
      <label for="filter-reg">New Subject :</label>
    </div>

    <div class="col-25">
      <input type="text" placeholder="subject name...">
    </div>
    <div class="col-25">
    <input type='submit' value='ADD'>
    </div>
    
  </div>
    

  <div id="tableDiv" style="width: 50%;">
    <table id="data">
    <thead>
      <tr>
        <th>Subject ID</th>
        <th>Subject</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Physics</td>
        <td style="width: 5px;"><input type='submit' value='Edit' style='padding: 5px 15px 5px 15px;'></td>
        <td style="width: 90px;"><input type='submit' value='Delete' style='padding: 5px;background-color:#555555;'></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Combined Maths</td>
        <td style="width: 90px;"><input type='submit' value='Edit' style='padding: 5px 15px 5px 15px;'></td>
        <td style="width: 90px;"><input type='submit' value='Delete' style='padding: 5px;background-color:#555555;'></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Chemistry</td>
        <td style="width: 90px;"><input type='submit' value='Edit' style='padding: 5px 15px 5px 15px;'></td>
        <td style="width: 90px;"><input type='submit' value='Delete' style='padding: 5px;background-color:#555555;'></td>
      </tr>
      
    </tbody>
    </table>
    </div>

  </div>


</div>

</body>
</html>