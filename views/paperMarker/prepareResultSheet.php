<!DOCTYPE html>
<html lang="en">
<head>
<title>Prepare result sheet</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavBar">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/prepareResultSheet">
</head>


<body>
<!-------------------------Navigation Bar------------------->
<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
      <li><a href="#"><i class="fa fa-user-o"></i>Prepare Result Sheet</a></li>
      <li><a href="#"><i class="fas fa-upload"></i>Uplaod material</a></li>
      
	</ul>
	
  </div>

 <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-user-edit"></i>Prepare Result Sheet</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
   <div class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello PaperMarker ;-)</div>
  </div>
  
  <!----------------------------------Middle contet------------------------------------>
  <div class="middle" style="background-color:white;">
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
      <option value="2"> Abstaction</option>
      <option value="3"> Inheritance</option>
      <option value="4">Exception Handing</option>
      </select></td>
      </tr>

     </table>

      
        <input type="submit" value="Generate student list" name="listGenerationButton" class="btn">
     

    

    <br>

    <label>Choose file</label>
    <input type="file" name="uploadFile" class="custom-file-input">

    <input type="submit" value="Send result sheet" name="resultSheet" class="btn2">

	</div>
  </div>
  
<!---------------------------------------Footer-------------------------------------->  

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>

