<!DOCTYPE html>
<html lang="en">
<head>
<title>Prepare result sheet</title>
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
    <li><a href="<?php echo URL; ?>materials"><i class="fas fa-upload"></i>Upload Materials</a></li>
    <li><a href="<?php echo URL; ?>createQuiz"><i class="fas fa-question"></i>Quizzes</a></li>
    <li><a href="<?php echo URL; ?>Classes"><i class="fas fa-users"></i>New Class</a></li>
    <li><a href="<?php echo URL; ?>reschedule"><i class="far fa-calendar-alt"></i>Re-schedule</a></li>
    <li><a href="<?php echo URL; ?>paperMarkerRegistration"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
    <li><a href="<?php echo URL; ?>salaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
     <li><a href="<?php echo URL; ?>materials"><i class="fas fa-upload"></i>Upload Result Sheet</a></li>
	</ul>
	
  </div>

 <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-upload"></i>Uplaod Result Sheet</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
   <div class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello taecher ;-)</div>
  </div>
  
  <!----------------------------------Middle contet------------------------------------>
  <div class="middle" style="background-color:#F8F8FF;">
	<div class="container">
    <table>
      <tr>
        <td>Class</td>
        <td><select>
      <option value="0">Select Class:</option>
      <option value="1">2021 A/L</option>
      <option value="2">2022 A/L</option>
      <option value="3">2023 A/L</option>
      <option value="4">Revision</option>
      </select></td>
      <td>Exam</td>
        <td><select>
      <option value="0">Select Exam:</option>
      <option value="1">Encapsulation</option>
      <option value="2"> Abstraction</option>
      <option value="3"> Inheritance</option>
      <option value="4">Exception handling</option>
      </select></td>
      </tr>

     </table>

      
        
     

    

    <br>

    <label>Choose file</label>
    <input type="file" name="uploadFile" class="btn">
    <br>

    <input type="submit" value="Upload" name="uplaod" class="btn2">

	</div>
  </div>
  
<!---------------------------------------Footer-------------------------------------->  

<div class="footer">
  <p>Footer</p>
</div>






</body>
</html>

