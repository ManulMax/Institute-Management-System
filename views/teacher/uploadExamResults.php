<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Upload result sheet</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/uplaodResultSheet">

</head>


<body>
<!-------------------------Navigation Bar------------------->
<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
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
            <a href="<?php echo URL; ?>createQuiz/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
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
    <li><a href="<?php echo URL; ?>paperMarkerRegistration"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
    <li><a href="<?php echo URL; ?>salaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
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
    <h2><i class="fas fa-file-signature"></i>Exam Results</h2>
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
  
  <!----------------------------------Middle contet------------------------------------>
  <div class="middle" style="background-color:#F8F8FF;">
    <h2 class="className"><?php echo $this->batch ?> Class</h2>
    <div class="container">
      <h3 style="color: #00b359;">Add New Exam</h3>
    <form action="<?php echo URL; ?>uploadExamResults/addExam/<?php echo $this->classid.'/'.$this->batch; ?>" method="post" style="border: 1px solid #333">

      <div class="row">

      <div class="col-10">
        <label>Exam :</label>
      </div>
        <div class="col-25"><input type="text" name="exam"></div>
        <div class="col-15">
        <label>Exam Date :</label>
      </div>
        <div class="col-15"><input type="date" name="date"></div>
      </div>
      

      <div class="row">
          <input type="submit" name="Save" style="margin-left: 50%;">
      </div>

    </form>
    <h3 style="color: #00b359;margin-top: 60px;">Upload Resultsheet</h3>
    <form action="<?php echo URL; ?>uploadExamResults/addResultsheet/<?php echo $this->classid.'/'.$this->batch; ?>" method="post" enctype="multipart/form-data" style="border: 1px solid #333;">
      <div class="row">  
        <div class="col-10">
          <label>Exam :</label>
        </div>
        <div class="col-25">
          <select name="res-exam">
            <?php
            while($row=mysqli_fetch_assoc($this->exams)){
              echo "<option value='".$row['id']."'>".$row['topic']."</option>";
            }
            
            ?>
          </select>
        </div>
      </div>


       <!-- alert content -->
    <div id="alertModal" class="alert-modal">
      <div class="alert-modal-content">
      <span class="close">&times;</span>
      <div class='row' style='background-color:white;text-align: center;'>
        <h3>Resultsheet Uploaded Successfully!</h3>
        <img src="<?php echo URL; ?>public/img/success_icon.png" alt="Avatar" style="width:40%;">
       </div>
    </div>
  </div>

      <div class="row"> 
        <label style="margin-left: 40px;">Choose Resultsheet</label>
        <input type="file" name="uploadFile" class="btn">
        <input type="submit" value="Upload" name="uplaod">
        <script type="text/javascript">
            if("<?php echo $_GET['alert']; ?>" =="success"){
              var alert=document.getElementById("alertModal");
              alert.style.display = "block";
            }else if("<?php echo $_GET['alert']; ?>" =="fail"){
              alert("Failed to save record!");
            }
          </script> 
    </div>
    </form>

	</div>
  </div>

  
<!---------------------------------------Footer-------------------------------------->  

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

