<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Update Papermarker</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://localhost/IMS_Vidarsha/public/js/form_validation.js"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/paperMarkerRegistrationStylesheet">

</head>


<body>

<div class="row">


  
  <div class="middle" style="background-color:white;margin-left: 10%">




      <?php

        while($row = mysqli_fetch_assoc($this->pmDetails)){ 

              echo "<form method='post' action='".URL."paperMarkerRegistration/update' class='form-container'>";
        
         echo "<div class='row'>
            <div class='col-75'>
              <h3 style='margin-right: 20%;float: right;'>Edit Paper Marker Details</h3>
            </div>
            <div class='col-25'>
            </div>
          </div>";
            echo "<div class='row'>
        <div class='col-15'>
          <label>Full Name :</label>
        </div>
        <div class='col-75'>
          <div class='popup'>
            <input type='text' id='fullname-update' placeholder='Full name...' name='name-update' value='".$row['name']."' onfocusout='validateName()' readonly>
            <span class='popuptext' id='name-popup-update'></span>
          </div>
        </div>
        </div>";
        
        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'> NIC :</label>
        </div>
        <div class='col-25'>
          <div class='popup'>
            <input type='text' placeholder='Identity card number...' id='NIC-update' name='NIC-update' value='".$row['NIC']."' onfocusout='validateNIC()' readonly>
            <span class='popuptext' id='NIC-popup-update'></span>
          </div>
        </div>
        <div class='col-10'>
        </div>
        <div class='col-15'>
          <label for='subject'>DOB :</label>
        </div>
        <div class='col-25'>
          <input type='date' name='DOB-update' value='".$row['DOB']."' readonly>
        </div>
        </div>";

        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Gender :</label>
        </div>
        <div class='col-15' class='genderLabel'>
          <input type='radio' value='male' name='gender-update' readonly>
          <label for='male'>Male</label>
        </div>
        <div class='col-15' class='genderLabel'>
          <input type='radio' value='female' name='gender-update' readonly>
          <label for='female'>Female</label>
        </div>
        </div>";
        
        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Email :</label>
        </div>
        <div class='col-75' style='width: 60%'>
        <div class='popup'>
          <input type='email' placeholder='Email address...' id='email-update' name='email-update' value='".$row['email']."' onfocusout='validateEmail()'>
          <span class='popuptext' id='email-popup-update'></span>
          </div>
        </div>
        </div>";
        
        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Address :</label>
        </div>
        <div class='col-75'>
          <textarea rows='4' cols='90' placeholder='Address...' name='address-update'>".$row['address']."</textarea>
        </div>
        </div>";
        
        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Mobile No. :</label>
        </div>
        <div class='col-25'>
        <div class='popup'>
          <input type='text' placeholder='Mobile number...' id='phone-update' name='tel-update' value='".$row['tel_no']."'>
          <span class='popuptext' id='phone-popup-update'></span>
        </div>
        </div>
        </div>";
        
        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Qualifications :</label>
        </div>
        <div class='col-75'>
          <textarea rows='4' cols='90' name='qualifications-update'>".$row['qualifications']."</textarea>
        </div>
        <div class='row'></div>
        <div class='row'>
        <div class='col-35'>
        </div>
        <div class='col-15' style='margin-top:30px;'>
          <a href='".URL."paperMarkerRegistration' class='btn' style='background-color:#333;padding: 12px 35px;'>Back</a>
        </div>
        <div class='col-15'>
          <input type='submit' class='btn' value='Update' style='padding: 12px 35px;'>
        </div>
        </div>
        </div>            
      </form>";
    }
          ?>


  </div>
 


<div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>

</div>

</body>
</html>

