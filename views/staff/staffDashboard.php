<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">  
<title>Staff Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php echo URL; ?>public/libraries/calendar-datepickerdemo/css/mobiscroll.javascript.min.css">
<script src="<?php echo URL; ?>public/libraries/calendar-datepickerdemo/js/mobiscroll.javascript.min.js"></script>

<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavBar">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffDashboard">


</head>


<body>

<div class="row">
  <div class="leftNav">

    <button class="drop-btn">
          <i class="fas fa-list fa-lg"></i>
        </button>
        <div class="drop-container">
                <a href="#">blaa</a>
                <a href="#">blaa</a>
                <a href="#">blaa</a>

        </div>

  <img src="<?php echo URL; ?>public/img/logo.png" width = "40%" height = "100px" style= "margin-left: 25%">
  <ul>
       <li><a href="<?php echo URL; ?>staffDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
      <li><a href="<?php echo URL; ?>studentRegistration"><i class="fa fa-user-o"></i>Register Student</a></li>
      <li><a href="<?php echo URL; ?>viewStudent"><i class="fas fa-user-edit"></i>View Student</a></li>
      <li><a href="<?php echo URL; ?>enrollStudent"><i class="fa fa-user-o"></i>Enroll Student</a></li>
      <li><a href="<?php echo URL; ?>attendanceLandingPage"><i class="fas fa-users"></i>Mark Attendance</a></li>
      <li><a href="<?php echo URL; ?>collectClassFees"><i class="fa fa-money"></i>Collect fees</a></li>
      <li><a href="<?php echo URL; ?>staffSalaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
     </ul> 
  
  </div>


  <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-home"></i>Dashboard</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt fa-2x"></i></a></div>
   <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

  <div id="myModal" class="modal">

  <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <img src="<?php echo URL; ?>public/img/img_avatar.png" alt="Avatar" style="width:20%;border-radius: 50%;margin-left: 40%">
      <div class='row' style='background-color:white;text-align: center;'>
         <button id='psw-btn'><a href='<?php echo URL; ?>login/renderPasswordChange'  id='psw'><i class='fas fa-key'></i>change password</a></button>
       </div>

      <?php

            while($row = mysqli_fetch_assoc($this->userDetails)){  

               echo "<h2 id='name'>".$row['fname']." ".$row['mname']." ".$row['lname']."</h2>";
               echo "<h4 id='name'>Staff</h4><br />";
               /*echo "<p id='name'>Qualifications : ".$row['qualifications']."</p><br />";*/

               echo "<div class='row'>
                <div class='col-50-topic'>
                  <h3 class='topic'>Telephone no.</h3>
                </div>
                <div class='col-50-topic'>
                  <h3 class='topic'>Email address</h3>
                </div>
              </div>";
              echo "<div class='row'>
                <div class='col-50-detail'>
                  <h3 class='detail'>".$row['tel_no']."</h3>
                </div>
                <div class='col-50-detail'>
                  <h3 class='detail'>".$row['email']."</h3>
                </div>
              </div>";

              echo "<div class='row'>
                <div class='col-50-topic'>
                  <h3 class='topic'>NIC</h3>
                </div>
                <div class='col-50-topic'>
                  <h3 class='topic'>DOB</h3>
                </div>
              </div>";
              echo "<div class='row'>
                <div class='col-50-detail'>
                  <h3 class='detail'>".$row['NIC']."</h3>
                </div>
                <div class='col-50-detail'>
                  <h3 class='detail'>".$row['DOB']."</h3>
                </div>
              </div>";
            }
          ?>

    </div>

  </div>


  <div class="middle" style="background-color:#F8F8FF;">


     <table width="100%"  height="200px">
      <tr>

        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fas fa-users fa-2x"></i></div>
            <?php

            while($row = mysqli_fetch_assoc($this->stuCount1)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>".$row['count1']." Students</b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b><?php echo date("Y"); ?> AL</b></h4>  
          </div>
        </div>
        </td>
        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon2" class="fas fa-users fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->stuCount2)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>".$row['count1']." Students</b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b><?php echo date("Y")+1; ?> AL</b></h4>  
          </div>
        </div>
        </td>
      <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon3" class="fas fa-users fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->stuCount3)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>".$row['count1']." Students</b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b><?php echo date("Y")+2; ?> AL</b></h4>  
          </div>
        </div>
        </td>
        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon4" class="fas fa-users fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->stuCount4)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>".$row['count1']." Students</b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b>Revision</b></h4>  
          </div>
        
        
      </td>
      </tr>
      <td style="border: none;"></td>
        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon4" class="fas fa-users fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->stuCount5)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>".$row['count1']." Students</b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b>Overall</b></h4>  
          </div>
        </td>

        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon4" class="fas fa-users fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->overallAttendance)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>".$row['sum']." Students</b></h4></div>";

            }
          ?>

           <div class="containerCard">
          <h4><b>Attended</b></h4>  
          </div>
        </td>
 

        
      <tr>

    </table>


    <?php 
    $attendance1 = mysqli_fetch_assoc($this->sum1);
    $attendance2 = mysqli_fetch_assoc($this->sum2);
    $attendance3 = mysqli_fetch_assoc($this->sum3);
    $attendance4 = mysqli_fetch_assoc($this->sum4);
    $attendance = "'".$attendance1['sum']."','".$attendance2['sum']."','".$attendance3['sum']."','".$attendance4['sum']."'" ?>




    <div style="position: relative;width: 40%;height: 400px;margin-top: 5%;">
      <canvas id="myChart"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2021 AL', '2022 AL', '2023 AL', 'Revision'],
        datasets: [{
            label: 'Monthly Attendance',
            data:  [<?php echo $attendance; ?>],
            backgroundColor: [
                '#8FBC8F',
                '#8FBC8F',
                '#8FBC8F',
                '#8FBC8F'
            ],
            borderColor: [
                '#8FBC8F',
                '#8FBC8F',
                '#8FBC8F',
                '#8FBC8F'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
    </div>


<div class="container">


<!-- data taken from generatedata.com -->
<table id="data">
  <caption>Today's shedule - <?php echo date('l');?></caption>
<thead>
  <tr>
    <th>Class</th>
    <th>Time</th>
    <th>Hall</th>
  </tr>
</thead>
<tbody>
  <?php

      while($row = mysqli_fetch_assoc($this->schedules)){  
         echo "<tr><td>".$row['name']." ".$row['batch']."</td><td>" .$row['start_time']. "-".$row['end_time']."</td><td>".$row['hallName']."</td></tr>";

      }
  ?>
</tbody>
</table>
</div>


</div>





 <div class="footer">
        <div id="copyright" class="cpy clear">           
          <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
        </div>
      </div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}





// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}




</script>

</body>


</html>