<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <title>Enroll_Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
 <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <script type="text/javascript" src="http://localhost/IMS_Vidarsha/public/js/form_validation.js"></script>
  <link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigation">
  <link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/enrollStu">

  <!-- filter table -->

<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/libraries/filter-form-Controls-filtable/examples/classFees.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="<?php echo URL; ?>public/libraries/filter-form-Controls-filtable/filtable.js"></script>
<script>
$(function(){
  // Basic Filtable usage - pass in a div with the filters and the plugin will handle it
  $('#data').filtable({ controlPanel: $('.table-filters')});
});
</script>
<style>
  body {margin: 0; background-color: #fafafa; font-family: 'Open Sans';}
  .container { margin: 150px auto; max-width: 960px; }
  </style>
<!----------/filter table-------------->

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
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-user-o"></i>Enroll Student</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt fa-2x"></i></a></div>
   <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>


<!-----------------------------middle content------------------------------------->        
<div class="middle" style="background-color:#F8F8FF;">    

    <div class="container">
      <video id="preview" style="width:100%;height:150%;"></video>
                <script type="text/javascript">
                  let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                  scanner.addListener('scan', function (content) {
                    
                    var res = content.split("?");
                    document.getElementById("regNum").value = res[0];
                    document.getElementById("regName").value = res[1];
                    console.log(res);
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
 
                
        <form action="<?php echo URL; ?>enrollStudent/search" method="POST">        
        <table class="qr-scan">
            <tr><td><div class="qr"></div></td></tr>
            <tr><td><div class="popup"><input type="text" name="regNo" class="regNo" id="num" placeholder="Reg No" onfocusout="containsNumbers()">
             <span class="popuptext" id="number-popup"></span>
             </div></td></tr>
            <tr><td><input type="submit" name="search" value="Search" id=""class="search"></td></tr>

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
                    if("<?php echo $_GET['alert2']; ?>" =="fail1"){    
                      document.getElementById("msg").innerHTML="Student does not exsist!";
                      document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
                      alert.style.display = "block";
                    }else if("<?php echo $_GET['alert2']; ?>" =="fail2"){
                      document.getElementById("msg").innerHTML="Student does not excist!";
                      document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
                      alert.style.display = "block";
                    }
                </script> 

            
        </table>
      </form>
    </div>   
</div>  


<!---------------------------right side bar----------------------------------->
<div class="right" style="background-color:#F5F5F5;">
   <form action="<?php echo URL; ?>enrollStudent/create" method="POST"> 
    <div class="container" style="margin-top:0px;">
        <table class="image-detail">
          
             <tr><td><img src="<?php if(isset($this->image)){echo "http://localhost/IMS_Vidarsha/public/img/studentImages/".$this->image; }else{ echo "http://localhost/IMS_Vidarsha/public/img/placeholder.png"; }; ?>" width="200px" height="200px" ></td>
                <td><label style='color:black'>Reg No</label></br><input type='text' name='regNum' id='regNum' class='input' value="<?php if(isset($this->stuReg)){echo $this->stuReg; }else{ echo ""; }; ?>" ></br></br>
                    <label style='color:black'>Name</label></br><input type='text' name='name' class='input' id="regName" value="<?php if(isset($this->stuName)){echo $this->stuName; }else{ echo ""; }; ?>">
                </td>
            </tr>
          
        </table>

         <div class="table-filters">
  
    <table id="allocation"  style="width:100%;margin-top:30px;">
    <tr>
    <td style="color:black"><label for="filter-subject">Subject</label>
    <select name="subject" style="width:50%;" id="filter-subject" data-filter-col="0" >
      <option value="0">- All -</option>
      <?php
          if(isset($this->subjectList)){
            while($row = mysqli_fetch_assoc($this->subjectList)){  

               echo "<option value='".$row['name']."'>".$row['name']."</option>";

            }
          }
      ?></select></td>

      <td></td>


 
              <td style="color:black"><label for="filter-batch">Batch</label>
              <select name="batch" style="width:50%;" id="filter-batch" data-filter-col="1">
               <option value="">- All -</option>
              <option value="<?php echo date("Y");?>AL"><?php echo date("Y");?>AL</option>
              <option value="<?php echo date("Y")+1;?>AL"><?php echo date("Y")+1;?>AL</option>
              <option value="<?php echo date("Y")+2;?>AL"><?php echo date("Y")+2;?>AL</option>
              <option value="Revision">Revision</option>
            </select></td>
            </tr>
</table>
</div>
      </br>

      <table id="data" style="width:90%;margin-top:30px;">
<thead>
  <tr style="color:black">
    <th>Subject</th> 
    <th>Batch</th>
    <th>Maximum capacity</th>
    <th>Available capacity</th>
    <th></th>
    
    

    
  </tr>
 
</thead>
<tbody style="color:black" style="margin-top:25px;">
  <?php
    
      while($row = mysqli_fetch_assoc($this->classCapacity)){  
         echo "<tr><td>".$row['name']." </td><td>".$row['batch']."</td><td style=text-align:center>".$row['capacity']."</td><td style=text-align:center>".$row['count1']."</td><td><input type=submit class='btn' id='enrollbtn' value=Enroll ></td></tr>";
      
    }
  ?>
</tbody>
</tbody>


</table>
         

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
                  document.getElementById("msg").innerHTML="Student Registered Successfully!";
                  document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
                  alert.style.display = "block";
                }else if("<?php echo $_GET['alert']; ?>" =="fail"){
                  document.getElementById("msg").innerHTML="Failed to Register Student!";
                  document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
                  alert.style.display = "block";
                }
            </script> 
         
          <script type="text/javascript">
                var alert=document.getElementById("alertModal");
                if("<?php echo $_GET['alert1']; ?>" =="success"){    
                  document.getElementById("msg").innerHTML="Enrolled student Successfully!";
                  document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
                  alert.style.display = "block";
                }else if("<?php echo $_GET['alert1']; ?>" =="fail"){
                  document.getElementById("msg").innerHTML="Failed to enroll student!";
                  document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
                  alert.style.display = "block";
                }
            </script> 
  
    </div>
  </form>

 
</div>





<!-------------------------------footer------------------------------------------>
<div class="footer">
        <div id="copyright" class="cpy clear">           
          <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
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