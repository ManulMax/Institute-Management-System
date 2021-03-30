
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png"> 
<title>Collect Class Fees</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigation">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/classFees">

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

               echo "<h2 id='name'>".$row['fname']."</h2>";
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
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-money"></i>Fees Collection</h2>
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

        <form action="<?php echo URL; ?>collectClassFees/search" method="POST">        
        <table class="qr-scan">
            <tr><td><div class="qr"></div></td></tr>
            <tr><td><input type="text" name="regNo" class="regNo" placeholder="Reg No"></td></tr>
            <tr><td><input type="submit" name="search" value="Search" class="search"></td></tr>
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
<div class="right" style="background-color:#F5F5F5; overflow-x: auto">
  <form action="<?php echo URL; ?>collectClassFees/create" method="POST"> 
    <div class="container" style="margin-top:0px;">
        <table class="image-detail">
            <tr><td><img src="<?php if(isset($this->image)){echo "http://localhost/IMS_Vidarsha/public/img/studentImages/".$this->image; }else{ echo "http://localhost/IMS_Vidarsha/public/img/placeholder.png"; }; ?>" width="200px" height="200px" ></td>
                <td><label style='color:black'>Reg No</label></br><input type='text' name='regNum' id="regNum" class='input' value="<?php if(isset($this->stuReg)){echo $this->stuReg; }else{ echo ""; }; ?>" ></br></br>
                    <label style='color:black'>Name</label></br><input type='text' name='name' id="regName" class='input' value="<?php if(isset($this->stuName)){echo $this->stuName; }else{ echo ""; }; ?>">
                </td>
            </tr>
          </table>

  
    <div class="table-filters">
  
    <table id="allocation"  style="width:100%;margin-top:30px;">
    <tr>
    <td style="color:black"><label for="filter-subject">Subject</label>
    <select name="subject" style="width:50%;" id="filter-subject" data-filter-col="0" >
      <option value="">- All -</option>
      <?php
          if(isset($this->subjectList)){
            while($row = mysqli_fetch_assoc($this->subjectList)){  

               echo "<option value='".$row['name']."'>".$row['name']."</option>";

            }
          }
      ?></select></td>



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


<!-- data taken from generatedata.com -->
<table id="data" style="width:90%;margin-top:30px;">
<thead>
  <tr style="color:black">
    <th>Subject</th>
    <th>Batch</th>
    <th>Fees</th>
    
    

    
  </tr>
</thead>
<tbody style="color:black" style="margin-top:25px;">
  <?php
    if(isset($this->fees)){
      while($row = mysqli_fetch_assoc($this->fees)){  
         echo "<tr><td>".$row['name']." </td><td>".$row['batch']."</td><td>" .$row['monthly_fee']. "</td></tr>";
      }
    }
  ?>
</tbody>


</table >


<div id="myBtn2" class="save" style="margin-right:40%; margin-top:20%; width:40%;"><h5 style="text-align: center;">View Payment details</h5></div>
 <!--<button id='myBtn2' class="save" style="margin-right:40%; margin-top:20%; width:40%;"><a href='<?php echo URL; ?>collectClassFees/fees'></a>View payment details</button>-->
<!-- <i id='myBtn2' class="save" style="margin-right:40%; margin-top:20%; width:40%;"><a href='<?php echo URL; ?>collectClassFees/fees' style="text-decoration: none;color:white;margin-left: 50px;">View payment details</a></i> -->


           <!--<table class="image-detail" style="margin-top:5px;" > 

            <tr>
              <td style="color:black"><h3>Payment details</h3></td>
            </tr>

            <tr>
              <td style="color:black">Last paid month</td>
              <td><input type="text" name="month" class="paid-month" value="<?php if(isset($this->stuLastPaidMonth)){echo $this->stuLastPaidMonth; }else{ echo ""; }; ?>"></td>
            </tr>

             <tr>
              <td style="color:black">Current payment month</td>
              <td><select name="currentPaymentMonth">
              <option value="">-All-</option>  
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
            </select></td></td>
            </tr>

            
            <tr>
              <td style="color:black">Payment amount</td>
              <td><input type="text" name="paid-amount" class="paid-amount"></td>
            </tr>

    value=<?php if(isset($this->stuLastPaidMonth)){echo $this->stuLastPaidMonth; }else{ echo ""; }; ?>"        
    
       </table>-->        
       
<div id="myModal2" class="modal">

  <!-- Modal content -->
   <div class="modal-content">
      <span class="close">&times;</span>
     <h3>Payment details</h3>
      

      <label>Last paid month</label></br>
          <p name="month" class="paid-month" id="month" style="background-color: white;width:50%;color: black;margin-left:10%;" ><?php echo $this->feesMonth; ?></p>
        </br>
      <label>Current payment month</label></br>
        <select name="currentPaymentMonth" style="background-color: white;width:50%;">
              <option value="">-All-</option>  
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
            </select>
          </br>
      <label>Payment amount</label>  </br>  
                <p name="paid-amount" class="paid-amount" id="amount" style="background-color: white;width:50%;color: black;margin-left:10%;"><?php echo $this->feesAmount; ?></p>
              </br>



              
         <div class='row' style='background-color:white;text-align: center;'>
         <input id="formSubmit" class="save" type="submit" value="Save payment" style="width:200px; margin-top: 20px;" >
         
       </div>
    </div>
  </div>  
</form>
 </div>
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
            document.getElementById("msg").innerHTML="Payment succesfull!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
            alert.style.display = "block";
          }else if("<?php echo $_GET['alert']; ?>" =="fail"){
            document.getElementById("msg").innerHTML="Payment failed!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
            alert.style.display = "block";
          }
      </script>
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
var modal2 = document.getElementById("myModal2");
var alertmodal = document.getElementById("alertModal");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("formSubmit");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spanFees = document.getElementsByClassName("close")[1];
var alertspan = document.getElementsByClassName("close")[2];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}


btn2.onclick = function() {
  modal2.style.display = "block";

}

btn3.onclick = function() {
  modal2.style.display = "none";
  alertmodal.style.display= "block";

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

spanFees.onclick = function() {
  modal2.style.display = "none";
}

alertspan.onclick = function() {
  if(alertmodal.style.display == "block"){
    alertmodal.style.display = "none";
  } 
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  else if (event.target == modal2) {
    modal2.style.display = "none";
  }else if (event.target == alertmodal) {
    alertmodal.style.display = "none";
  }
}




</script>

  
  </body>
  </html>