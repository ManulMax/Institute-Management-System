<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="<?php echo URL; ?>public/img/logo.png"> 
<title>PaperMarker Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php echo URL; ?>public/libraries/calendar-datepickerdemo/css/mobiscroll.javascript.min.css">
<script src="<?php echo URL; ?>public/libraries/calendar-datepickerdemo/js/mobiscroll.javascript.min.js"></script>

<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/paperMarkerDashboard">

<link href='https://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet'>


</head>


<body>

<div class="row">


  <div class="leftNav">
  <img class="logo" src="<?php echo URL; ?>public/img/logo.png">
  <ul>
    <li><a href="<?php echo URL; ?>paperMarkerDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
      <li>
        <button class="dropdown-btn"><i class="fas fa-upload"></i>Upload Materials
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
             $classes = []; //create array
              while($class=mysqli_fetch_assoc($this->classList)) {
                  $classes[] = $class; //assign whole values to array
              }
             foreach($classes as $row){ ?>

                <a href="<?php echo URL; ?>materials/renderPmMaterials/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
          <?php  } ?>

        </div>
    </li>
    <li>
        <button class="dropdown-btn"><i class="fa fa-user-o"></i>Prepare Result Sheet
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
             foreach($classes as $row){ ?>
                <a href="<?php echo URL; ?>prepareResultSheet/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
          <?php  } ?>

        </div>
    </li>
   
    
  </ul> 
  
  </div>


  <div class="headerClass">
    <h2><i class="fas fa-home"></i>Dashboard</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>



  <div id="myModal" class="modal">

  <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <img src="<?php echo URL; ?>public/img/img_avatar.png" alt="Avatar" style="width:20%;border-radius: 50%;margin-left: 40%">
      <?php

            while($row = mysqli_fetch_assoc($this->userDetails)){  

               echo "<h2 id='name'>".$row['name']."</h2>";
               echo "<h4 id='name'>Paper Marker-Chemistry</h4><br />";
               echo "<h4 id='name'>Teacher ()</h4><br />";
               echo "<p id='name'>Qualifications : ".$row['qualifications']."</p><br />";

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



  <div class="middle" style="background-color: #F8F8FF;">


    <table width="100%"  height="200px">
      <tr>

        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fas fa-users fa-2x"></i></div>
            <?php

            while($row = mysqli_fetch_assoc($this->stuCount1)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>2 Students</b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b>2020 A/L</b></h4>  
          </div>
        </div>
        </td>
        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon2" class="fas fa-users fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->stuCount2)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>3 Students</b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b>2021 A/L</b></h4>  
          </div>
        </div>
        </td>
      <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon3" class="fas fa-users fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->stuCount3)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>2 Students</b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b>2022 A/L</b></h4>  
          </div>
        </div>
        </td>
        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon4" class="fas fa-users fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->stuCount4)){  

               echo "<div style='margin-left: 37%;margin-top: -35px;'><h4><b>4 Students</b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b>Revision</b></h4>  
          </div>
        </div>
        </td>

      </tr>
    </table>



    <div style="position: relative;width: 100%;height: 400px;margin-top: 10%;">
      <h3 style="margin-left: 40%;padding-top: 50px;">Class schedules</h3>
    </div>


<div class="container">
<!-- data taken from generatedata.com -->
<table id="data">
<thead>
  <tr>
    <th>Class</th>
    <th>Day</th>
    <th>Time</th>
    <th>Hall</th>
  </tr>
</thead>
<tbody>
  <?php

      while($row = mysqli_fetch_assoc($this->schedules)){  
         echo "<tr><td>".$row['name']." ".$row['batch']."</td><td>".$row['day']."</td><td>" .$row['start_time']. "-".$row['end_time']."</td><td>".$row['hallName']."</td></tr>";

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