<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update_Teacher</title>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminNav.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminUpdate.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>


  <!-- filter table -->

  <link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/libraries/filter-form-Controls-filtable/examples/styles.css">
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="<?php echo URL; ?>public/libraries/filter-form-Controls-filtable/filtable.js"></script>
  <script>
  $(function(){
    // Basic Filtable usage - pass in a div with the filters and the plugin will handle it
    $('#data').filtable({ controlPanel: $('.table-filters')});
  });
  </script>
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
    <h2><i class="fa fa-user-o"></i>Update Teacher</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>
  <div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>
  
  <div class="middle" style="background-color:#F8F8FF;padding-top: 5%;">
	
		
    <div class="table-filters">
	  <div class="row" style="margin-left: 9%;">
    <div class="col-10" style="width: 11%">
    <label for="filter-reg">Reg No :</label>
    </div>

    <div class="col-10">
      <input type="text" class="input-text" id="filter-reg" data-filter-col="0">
    </div>
    <div class="col-5">
    </div>
    <div class="col-5">
    </div>
    <div class="col-10">
      <label for="filter-name">Name :</label>
    </div>
    <div class="col-20">
      <input type="text" class="input-text" id="filter-name" data-filter-col="1">
    </div>
    <div class="col-5">
    </div>

    <div class="col-10">
      <label for="filter-nic">NIC :</label>
    </div>
    <div class="col-10">
      <input type="text" class="input-text" id="filter-nic" data-filter-col="2">
    </div>
    </div>
  </div>

	<div id="tableDiv">
    <table id="data">
    <thead>
      <tr>
        <th>Reg. No</th>
        <th>Name</th>
        <th>NIC</th>
        <th>email</th>
        <th>Tel No</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php

    while($row = mysqli_fetch_assoc($this->tecList)){  
    echo "<tr><td>".$row['reg_no']."</td><td>" .$row['fname']." ".$row['mname']." ".$row['lname']."</td><td>".$row['NIC']."</td><td>".$row['email']."</td><td>".$row['tel_no']."</td><td><input type='submit' value='Edit' style='padding: 5px 15px 5px 15px;'></td><td><input type='submit' value='Delete' style='padding: 5px;background-color:#555555;'></td></tr>";

    }
?>
    </tbody>
    </table>
    </div>

  </div>
</div>

</body>
</html>