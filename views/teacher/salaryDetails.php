<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Salary Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/salaryDetailsStylesheet">




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
    <h2><i class="fas fa-money-bill-wave"></i>Salary Details</h2>
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

    <div class="wrapper">
      <div class="title" style="text-align: center;">
        <h3>Salary Payment Details</h3>

    <?php $sal = mysqli_fetch_assoc($this->salary); ?>
      
    <div class="details">
        <p>Payment month : <?php echo $sal['month'] ?></p><br />
        <p>Payment date : <?php echo $sal['date'] ?></p><br />
        <p>Total Salary : <?php echo $sal['amount'] ?></p>

        <p style="color: grey;font-weight:bold;margin-top:30px;">Class-wise salary :</p>
        <?php if(isset($this->classSal1)){
          $Sal1=mysqli_fetch_assoc($this->classSal1); }
          if(isset($this->classSal1)){
          $Sal2=mysqli_fetch_assoc($this->classSal2); }
          if(isset($this->classSal1)){
          $Sal3=mysqli_fetch_assoc($this->classSal3); }
          if(isset($this->classSal1)){
          $Sal4=mysqli_fetch_assoc($this->classSal4); } ?>
        <table id="salaryTable">
        <thead>
          <tr>
            <th>Class</th>
            <th>Income(Rs.)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo date("Y"); ?> AL</td>
            <td><?php if(isset($Sal1['totalAmount'])){ echo $Sal1['totalAmount']; }else{ echo "0.00"; } ?></td>
          </tr>
          <tr>
            <td><?php echo date("Y")+1; ?> AL</td>
            <td><?php if(isset($Sal2['totalAmount'])){ echo $Sal2['totalAmount']; }else{ echo "0.00"; } ?></td>
          </tr>
          <tr>
            <td><?php echo date("Y")+2; ?> AL</td>
            <td><?php if(isset($Sal3['totalAmount'])){ echo $Sal3['totalAmount']; }else{ echo "0.00"; } ?></td>
          </tr>
          <tr>
            <td>Revision</td>
            <td><?php if(isset($Sal4['totalAmount'])){ echo $Sal4['totalAmount']; }else{ echo "0.00"; } ?></td>
          </tr>
          <tr style="background-color: #ccc;">
            <td><b>Total</b></td>
            <td><?php echo $Sal1['totalAmount']+$Sal2['totalAmount']+$Sal3['totalAmount']+$Sal4['totalAmount']; ?></td>
          </tr>
        </tbody>


    </table> 
    
    
  </div>
       <form method="post" action="<?php echo URL; ?>views/teacher/generatepdf?sal=<?php echo $sal['amount']; ?>&user=<?php echo $_SESSION['userid']; ?>">
      <input type="submit" name="generatepdf" class="roundBtn" style="float: right;margin-right: 10px;" value="Download Report">
    </form>  
    
  </div>
</div>


  </div>


<div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>

</body>


<script type="text/javascript">
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

</html>