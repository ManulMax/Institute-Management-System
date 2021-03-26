<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Create Quiz</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/createQuizStylesheet">
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>

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


    <h2><i class="fas fa-question"></i>Quizzes</h2>
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


               echo "<h2 id='name'>".$row['fname']." ".$row['mname']." ".$row['lname']."</h2>";
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

    <h2 class="className"><?php echo $_SESSION['batch']; ?> Class</h2>

  <form id="regForm" method="post" action="<?php echo URL; ?>createQuiz/create">
    <h1>Create Quiz:</h1>
    <div class="topSection">Quiz Title:
    <p style="width: 60%;"><input style="background-color: #ACE1AF;" type="text" name="topic" required></p><br /><br />
    Time Limit:
    <table style="margin-top: 20px;">
      <tr>
        <td><p>Hours:</p></td>
        <td><p>Minutes:</p></td>
      </tr>
      <tr>
        <td><input style="background-color: #ACE1AF;" type="number" name="time" min="0" max="3" required></td>
        <td><input style="background-color: #ACE1AF;" type="number" name="time" min="0" max="59" required></td>
      </tr>
    </table>
    </div>
    <!-- One "tab" for each step in the form: -->
    <?php $qno = 1; ?>
    <div class="tab" id="qlist1"><p class="qnum">Question 1 :</p>
    <p><textarea rows="4" cols="90" name="ques[]" required></textarea></p>
    
    <table border="0" width="100%" cellpadding="10px">
      <tbody>
        <tr>
          <td>1.<input type="text" placeholder="Choice 1..." name="ans1[]" class="ans1" required></td>
        </tr>
        <tr>
          <td>2.<input type="text" placeholder="Choice 2..." name="ans2[]" class="ans2" required></td>
        </tr>
        <tr>
          <td>3.<input type="text" placeholder="Choice 3..." name="ans3[]" class="ans3" required></td>
        </tr>
        <tr>
          <td>4.<input type="text" placeholder="Choice 4..." name="ans4[]" class="ans4" required></td>
        </tr>
        <tr>
          <td>5.<input type="text" placeholder="Choice 5..."  name="ans5[]" class="ans5" required></td>
        </tr>
        <tr>
          <td style="float: right;"><p>Correct Answer :</p><input type="number" class="choice" name="choice[]" min="1" max="5" required></td>
        </tr>
      </tbody>
    </table>
    <br />
    
    </div>

    <div style="overflow:auto;">
    <div style="float:right;">
      <input type="submit" name="Submit" value="Submit">
      <button type="button" id="next" onclick="myFunction()">New Question</button>
    </div>
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
var count = 0;
var i= 2;
var qno = 2;
function myFunction(){
  if(count == 0){
    var itm = document.getElementById("qlist1");
    var cln = itm.cloneNode(true);
    cln.id = "qlist".i;
    cln.querySelector(".qnum").innerHTML = 'Question '+ qno + ' :';
    qno++;
    cln.querySelector(".ans1").value = '';
    cln.querySelector(".ans2").value = '';
    cln.querySelector(".ans3").value = '';
    cln.querySelector(".ans4").value = '';
    cln.querySelector(".ans5").value = '';
    cln.querySelector(".choice").value = '';

    cln.querySelector("textarea").value = '';
    document.getElementById("qlist1").appendChild(cln);
    count++;
    i++;
  }else{
    var prevID = i-1;
    var itm = document.getElementById("qlist1").lastChild;
    var cln = itm.cloneNode(true);
    cln.id = "qlist".i;
    cln.querySelector(".qnum").innerHTML = 'Question '+ qno + ' :';
    qno++;
    cln.querySelector(".ans1").value = '';
    cln.querySelector(".ans2").value = '';
    cln.querySelector(".ans3").value = '';
    cln.querySelector(".ans4").value = '';
    cln.querySelector(".ans5").value = '';
    cln.querySelector(".choice").value = '';

    cln.querySelector("textarea").value = '';
      
    document.getElementById("qlist1").appendChild(cln);
    count++;
    i++;
  }
  
}





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



var drop = document.getElementsByClassName("drop-btn");
var i;

for (i = 0; i < drop.length; i++) {
  drop[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropContent = this.nextElementSibling;
  if (dropContent.style.display === "block") {
  dropContent.style.display = "none";
  } else {
  dropContent.style.display = "block";
  }
  });
}





var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}





function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
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

</html>