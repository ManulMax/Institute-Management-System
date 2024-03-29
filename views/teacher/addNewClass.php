
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>New Class</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">


<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://localhost/IMS_Vidarsha/public/js/form_validation.js"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/addNewClassStylesheet">
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>

  
<!-- filter table -->
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/libraries/filter-form-Controls-filtable/examples/styles.css">
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

<button class="drop-btn">
          <i class="fas fa-list fa-lg"></i>
        </button>
        
    
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
    <h2><i class="fas fa-users"></i>New Class</h2>
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


 
  
  <div class="middle" style="background-color:#F8F8FF;">

    <!-- alert content -->
  <div id="alertModal" class="alert-modal">
      <div class="alert-modal-content">
      <span class="close">&times;</span>
      <div class='row' style='background-color:white;text-align: center;'>
        <h3 id="msg"></h3>
        <img id="alertImg" src="" alt="image" style="width:40%;">
       </div>
      </div>
    </div>

    <script type="text/javascript">
          var alert=document.getElementById("alertModal");
          if("<?php echo $_GET['alert']; ?>" =="fail"){
            document.getElementById("msg").innerHTML="The selected batch already has a class!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
            alert.style.display = "block";
          }
      </script>

<form id="regForm" action="<?php echo URL; ?>Classes/sendEmail" method="post">

  
  <div class="row">
    <div class="col-20" style="width: 25%;">
      <label for="subject">Batch :</label>
    </div>
    <div class="col-75">
      <div style="width:250px;">
      <select name="batch">
      <option value="0">Select Batch:</option>
      <option value="1"><?php echo date("Y"); ?>AL</option>
      <option value="2"><?php echo date("Y")+1; ?>AL</option>
      <option value="3"><?php echo date("Y")+2; ?>AL</option>
      <option value="4">Revision</option>
      </select>
    </div>
    </div>
  </div>
  
 <!-- <div class="row">
    <div class="col-20" style="width: 25%;">
      <label for="subject">Expected Student Count :</label>
    </div>
    <div class="col-30">
      <input type="text" name="stu-count">
    </div>
  </div>
-->
<br />

  

  <div class="container" style="margin-bottom:10px;margin-top: 0px;">

<div class="row">
<div class="table-filters">
   <div class="col-30">
    <label for="filter-day">Day:</label>
    <select id="filter-day" name="day" data-filter-col="0" style="min-width:60px">
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="Thursday">Thursday</option>
      <option value="Friday">Friday</option>
      <option value="Saturday">Saturday</option>
      <option value="Sunday">Sunday</option>
    </select>
  </div>
<div class="col-20"></div>
  <div class="col-30">
    <label for="filter-hall">Hall - Capacity:</label>
    <select id="filter-hall" name="hall" data-filter-col="2" style="min-width:60px">
      <?php
             $halls = [];
              while($hall=mysqli_fetch_assoc($this->hallList)) {
                  $halls[] = $hall;
              }
             foreach($halls as $row){
                echo "<option value='".$row['id']."'>".$row['name']." - ".$row['capacity']."</option>";
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
         echo "<tr><td>".$row['day']."</td><td>" .$row['start_time']. "-".$row['end_time']."</td><td>".$row['hallName']."</td><td>".$row['name']."</td><td>".$row['batch']."</td><td>".$row['fname']."</td></tr>";

      }

      
  ?>
 
</tbody>
</table>
</div>



<label style="color: grey;font-weight:bold;margin-top:30px;">New Class Duration:</label>

  <div class="row">
    <div class="col-20" style="width: 15%;">
      <label> Start Time :</label>
    </div>
    <div class="col-30">
      <input type="time" name="start-time">
    </div>
  <div class="col-20" style="width: 10%;">
    </div>
  <div class="col-20" style="width: 15%;">
      <label>End Time :</label>
    </div>
    <div class="col-30">
      <input type="time" name="end-time">
    </div>
  </div>

  <div class="row">
    <div class="col-20" style="width: 15%;">
      <label>Start Date :</label>
    </div>
    <div class="col-30">
      <input type="date" name="start-date">
    </div>
  </div>

  <div class="row">
  <div class="col-20" style="width: 15%;">
      <label>Monthly Fee(Rs.) :</label>
    </div>
    <div class="col-20">
      <div class="popup">
       <input type="text" name="fees" id="num" placeholder="Eg:-1000" onfocusout="containsNumbers()">
       <span class="popuptext" id="number-popup"></span>
      </div>
    </div>
  </div>
  <br />
  <div class="row" style="margin-top:30px;">
    <input type="submit" value="Send Details">
  </div>

    
</form>

</div>
  

<div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
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








// -------------------------------------------------------------------------

// Get the modal
var modal = document.getElementById("myModal");
var alertmodal = document.getElementById("alertModal");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var alertspan = document.getElementsByClassName("close")[1];


// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  if(modal.style.display == "block"){
    modal.style.display = "none";
  } 
}

alertspan.onclick = function() {
  if(alertmodal.style.display == "block"){
    alertmodal.style.display = "none";
  } 
}



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }else if (event.target == alertmodal) {
    alertmodal.style.display = "none";
  }
}


</script>

</html>