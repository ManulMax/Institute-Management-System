<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Mark attendance</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigation">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/markAttendance">
</head>


<body>

<!-------------------------------------Navigation bar--------------------------------------->
<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
    <ul>
       <li><a href="<?php echo URL; ?>staffDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
      <li><a href="<?php echo URL; ?>studentRegistration"><i class="fa fa-user-o"></i>Register Student</a></li>
      <li><a href="<?php echo URL; ?>viewStudent"><i class="fas fa-user-edit"></i>View Student</a></li>
      <li><a href="<?php echo URL; ?>enrollStudent"><i class="fa fa-user-o"></i>Enroll Student</a></li>
      <li><a href="<?php echo URL; ?>attendanceLandingPage"><i class="fas fa-users"></i>Mark Attendance</a></li>
      <li><a href="<?php echo URL; ?>collectClassFees"><i class="fa fa-money"></i>Collect fees</a></li>
      <li><a href="<?php echo URL; ?>staffSalaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
    </ul>
    
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
               echo "<h4 id='name'>Staff</h4><br />";
               /*echo "<p id='name'>Qualifications : ".$row['qualifications']."</p><br />";*/

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
              </div>";
            }
          ?>

    </div> 

  </div>

   <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-users"></i>Attendance</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt fa-2x"></i></a></div>
   <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

 

<!-----------------------------middle content------------------------------------->        
<div class="middle" style="background-color:#F8F8FF;">    

    <div class="container">
       
          
            <video id="preview" style="width:150%;height:50%;"></video>
                <script type="text/javascript">
                  let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                  scanner.addListener('scan', function (content) {
                    console.log(content);
                  });
                  Instascan.Camera.getCameras().then(function (cameras) {
                    if (cameras.length > 0) {
                      scanner.start(cameras[0]);
                    } else {
                      console.error('No cameras found.');
                    }
                  }).catch(function (e) {
                    console.error(e);
                  });
                </script> 
           
             
      <form action="<?php echo URL; ?>markAttendance/search" method="POST">        
        <table class="qr-scan">
            <tr><td><div class="qr"></div></td></tr>
            <tr><td><input type="text" name="regNo" class="regNo" placeholder="Reg No"></td></tr>
            <tr><td><input type="submit" name="search" value="Search" class="search"></td></tr>

            
        </table>
      </form>
    </div>   
</div>   

<!---------------------------right side bar----------------------------------->
  
<div class="right" style="background-color:#F5F5F5;">
    <div class="container">
      <form action="<?php echo URL; ?>markAttendance/create" method="POST"> 
        <table class="image-detail">
           <tr><td><img src="<?php if(isset($this->image)){echo "http://localhost/IMS_Vidarsha/public/img/studentImages/".$this->image; }else{ echo "http://localhost/IMS_Vidarsha/public/img/placeholder.png"; }; ?>" width="200px" height="200px" ></td>
                <td><label style='color:black'>Reg No</label></br><input type='text' name='regNum' class='input' value="<?php if(isset($this->stuReg)){echo $this->stuReg; }else{ echo ""; }; ?>" ></br></br>
                    <label style='color:black'>Name</label></br><input type='text' name='name' class='input' value="<?php if(isset($this->stuName)){echo $this->stuName; }else{ echo ""; }; ?>">
                </td>
            </tr>
            
            <tr>
              <td style="color:black">Last payment</td>
            </tr>

            <tr>
              <td style="color:black">Last payment date</td>
              <td><input type="text" name="payment-date" class="payment-date" value="<?php if(isset($this->stuLastPaymentDate)){echo $this->stuLastPaymentDate; }else{ echo ""; }; ?>"></td>
            </tr>

            <tr>
              <td style="color:black">Paid amount</td>
              <td><input type="text" name="paid-amount" class="paid-amount" value="<?php if(isset($this->stuLastPaidAmount)){echo $this->stuLastPaidAmount; }else{ echo ""; }; ?>"></td>
            </tr>
    
        </table>
        
        <input type="submit" name="save-attendance" value="Mark Attendance" class="search" style="margin-left:20%; margin-top:20%">
        
    </form>
    </div>
 
 
</div>

<!-------------------------------footer------------------------------------------>
<div class="footer">
        <div id="copyright" class="cpy clear">           
          <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
        </div>
      </div>


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
  
  </body>
  </html>