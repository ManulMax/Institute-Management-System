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
          <a href="<?php echo URL; ?>downloadMaterials" id="cl1" onclick="getMaterials('cl1')"><?php echo date("Y"); ?> A/L</a>
          <a href="<?php echo URL; ?>downloadMaterials" id="cl2" onclick="getMaterials('cl2')"><?php echo date("Y")+1; ?> A/L</a>
          <a href="<?php echo URL; ?>downloadMaterials" id="cl3" onclick="getMaterials('cl3')"><?php echo date("Y")+2; ?> A/L</a>
          <a href="<?php echo URL; ?>downloadMaterials" id="cl4" onclick="getMaterials('cl4')">Revision</a>
        </div>
    </li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-question"></i>Quizzes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="<?php echo URL; ?>participateQuiz"><?php echo date("Y"); ?> A/L</a>
          <a href="<?php echo URL; ?>participateQuiz"><?php echo date("Y")+1; ?> A/L</a>
          <a href="<?php echo URL; ?>participateQuiz"><?php echo date("Y")+2; ?> A/L</a>
          <a href="<?php echo URL; ?>participateQuiz">Revision</a>
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
  <form id="regForm" method="post" action="<?php echo URL; ?>createQuiz/create">
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
    <p id="demo"></p>


    <a href="?php echo URL; ?>participateQuiz"><input type="submit" name="attempt quiz" class="go" value="Attempt Quiz">
    
  </form>
  </div>
  
  
  
</div>



</body>



</html>