<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Student Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigation">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/stuRegistration">
</head>


<body>
<!-------------------------Navigation Bar------------------->
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
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-user-o"></i>Student Registration</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt fa-2x"></i></a></div>
   <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

 

  
  <!----------------------------------Middle contet------------------------------------>
  <div class="middle" style="background-color:#F8F8FF;">
	
	<form id="regForm" enctype="multipart/form-data" action="<?php echo URL;?>studentRegistration/create" method="post" >
	  <div class="row">
		<div class="col-15">
		  <label>Full Name :</label>
		</div>
		<div class="col-75">
			<div class="popup">
				<input type="text" placeholder="Enter full name..." name="fname" id="fnm" required>
			  
			</div>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-15">
		  <label for="subject"> NIC :</label>
		</div>
		<div class="col-25">
		  <div class="popup">
		  	<input type="text" placeholder="Enter NIC" name="nic" id="nic" required>
		  	
		  </div>
		</div>
		<div class="col-10">
		</div>
		<div class="col-15">
		  <label for="subject">DOB :</label>
		</div>
		<div class="col-25">
		  <input type="date" name="dob" id="dob" required>
		</div>
	  </div>

	  <div class="row">
		<div class="col-15">
		  <label for="subject">Gender :</label>
		</div>
		<div class="col-15" class="genderLabel">
		  <input type="radio" value="male" name="gender">
		  <label for="male">Male</label>
		</div>
		<div class="col-15" class="genderLabel">
		  <input type="radio" value="female" name="gender">
		  <label for="female">Female</label>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-15">
		  <label for="subject">Email :</label>
		</div>
		<div class="col-75" style="width: 60%">
		<div class="popup">
		  <input type="email" placeholder="Email address..." id="email" name="email" onfocusout="validateEmail()">
		  
		  </div>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-15">
		  <label for="subject">Address :</label>
		</div>
		<div class="col-75">
		  <textarea rows="4" cols="90" placeholder="Address..." name="address"></textarea>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-15">
		  <label for="subject">Mobile No. :</label>
		</div>
		<div class="col-25">
		<div class="popup">
		  <input type="text" placeholder="Mobile number..." id="phone" name="tel">
		  
		</div>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-15">
		  <label for="subject">Parent name :</label>
		</div>
		<div class="col-75">
		  <input type="text" placeholder="Enter Parent/Gardian Name" name="parent_name" id="parent_name" required>
		</div>
	  </div>

	  <div class="row">
		<div class="col-15">
		  <label for="subject">Parent tel :</label>
		</div>
		<div class="col-75">
		  <input type="tel" placeholder="Parent/Gardian Tel " name="parent_tel" id="parent_tel" required>
		</div>
	  </div>

	   <div class="row">
		<div class="col-15">
		  <label for="subject">School :</label>
		</div>
		<div class="col-75">
		  <input type="text" placeholder="Enter School" name="school" id="school" required>
		</div>
	  </div>

	   <div class="row">
		<div class="col-15">
		  <label for="subject">Class :</label>
		</div>
		<div class="col-75">
		  <select name="grade" style="background:#F8F8FF;">
			      <option value="0">Select Batch:</option>
			      <option value="2020 A/L"><?php echo date("Y"); ?> A/L</option>
			      <option value="2021 A/L"><?php echo date("Y")+1; ?> A/L</option>
			      <option value="2022 A/L"><?php echo date("Y")+2; ?> A/L</option>
			      <option value="4">Revision</option>
      			</select>
      		</div>
		</div>


		<div class="row">
		<div class="col-15">
		  <label for="subject">Stream :</label>
		</div>
		<div class="col-75">
		  <input type="tel" placeholder="Stream " name="stream" id="stream" required>
		</div>
	  </div>


	  <div class="row">
		<div class="col-15">
		  <label for="subject">Subjects :</label>
		</div>
		<div class="col-75">
		  <input type="text" placeholder="Subject 1 " name="subject1" id="subject1" required>
		  <input type="text" placeholder="Subject 2 " name="subject2" id="subject2" required>
		  <input type="text" placeholder="Subject 3 " name="subject3" id="subject3" required>
		</div>
	  </div>





	   <div class="row">
		<div class="col-15">
		  <label for="subject">Photo :</label>
		</div>
		<div class="col-75">
		 <input type="file" placeholder="Upload photo " name="img" id="photo" required>
		</div>
	  </div>


	 
	  

	  <div class="row" style="margin-top:30px;margin-right:10%;">
		<input id="formSubmit" type="submit" value="Save" style="padding-right: 30px;padding-left: 30px;">
	  </div>
	  
	</form>


  </div>

  
<!---------------------------------------Footer-------------------------------------->  

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

