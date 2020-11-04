<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>View_Student</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNav">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/attendanceLandingPage">

<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script>



<!-- filter table -->

<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/libraries/filter-form-Controls-filtable/examples/style2.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="<?php echo URL; ?>public/libraries/filter-form-Controls-filtable/filtable.js"></script>
<script>
$(function(){
  // Basic Filtable usage - pass in a div with the filters and the plugin will handle it
  $('#data').filtable({ controlPanel: $('.table-filters')});
});
</script>
<style>
  body {margin: 0; background-color: #fafafa; font-family: 'Open Sans';}
  .container { margin: 150px auto; max-width: 960px; }
  </style>

</head>
<body>
<!---------------------------------------Navigation bar------------------------------------->
<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
  <ul>
      <li><a href="staffDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
      <li><a href="studentRegistration"><i class="fa fa-user-o"></i>Register Student</a></li>
      <li><a href="viewStudent"><i class="fas fa-user-edit"></i>View Student</a></li>
      <li><a href="enrollStudent"><i class="fa fa-user-o"></i>Enroll Student</a></li>
      <li><a href="attendanceLandingPage"><i class="fas fa-users"></i>Mark Attendance</a></li>
      <li><a href="collectClassFees"><i class="fa fa-money"></i>Collect fees</a></li>
      <li><a href="staffSalaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
  </ul>
  
  </div>

  <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-user-edit"></i>Mark Attendance</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
   <div class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello Staff ;-)</div>
  </div>

  <!------------------------------middle content-------------------------->
  <div class="middle" style="background-color:white;">
    
  
<div class="container" style="margin: 30px;margin-top: 0px;">


<div class="table-filters">
  
    <table id="allocation" >
    <tr>
    <td><label for="filter-country">Reg No</label></td>
    <td><input type="text" class="input-text" id="filter-name" data-filter-col="0"></td>
 

    <td><label for="filter-city">Subject</label></td>
    <td><select id="filter-city" data-filter-col="3" style="min-width:60px">
      <option value="">- All -</option>
      <option value="Chemistry">Chemistry</option>
      <option value="Physics">Physics</option>
      <option value="Combined Maths">Combined Maths</option>


  <td><label for="filter-city">Batch</label></td>
    <td><select id="filter-city" data-filter-col="2" style="min-width:60px">
      <option value="">- All -</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="Revision">Revision</option>

   

</tr>
</table>
</div>


<!-- data taken from generatedata.com -->
<table id="data">
<thead>
  <tr>
    <th>Reg No</th>
    <th>Name</th>
    <th>Batch</th>
    <th>Subject</th>
    
  </tr>
</thead>
<tbody>
  <tr>
    <td>1</td>
    <td>Nitharshana</td>
    <td>2021</td>
    <td>Chemistry</td>
    
    
  </tr>
  <tr>
    <td>1</td>
    <td>Nitharshana</td>
    <td>2021</td>
    <td>Physics</td>
     
  </tr>
  <tr>
    <td>3</td>
    <td>Villarreal</td>
    <td>2022</td>
    <td>Physics</td>
    
  </tr>
  <tr>
    <td>4</td>
    <td>Greer</td>
    <td>2020</td>
    <td>Mauritania</td>
    
  </tr>
  <tr>
    <td>5</td>
    <td>Livingston</td>
    <td>2021</td>
    <td>Physics</td>
     
  </tr>
</tbody>
</table>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<a href="markAttendance"><input type="submit" class="scan-btn" value="Scan" ></a>


 </div>


  
  
<!----------------------Footer----------------------->
<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>