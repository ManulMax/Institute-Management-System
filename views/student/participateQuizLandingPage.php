<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">    
<title>Participate Quiz</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/participateQuiz">

</head>


<body>

<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "40%" height = "100px" style= "margin-left: 25%">
  <ul>
    <li><a href="<?php echo URL; ?>studentHome"><i class="fas fa-home"></i>Dashboard</a></li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-download"></i>Download Materials
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="<?php echo URL; ?>materials/renderDownloadMaterials">2021 A/L</a>
          <a href="<?php echo URL; ?>materials/renderDownloadMaterials">2022 A/L</a>
          <a href="<?php echo URL; ?>materials/renderDownloadMaterials">2023 A/L</a>
          <a href="<?php echo URL; ?>materials/renderDownloadMaterials">Revision</a>
        </div>
    </li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-question"></i>Quizzes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="<?php echo URL; ?>participateQuizLandingPage">2021 A/L</a>
          <a href="<?php echo URL; ?>participateQuizLandingPage">2022 A/L</a>
          <a href="<?php echo URL; ?>participateQuizLandingPage">2023 A/L</a>
          <a href="<?php echo URL; ?>participateQuizLandingPage">Revision</a>
        </div>
    </li>
  </ul> 
  
  </div>


  <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-home"></i>Participate Quiz</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
   <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Student ;-)</div>
  </div>

  
  
  
  <div class="middle" style="background-color:#F8F8FF;">
  <form id="regForm" method="post" action="">
    <h1>"Quiz Name"</h1>
    <div class="topSection">Quiz Title:
    <br />
    <br />
    <p class="head" style="width: 60%;">Encapsulation</p><br />
    Time Limit:
  <br />
  <br />
    <p class="head" style="width: 20%;">30 minutes</p><br />
    </div>


    <a href="<?php echo URL; ?>participateQuiz">participate quiz</a>
    
  </form>
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
</script>

</html>