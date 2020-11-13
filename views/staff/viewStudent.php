<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>View_Student</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigation">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/viewStudent">

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
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-user-edit"></i>View Student</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt fa-2x"></i></a></div>
   <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

  

  <!------------------------------middle content-------------------------->
  <div class="middle" style="background-color:#F8F8FF;">
		<div class="title">
			<h3>Edit/Delete student records</h3>
		</div>
	
<div class="container" style="margin: 30px;margin-top: 0px;">


<div class="table-filters">
  
    <table id="allocation" >
    <tr>
    <td><label for="filter-country">Reg No</label></td>
    <td><input type="text" class="input-text" id="filter-name" data-filter-col="0"></td>
 

    <!--<td><label for="filter-city">Subject</label></td>
    <td><select id="filter-city" data-filter-col="3" style="min-width:60px">
      <option value="">- All -</option>
       <?php

            while($row = mysqli_fetch_assoc($this->subjectList)){  

               echo "<option value='".$row['name']."'>".$row['name']."</option>";

            }
      ?>
    </select></td>-->

     <td><label for="filter-city">Batch</label></td>
     <td><select id="filter-city" data-filter-col="3" style="min-width:60px">
       <option value="">- All -</option>
      <option value="1"><?php echo date("Y");?> A/L</option>
      <option value="2"><?php echo date("Y")+1;?> A/L</option>
      <option value="3"><?php echo date("Y")+2;?> A/L</option>
      <option value="4">Revision</option>
     </select></td>
 

   <td><input type="button" id="btnGetCount" value="Count Rows" onclick = "CountRows()" />
<script type="text/javascript">
    function CountRows() {
       
        var rowCount = 0;
        var table = document.getElementById("data");
        var rows = table.getElementsByTagName("tr")
        for (var i = 0; i < rows.length; i++) {
            
            if (rows[i].getElementsByTagName("td").length > 0) {
                rowCount++;
            }
        }
        var message = "Row Count: " + rowCount;
       
        alert(message);
    }
</script></td>

</tr>
</table>
</div>


<!-- data taken from generatedata.com -->
<table id="data">
<thead>
  <tr>
    <th>Reg No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Batch</th>
    <th>NIC</th>
    <th>email</th>
    <th></th>
    <th></th>
  </tr>
</thead>

<tbody>
      <?php

          while($row = mysqli_fetch_assoc($this->stuList)){  
             echo "<tr><td>".$row['reg_no']."</td><td>" .$row['fname']."</td><td>".$row['lname']."</td><td>".$row['grade']."</td><td>".$row['NIC']."</td><td>".$row['email']."</td><td><input type='submit' value='Edit' style='padding: 5px 15px 5px 15px;'></td><td><input type='submit' value='Delete' style='padding: 5px;background-color:#555555;'></td></tr>";

          }
      ?>
      
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

 </div>
  
  
<!----------------------Footer----------------------->
<div class="footer">
  <p>Footer</p>
</div>



</body>
</html>