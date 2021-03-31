<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminNav.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminUpdate.css">
    <title>Income Data</title>
    <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
   



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
    <h2><i class="fas fa-money-bill-wave"></i>Income</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>
  <div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
  </div>
    <!-------------------Middle contet---------------------------------->
    
  <div class="middle" style="background-color:#F8F8FF;padding-top: 3%;">
       

  <div class="table-filters">
    <div class="row" style="margin-left: 9%;">
    <div class="col-10" style="width: 11%">
    <label for="filter-reg">Name:</label>
    </div>

    <div class="col-10">
      <input type="text" class="input-text" id="filter-reg" data-filter-col="0">
    </div>
    <div class="col-5">
    </div>
    <div class="col-5">
    </div>
    <div class="col-10">
      <label for="filter-name">Subject :</label>
    </div>
    <div class="col-20">
      <input type="text" class="input-text" id="filter-name" data-filter-col="1">
    </div>
    <div class="col-5">
    </div>

    <div class="col-10">
      <label for="filter-nic">Batch :</label>
    </div>
    <div class="col-10">
      <input type="text" class="input-text" id="filter-nic" data-filter-col="2">
    </div>
    </div>
  </div>



  <div id="tableDiv" style="width: 50%;">
    <table id="data">
    <thead>
      <tr>
        <th>Teacher</th>
        <th>Subject</th>
        <th>Batch</th>
        <th>Student Count</th>
        <th>Income</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($this->dataList as $row) { ?>
      <tr>
        <td><?php echo $row['1']; ?></td>
        <td><?php echo $row['2']; ?></td>
        <td><?php echo $row['3']; ?></td>
        <td><?php echo $row['4']; ?></td>
        <td><?php echo $row['5']; ?></td>
      </tr>
    <?php } ?>

    </tbody>
    </table>

    <div class="row" style="margin-left: 20%;">
      <div class="col-20">
        <label for="filter-total">Total Income:</label>
      </div>
      <div class="col-20" style="background-color: #ACE1AF;">
        <label for="filter-total"></label>
      </div>
    </div>
  </div>



  </div>

</body>
</html>


