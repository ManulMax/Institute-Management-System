<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Update Student</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://localhost/IMS_Vidarsha/public/js/form_validation.js"></script>
<script type="text/javascript" src="http://localhost/IMS_Vidarsha/public/js/studentReg.js"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/paperMarkerRegistrationStylesheet">

</head>


<body>
 
<div class="row">


  
  <div class="middle" style="background-color:white;margin-left: 10%">




      <?php

        while($row = mysqli_fetch_assoc($this->stuDetails)){ 

              echo "<form method='post' action='".URL."viewStudent/update' class='form-container'>";
        
         echo "<div class='row'>
            <div class='col-75'>
              <h3 style='margin-right: 20%;float: right;'>Edit Student Details</h3>
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
            <input type='text' id='fullname' placeholder='Full name...' name='fname-update' value='".$row['fname']."' onfocusout='validateName()' readonly>
            <span class='popuptext' id='name-popup'></span>
          </div>
        </div>
        </div>";
        
        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'> NIC :</label>
        </div>
        <div class='col-25'>
          <div class='popup'>
            <input type='text' placeholder='Identity card number...' id='NIC' name='NIC-update' value='".$row['NIC']."' onfocusout='validateNIC()' readonly>
            <span class='popuptext' id='NIC-popup'></span>
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
          <input type='email' placeholder='Email address...' id='email' name='email-update' value='".$row['email']."' onfocusout='validateEmail()' readonly>
          <span class='popuptext' id='email-popup'></span>
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
          <input type='text' placeholder='Mobile number...' id='phone' name='tel-update' value='".$row['tel_no']."' onfocusout='validatePhoneNumber()'>
          <span class='popuptext' id='phone-popup'></span>
        </div>
        </div>
        </div>";
        

        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Parent name :</label>
        </div>
        <div class='col-25'>
        <div class='popup'>
          <input type='text' placeholder='Parent name...' id='parent_name-upd' name='parent_name-update' value='".$row['name']."' readonly onfocusout='validateParentName()''>
          <span class='popuptext' id='parent_name-popup'></span>
        </div>
        </div>
        </div>";

        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Parent Mobile No. :</label>
        </div>
        <div class='col-25'>
        <div class='popup'>
          <input type='text' placeholder='Parent Mobile number...' id='parent_tel' name='parent_tel-update' value='".$row['tel_no']."' onfocusout='validateParentPhoneNumber()'>
          <span class='popuptext' id='parentTel-popup'></span>
        </div>
        </div>
        </div>";

        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>School :</label>
        </div>
        <div class='col-25'>
          <input type='text' placeholder='School...' id='school-update' name='school-update' value='".$row['school']."'>        
        </div>
        
        </div>";

        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Grade :</label>
        </div>
        <div class='col-25'>
        <div class='popup'>
          <input type='text' placeholder='Class...' id='num' name='grade-update' value='".$row['grade']."' onfocusout='containsNumbers()'>
          <span class='popuptext' id='number-popup'></span>
        </div>
        </div>
        </div>";

        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Stream :</label>
        </div>
        <div class='col-25'>
        <div class='popup'>
          <input type='text' placeholder='Stream...' id='stream-update' name='stream-update' value='".$row['stream']."'>
          <span class='popuptext' id='stream-popup-update'></span>
        </div>
        </div>
        </div>";
        
        echo "<div class='row'>
        <div class='col-15'>
          <label for='subject'>Subjects :</label>
        </div>
        <div class='col-75'>
        <div class='popup'>
         <input type='text' placeholder='.Subject 1..' id='subject1' name='subject1-update' value='".$row['subject1']."' onfocusout='validateSubject1()'>
         <span class='popuptext' id='subject1-popup'></span>
         </div>
         <div class='popup'>
         <input type='text' placeholder='.Subject 2..' id='subject2' name='subject2-update' value='".$row['subject2']."' onfocusout='validateSubject2()'>
         <span class='popuptext' id='subject2-popup'></span>
         </div>
         <div class='popup'>
         <input type='text' placeholder='.Subject 3..' id='subject3' name='subject3-update' value='".$row['subject3']."' onfocusout='validateSubject3()'>
         <span class='popuptext' id='subject3-popup'></span>
         </div>
        </div>
        <div class='row'></div>
        <div class='row'>
        <div class='col-35'>
        </div>
        <div class='col-15' style='margin-top:30px;'>
          <a href='".URL."viewStudent' class='btn' style='background-color:#333;padding: 12px 35px;'>Back</a>
        </div>


        <div class='col-15'>
          <input type='submit' class='btn' value='Update'  style='padding: 12px 35px;'>
        </div>
        </div>
        </div>            
      </form>";
    }
          ?>


  <!-- alert content -->
  <div id="alertModal" class="alert-modal">
      <div class="alert-modal-content">
      <span class="close">&times;</span>
      <div class='row' style='background-color:white;text-align: center;'>
        <h3 id="msg"></h3>
        <img id="alertImg" src="" alt="image" style="width:40%;">
       </div>
      </div>
    </div>

    
   
    <script type="text/javascript">
          var alert=document.getElementById("alertModal");
          if("<?php echo $_GET['alert']; ?>" =="success"){    
            document.getElementById("msg").innerHTML="Student Details Saved Successfully!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
            alert.style.display = "block";
          }else if("<?php echo $_GET['alert']; ?>" =="fail"){
            document.getElementById("msg").innerHTML="Failed to Save student Details!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
            alert.style.display = "block";
          }
      </script> 
         

   


  </div>
 


<div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>

</div>

</body>

<script>
  // Get the modal
var modal = document.getElementById("myModal");
var alertmodal = document.getElementById("alertModal");
var confirmmodal = document.getElementById("confirmModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var alertspan = document.getElementsByClassName("close")[1];
var confirmspan = document.getElementsByClassName("close")[2];

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

confirmspan.onclick = function() {
  if(confirmmodal.style.display == "block"){
      confirmmodal.style.display = "none";
  }  
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }else if (event.target == alertmodal) {
    alertmodal.style.display = "none";
  }else if (event.target == confirmmodal) {
    confirmmodal.style.display = "none";
  }
}




</script>
</html>

