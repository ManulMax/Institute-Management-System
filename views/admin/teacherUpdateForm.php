<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/adminNav.css" />
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/registerTeacher.css" />
  <title>Teacher Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://localhost/IMS_Vidarsha/public/js/form_validation.js"></script>

</head>
<body>
<!-------------------Middle contet---------------------------------->
<div class="middle" style="background-color:#F8F8FF;">

<?php

while($row = mysqli_fetch_assoc($this->tecDetails)){ ?>

	<form id="regForm" action="<?php echo URL; ?>updateTeacher/update/<?php echo $this->userTec; ?>" method="post" onsubmit="validatstaff()">
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
          <input type="text" placeholder="Identity card number..." name="NIC_update"  id="NIC" value="<?php echo $row['NIC']; ?>" onfocusout="validateNIC()">
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
		    <input type="email" placeholder="Email address..." id="email" name="email_update" value="<?php echo $row['email']; ?>" onfocusout="validateEmail()">
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
      <label for="subject">Account No. :</label>
    </div>
    <div class="col-25">
      <input type="text" placeholder="Account number..." name="acc_update" value="<?php echo $row['acc_no']; ?>">
    </div>
    </div>

    <div class="row">
    <div class="col-15">
      <label for="subject">Bank Name :</label>
    </div>
    <div class="col-25">
      <div class="popup">
          <input type="text" placeholder="Bank Name..." name="bank_update"  id="fullname"  value="<?php echo $row['bank_name']; ?>" onfocusout="validateName()">
			  <span class="popuptext" id="name-popup"></span>
			</div>
    </div>
    </div>

    <div class="row">
    <div class="col-15">
      <label for="subject">Branch Name :</label>
    </div>
    <div class="col-25">
      <div class="popup">
          <input type="text" placeholder="Branch Name...." name="branch_update"  id="fullname" value="<?php //echo $row['branch_name']; ?>" onfocusout="validateName()">
			  <span class="popuptext" id="name-popup"></span>
			</div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-15">
      <label for="subject">Qualifications :</label>
    </div>
    <div class="col-75">
      <textarea rows="4" cols="90" name="qualification_update" ><?php echo $row['qualification']; ?></textarea>
    </div>
    </div>

    <div class="row">
    <div class="col-15" >
      <label for="subject">Subject :</label>
    </div>
    <div class="col-75">
      <div style="width:250px;">
      <select name="subject_update">
      <option value="0">Select Subject:</option>
      <option value="<?php echo $row['subject_id']; ?>"> <?php echo $row['subject_id'];?> </option>
      </select>
    </div>
    </div>
  </div>
    
    <div class="row" style="margin-top:30px;margin-right:10%;">
    <input type="submit" value="Save" style="padding-right: 30px;padding-left: 30px;">
    </div>
    
  </form>
  <?php } ?>
  </div>


</body>
</html>
