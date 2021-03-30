<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>View_Student</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://localhost/IMS_Vidarsha/public/js/form_validation.js"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigation">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/viewStudent">

<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script>




<!-- filter table -->

<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/libraries/filter-form-Controls-filtable/examples/style2.css">
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
<!---------------------------------------Navigation bar------------------------------------->
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
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-user-edit"></i>View Student</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt fa-2x"></i></a></div>
   <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

  

  <!------------------------------middle content-------------------------->
  <div class="middle" style="background-color:#F8F8FF;">
		<div class="title">
			<h3>Edit/Delete student records</h3>
		</div>
	
<div class="container" style="margin-left:10% ;margin-top: 0px;">


<div class="table-filters">
  
    <table id="allocation" style="width:50%; margin-left:5px;">
    <tr>
    <td style="text-align: right;"><label for="filter-country">NIC</label></td>
    <td><input type="text" class="input-text" id="filter-name" data-filter-col="2"></td>
 

   
</tr>
</table>
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
          if("<?php echo $_GET['alert1']; ?>" =="success"){    
            document.getElementById("msg").innerHTML="Student Details Updated Successfully!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
            alert.style.display = "block";
          }else if("<?php echo $_GET['alert1']; ?>" =="fail"){
            document.getElementById("msg").innerHTML="Failed to Update Stuedent Details!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
            alert.style.display = "block";
          }
      </script> 

    <!-- alert content -->
  <div id="confirmModal" class="alert-modal">
    <div class="alert-modal-content">
      <span class="close">&times;</span>
      <div class='row' style='background-color:white;text-align: center;'>
        <h3>Are you sure?</h3><br />
        <p>Do you really want to delete this data? This process cannot be undone.</p><br />
        <div class="col-25">
        </div>
        <div class="col-25">
          <a class="roundBtn" style='padding: 10px 15px 10px 15px;background-color:#808080;' href="">Cancel</a>
        </div>
        <div class="col-25">
          <a class="roundBtn" id="deleteBtn" style='padding: 10px 15px 10px 15px;background-color:#990000;' href="">Delete</a>
        </div>
        
       </div>
    </div>
</div>


    <script type="text/javascript">
  function promptFunction(userid){
    var alert = document.getElementById("confirmModal");
    document.getElementById('deleteBtn').href="<?php echo URL; ?>viewStudent/delete/"+userid;
    alert.style.display = "block";
  }
</script>

   
    <table id="data">
    <thead>
      <tr>
        <th>Reg_No</th>
        <th>Name</th>
        <th>Grade</th>
        <th>NIC</th>
        <th>Email</th>
        <th>Mobile No.</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 

          while($row=mysqli_fetch_assoc($this->stuList)) { ?>
          
             <tr><td><?php echo $row['reg_no']; ?></td>
              <td><?php echo $row['fname']; ?></td>
             <td><?php echo $row['grade']; ?></td>
             <td><?php echo $row['NIC']; ?></td>
             <td><?php echo $row['email']; ?></td>
             <td><?php echo $row['tel_no']; ?></td>
             <td><a class='btn' id='editBtn' href="http://localhost/IMS_Vidarsha/viewStudent/renderStuUpdate/<?php echo $row['user_id']; ?>" style="padding: 5px 15px 5px 15px;">Edit</a></td>
             <td><a class='btn' id='deleteBtn' onclick="promptFunction(<?php echo $row['user_id']; ?>)" style="padding: 5px 15px 5px 15px;background-color:#555555;text-transform: uppercase;">Delete</a></td></tr>
         <?php } ?>
      
    </tbody>
    </table>



</div>

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
          if("<?php echo $_GET['alert2']; ?>" =="success"){    
            document.getElementById("msg").innerHTML="Student Deleted Successfully!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
            alert.style.display = "block";
          }else if("<?php echo $_GET['alert2']; ?>" =="fail"){
            document.getElementById("msg").innerHTML="Failed to Delete Student Details!";
            document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
            alert.style.display = "block";
          }
      </script>

    
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

 </div>
  
  
<!----------------------Footer----------------------->
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


</body>
</html>