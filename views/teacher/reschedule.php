<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Re-schedule</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">


<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/rescheduleStylesheet">



<!-- filter table -->

<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/libraries/filter-form-Controls-filtable/examples/styles.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="<?php echo URL; ?>public/libraries/filter-form-Controls-filtable/filtable.js"></script>
<script>
$(function(){
  $('#data').filtable({ controlPanel: $('.table-filters')});
});
</script>
</head>


<body>

<div class="row">
  <div class="leftNav">
  <img class="logo" src="<?php echo URL; ?>public/img/logo.png">
  <ul>
    <li><a href="<?php echo URL; ?>teacherHome"><i class="fas fa-home"></i>Dashboard</a></li>
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
             foreach($classes as $row){  ?>
                <a href="<?php echo URL; ?>materials/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
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
            <a href="<?php echo URL; ?>Quiz/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
    <li><a href="<?php echo URL; ?>Classes"><i class="fas fa-users"></i>New Class</a></li>
    <li>
        <button class="dropdown-btn"><i class="far fa-calendar-alt"></i>Re-schedule
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
       
         foreach($classes as $row){  ?>
            <a href="<?php echo URL; ?>reschedule/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
    <li><a href="<?php echo URL; ?>Papermarker"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
    <li><a href="<?php echo URL; ?>TeacherSalary"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-file-signature"></i>Exam Results
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
       
         foreach($classes as $row){  ?>
            <a href="<?php echo URL; ?>uploadExamResults/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
  </ul>
  
  
  </div>
  <div class="headerClass">
    <h2><i class="far fa-calendar-alt"></i>Re-schedule</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
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


               echo "<h2 id='name'>".$row['fname']."</h2>";
               echo "<h4 id='name'>Teacher (Chemistry)</h4><br />";
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
                <br />
              </div>
              <br />";
             
            }
          ?>

    </div>

  </div>


  
  
  
  <!--  <div class="row">
    <div class="col-40">
      <label class="container">Temporary Re-schedule
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
      </label>
    </div>
    <div class="col-40">
      <label class="container">Permanant Re-schedule
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
    </div>    
    </div>
  -->  
<div class="middle" style="background-color:#F8F8FF;">

  <h2 class="className"><?php echo $this->batch; ?> Class</h2>

<form id="regForm" action="<?php echo URL; ?>reschedule/sendRescheduleEmail" method="post">

  <?php $sch = mysqli_fetch_assoc($this->schedule); ?>

<!--
<div class="row">
    <div class="col-40" style="margin: 0;">
      <label class="containerRadio">Temporary Re-schedule
        <input type="radio" value="T" checked="checked" name="radio">
        <span class="checkmark"></span>
      </label>
    </div>
    <div class="col-40" style="margin: 0;">
      <label class="containerRadio">Permanant Re-schedule
        <input type="radio" value="P" name="radio">
        <span class="checkmark"></span>
      </label>
    </div>    
</div>
-->
 <!-- 
  <div class="row">
    <div class="col-20">
      <label for="subject">No. of Students :</label>
    </div>
    <div class="col-30">
      <input type="text" name="stu-count" value="<?php echo $sch['size']; ?>">
    </div>
  </div>
-->

  

  <div class="container" style="margin-bottom:10px;margin-top: 0px;">

<div class="row">
<div class="table-filters">
   <div class="col-30">
    <label for="filter-day">Day:</label>
    <select id="filter-day" data-filter-col="0" style="min-width:60px" name="day">
      <option value="Monday" <?php if($sch['day'] == "Monday"){ echo "selected='selected'"; } ?> >Monday</option>
      <option value="Tuesday" <?php if($sch['day'] == "Tuesday"){ echo "selected='selected'"; } ?> >Tuesday</option>
      <option value="Wednesday" <?php if($sch['day'] == "Wednesday"){ echo "selected='selected'"; } ?> >Wednesday</option>
      <option value="Thursday" <?php if($sch['day'] == "Thursday"){ echo "selected='selected'"; } ?> >Thursday</option>
      <option value="Friday" <?php if($sch['day'] == "Friday"){ echo "selected='selected'"; } ?> >Friday</option>
      <option value="Saturday" <?php if($sch['day'] == "Saturday"){ echo "selected='selected'"; } ?> >Saturday</option>
      <option value="Sunday" <?php if($sch['day'] == "Sunday"){ echo "selected='selected'"; } ?> >Sunday</option>
    </select>
  </div>
<div class="col-20"></div>
  <div class="col-30">
    <label for="filter-hall">Hall - Capacity:</label>
    <select id="filter-hall" data-filter-col="2" style="min-width:60px" name="hall">
      <?php

            while($row = mysqli_fetch_assoc($this->hallList)){ 
              if ($row['name'] == $sch['hallName']) {
                 echo "<option value='".$row['id']."' selected='selected'>".$row['name']." - ".$row['capacity']."</option>";
               } else{
                  echo "<option value='".$row['id']."'>".$row['name']." - ".$row['capacity']."</option>";
               }

            }
      ?>
    </select>
  </div>


</div>
</div>
<br />
<label style="color: grey;font-weight:bold;margin-top:30px;">Current Hall Allocations :</label>
<table id="data" style="width: 100%;margin-right: 0;">
<thead>
  <tr>
    <th>Day</th>
    <th>Time</th>
    <th>Hall</th>
    <th>Subject</th>
    <th>Batch</th>
    <th>Teacher</th>
  </tr>
</thead>
<tbody>

  <?php

      while($row = mysqli_fetch_assoc($this->scheduleList)){  
         echo "<tr><td>".$row['day']."</td><td>" .$row['start_time']. "-".$row['end_time']."</td><td>".$row['hallName']."</td><td>".$row['name']."</td><td>".$row['batch']."</td><td>".$row['fname']." ".$row['mname']." ".$row['lname']."</td></tr>";

      }
  ?>
 
</tbody>
</table>
</div>


<label style="color: grey;font-weight:bold;margin-top:30px;">Change Class Start & End Times:</label>

  <div class="row">
    <div class="col-20" style="width: 15%;">
      <label for="subject"> Start Time :</label>
    </div>
    <div class="col-30">
      <input type="time" name="start-time" value="<?php echo $sch['start_time']; ?>">
    </div>
  <div class="col-20" style="width: 10%;">
    </div>
  <div class="col-20" style="width: 15%;">
      <label for="subject">End Time :</label>
    </div>
    <div class="col-30">
      <input type="time" name="end-time" value="<?php echo $sch['end_time']; ?>">
    </div>
  </div>

 <!-- <div class="row">
    <div class="col-20" style="width: 15%;">
      <label>Start Date :</label>
    </div>
    <div class="col-30">
      <input type="date" name="start-date" value="<?php echo $sch['end_time']; ?>">
    </div>
  </div> -->

  <div class="row" style="margin-top:30px;">
    <input type="submit" value="Send Details">
  </div>

    
</form>

</div>



<div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>

</body>

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




var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);






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


</html>