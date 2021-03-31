<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/adminNav.css" />
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/registerTeacher.css" />
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/registerTeacher.css" />
  <title>Student Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://localhost/IMS_Vidarsha/public/js/form_validation.js"></script>

</head>
<body>
<!-------------------Middle contet---------------------------------->
<div class="middle" style="background-color:#F8F8FF;">

<?php

while($row = mysqli_fetch_assoc($this->stuDetails)){ ?>

	<form id="regForm" action="<?php echo URL; ?>updateStudent/update/<?php echo $this->userStu; ?>" method="post" onsubmit="validatstaff()">
    <div class="row">
    <div class="col-15">
      <label for="subject">Full Name :</label>
    </div>
    <div class="col-25">      
      <div class="popup">
          <input type="text" placeholder="Full name..." name="fname_update"  id="fullname" value="<?php echo $row['fname']; ?>" onfocusout="validateName()">
			  <span class="popuptext" id="name-popup"></span>
			</div>
    </div>
    <div class="col-10">
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject"> NIC :</label>
    </div>
    <div class="col-25">      
      <div class="popup">
          <input type="text" placeholder="Identity card number..." name="NIC_update"  id="NIC" value="<?php echo $row['NIC']; ?>" onfocusout="validateNIC()" readonly>
			  <span class="popuptext" id="NIC-popup"></span>
			</div>
    </div>
    <div class="col-10">
    </div>
    <div class="col-15">
      <label for="subject">DOB :</label>
    </div>
    <div class="col-25">      
      <div class="popup">
          <input type="date" name="DOB_update" id="DOB" value="<?php echo $row['DOB']; ?>">
		   <span class="popuptext" id="DOB-popup"></span>
		  </div>
    </div>
    </div>

    <div class="row">
    <div class="col-15">
      <label for="subject">Gender :</label>
    </div>
    <div class="col-15" class="genderLabel">
      <?php $gender = $row['gender']; ?>
      <input type="radio" value="male" name="gender"  <?php echo ($gender=='male')?'checked':'' ?> readonly>
      <label for="male">Male</label>
    </div>
    <div class="col-15" class="genderLabel">
      <input type="radio" value="female" name="gender" <?php echo ($gender=='female')?'checked':'' ?> readonly>
      <label for="female">Female</label>
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject">Email :</label>
    </div>
    <div class="col-75" style="width: 60%">
      <div class="popup">
		    <input type="email" placeholder="Email address..." id="email" name="email_update" value="<?php echo $row['email']; ?>" onfocusout="validateEmail()" readonly>
		  <span class="popuptext" id="email-popup"></span>
		  </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject">Address :</label>
    </div>
    <div class="col-75">
      <textarea rows="4" cols="90" placeholder="Address..." name="address_update" ><?php echo $row['address']; ?></textarea>
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject">Mobile No. :</label>
    </div>
    <div class="col-25">
      <div class="popup">
		      <input type="text" placeholder="Mobile number..." id="phone" name="tel_update"  value="<?php echo $row['tel_no']; ?>" onfocusout="validatePhoneNumber()">
		    <span class="popuptext" id="phone-popup"></span>
		  </div>
    </div>
    <div class="col-10">
    </div>
    <div class="col-15">
      <label for="subject">Reg Date :</label>
    </div>
    <div class="col-25">
      <input type="date" name="today" id="currentDate" value="<?php echo $row['reg_date']; ?>" readonly/>
    </div>
    </div>

    <div class="row">
    <div class="col-15">
      <label for="subject">School :</label>
    </div>
    <div class="col-25">
      <input type="text" placeholder="School..." name="school_update" value="<?php echo $row['school']; ?>">
    </div>
    </div>

    <div class="row">
    <div class="col-15">
      <label for="subject">Grade :</label>
    </div>
    <div class="col-25">
      <div class="popup">
          <input type="text" placeholder="Grade..." name="grade_update"  id="Grade"  value="<?php echo $row['grade']; ?>" >
			  <span class="popuptext" id="name-popup"></span>
			</div>
    </div>
    </div>

    <div class="row">
    <div class="col-15">
      <label for="subject">Stream :</label>
    </div>
    <div class="col-25">
      <div class="popup">
          <input type="text" placeholder="A/L Stream...." name="stream_update"  id="Stream" value="<?php echo $row['stream']; ?>" onfocusout="validateName()">
			  <span class="popuptext" id="name-popup"></span>
			</div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-15" >

  </div>
    
    <div class="row" style="margin-top:30px;margin-right:10%;">
    <input type="submit" value="Save" style="padding-right: 30px;padding-left: 30px;">
    </div>
    
  </form>
  <?php } ?>
  </div>


</body>
</html>
