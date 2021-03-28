<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">  
<title>Student Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">



<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/studentNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/studentHomeStylesheet">

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

<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "40%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="<?php echo URL; ?>studentHome"><i class="fas fa-home"></i>Dashboard</a></li>
	  
    <li>
        <button class="dropdown-btn"><i class="fas fa-upload"></i>Download Materials
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
             $classes = []; //create array
              while($class=mysqli_fetch_assoc($this->studentSubject)) {
                  $classes[] = $class; //assign whole values to array
              }
             foreach($classes as $row){  ?>
                <a href="<?php echo URL; ?>materials/renderDownloadMaterials/<?php echo $row['name'].'/'.$row['batch']; ?>"><?php echo $row['name'].' '.$row['batch']; ?></a>
          <?php  } ?>

        </div>
    </li>
  

      <li>
        <button class="dropdown-btn"><i class="fas fa-question"></i>Quizzes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
       
         foreach($classes as $row){  ?>
            <a href="<?php echo URL; ?>StudentQuizList/index/<?php echo $row['name'].'/'.$row['batch']; ?>"><?php echo $row['name'].' '.$row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
	</ul>	
	
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

               echo "<h2 id='name'>".$row['fname']." </h2>";
               echo "<h4 id='name'>Student</h4><br />";
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


  <div class="headerClass">
    <h2><i class="fas fa-home"></i>Dashboard</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>


  <div class="middle" style="background-color:white;">

    <table class="midTable" cellpadding="10px;" border="0">
      <tr>
       <!-- <td width="40%">
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fa fa-graduation-cap fa-2x"></i></div>
            <div style='margin-left: 27%;margin-top: -35px;'><h3><b>ICT 2021 A/L</b></h3></div>
             <div class="containerCard">
            <h5><b>Teacher : Vinuri Piyathilake</b></h5>  
            </div>
          </div>
          <br />
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fa fa-graduation-cap fa-2x"></i></div>
            <div style='margin-left: 27%;margin-top: -35px;'><h3><b>Physics 2021 A/L</b></h3></div>
             <div class="containerCard">
            <h5><b>Teacher : Vinuri Piyathilake</b></h5>  
            </div>
          </div>
          <br />
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fa fa-graduation-cap fa-2x"></i></div>
            <div style='margin-left: 27%;margin-top: -35px;'><h3><b>Chemistry 2021 A/L</b></h3></div>
             <div class="containerCard">
            <h5><b>Teacher : Vinuri Piyathilake</b></h5>  
            </div>
          </div>
          <br />
        </td>-->

        <td width="30%;">
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fa fa-graduation-cap fa-2x"></i></div>
            <div style='margin-left: 27%;margin-top: -35px;'><h3><b>Enrolled subjects</b></h3></div>
             <div class="containerCard">
              <?php
       
         foreach($classes as $row){  ?>
            <li style="list-style: none;"><?php echo $row['name'].' '.$row['batch']; ?>
          <?php  } ?></li>
              
            </div>
          </div> 
          <br />
        </td>   

        <td width="60%">
          <div style="position: relative;margin-left: 10%;">
            <canvas id="myChart1"></canvas>
            <script>
            var ctx = document.getElementById('myChart1').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Janu', 'Feb', 'Mar', 'Apr', 'May', 'June', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
                    datasets: [{
                        label: 'Monthly Attendance',
                        data: [<?php echo $this->attendance; ?>],
                        backgroundColor: [
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F', 
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F'

                        ],
                        borderColor: [
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F',
                            '#8FBC8F',
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

        </td>
      </tr>
      <tr>
        <td style="padding:0;">
          <div class="marks">
            <h3>Exam results</h3>
            <br />
            <div class="containerCard">
              <?php
       
         foreach($classes as $row){  ?>
            <li style="list-style: none;"><?php echo $row['name'].' '.$row['batch']; ?>
          <?php  } ?></li>
              
            </div>
            <br />
            <br />

           </div>
        </td>

        <td style="padding:0;">
          <!--<div class="table-filters">
          <table style="padding:0;" class="filterShedule">
            <tr>
              <td ><label for="filter-city">Teacher</label></td>
     <td colspan=3><select style="width:100%; background-color: white;" id="filter-city" data-filter-col="0" style="min-width:60px">
       <option value="">- All -</option>
      <?php

            while($row = mysqli_fetch_assoc($this->teacherList)){  

               echo "<option value='".$row['fname']."'>".$row['fname']."</option>";

            }
      ?>
     </select></td>
            </tr>
 <tr>
  <td><label for="filter-city">Batch</label></td>
     <td><select id="filter-city" data-filter-col="2" style="min-width:60px;background-color: white;">
       <option value="">- All -</option>
      <option value="<?php echo date("Y");?>AL"><?php echo date("Y");?>AL</option>
      <option value="<?php echo date("Y")+1;?>AL"><?php echo date("Y")+1;?>AL</option>
      <option value="<?php echo date("Y")+2;?>AL"><?php echo date("Y")+2;?>AL</option>
      <option value="Revision">Revision</option>
     </select></td>

     <td><label for="filter-city">Class</label></td>
     <td><select id="filter-city" data-filter-col="1" style="min-width:60px;background-color: white;">
       <option value="">- All -</option>
      <?php

            while($row = mysqli_fetch_assoc($this->subjectList)){  

               echo "<option value='".$row['name']."'>".$row['name']."</option>";

            }
      ?>
     </select></td>
 </tr>
</table>
</div>-->

<h3 style="margin-left:10%;">Shedule</h3>

<table id="data" style="width:90%;margin-top:30px;">
<thead>
  <tr style="color:black">
    <th>Teacher</th>
    <th>Class</th>
    <th>Batch</th>
    <th>Time</th>
    <th>Hall</th>
    
    

    
  </tr>
 
</thead>
<tbody style="color:black" style="margin-top:25px;">
  <?php
    
      while($row = mysqli_fetch_assoc($this->schedules)){  
         echo "<tr><td>".$row['fname']."</td><td>".$row['name']."</td><td> ".$row['batch']."</td><td>" .$row['start_time']. "-".$row['end_time']."</td><td>".$row['hallName']."</td></tr>";
      
    }
  ?>
</tbody>
</tbody>


</table>
        </tr>
      </table>
        </td>

    </div>

    

<!-----------------Footer---------------->
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