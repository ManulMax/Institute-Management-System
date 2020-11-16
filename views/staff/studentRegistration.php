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
	
	<form enctype="multipart/form-data" action="<?php echo URL;?>studentRegistration/create" method="post" >
	<div class="container">
   
    <table >

			<tr>
				<td>First Name</td>
				<td><input type="text" placeholder="Enter Name" name="fname" id="fnm" required></td>
				<td>Middle Name</td>
				<td><input type="text" placeholder="Enter Name" name="mname" id="mnm" required></td>
				<td>Last Name</td>
				<td><input type="text" placeholder="Enter Name" name="lname" id="lnm" required></td>
			</tr>
			
			<tr>
				<td>NIC</td>
				<td colspan=2><input type="text" placeholder="Enter NIC" name="nic" id="nic" required></td>
				<td>DOB</td>
				<td><input type="date" placeholder="Select DOB" name="dob" id="dob" required></td>
				<td></td>
			</tr>
			
			<tr>
				<td>E-mail</td>
				<td colspan=2><input type="text" placeholder="Enter E-mail" name="email" id="e-mail" required></td>
				<td>Tel No</td>
				<td><input type="tel" placeholder="Tel " name="tel" id="tel" required></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				<td>Male <input type="radio" id="male" name="gender" value="male" rquired></td>
				<td>Female <input type="radio" id="female" name="gender" value="female" required></td>
			</tr>
				
			<tr>
				<td>Address</td>
				<td colspan=5><input type="text" placeholder="Address" name="address" id="address" required></td>
			</tr>
			
			<tr></tr>

			<tr>
				<td>Parent/Gardian Name</td>
				<td colspan=5><input type="text" placeholder="Enter Parent/Gardian Name" name="parent_name" id="parent_name" required></td>
				
			</tr>
			
			<tr>
				<td>Tel No</td>
				<td><input type="tel" placeholder="Parent/Gardian Tel " name="parent_tel" id="parent_tel" required></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr></tr>
		
			<tr>
				<td>School</td>
				<td colspan=5><input type="text" placeholder="Enter School" name="school" id="school" required></td>
				
			</tr>
			
			<tr>
				<td>Grade</td>
				<td colspan=2><select name="grade" id="filter-city" data-filter-col="2" style="min-width:60px">
			      <option value="0">Select Batch:</option>
			      <option value="1"><?php echo date("Y"); ?> A/L</option>
			      <option value="2"><?php echo date("Y")+1; ?> A/L</option>
			      <option value="3"><?php echo date("Y")+2; ?> A/L</option>
			      <option value="4">Revision</option>
      			</select></td>
				<td>Stream</td>
				<td><input type="tel" placeholder="Stream " name="stream" id="stream" required></td>
			</tr>
			
			<tr>
				<td>Subjects</td>
				<td><input type="text" placeholder="Subject 1 " name="subject1" id="subject1" required></td>
				<td><input type="text" placeholder="Subject 2 " name="subject2" id="subject2" required></td>
				<td><input type="text" placeholder="Subject 3 " name="subject3" id="subject3" required></td>
				
			</tr>

			<!--<tr>
				<td></td>
			
				<td><a href="enrollStudent"><button type="submit" class="registerbtn" name="enroll">Enroll to class</button></a></td></tr>-->
			
			<tr></tr>
			<tr>
				<td>Photo</td>
				<td colspan=5><input type="file" placeholder="Upload photo " name="img" id="photo" required></td>
			</tr>
			
			<tr>
				<td></td>
				<td colspan=6><button type="submit" class="registerbtn" name="submit">Register</button></td>
			</tr>	
			
		</table>
	</div>  
	</form>
  </div>
  
<!---------------------------------------Footer-------------------------------------->  

<div class="footer">
  <p>Footer</p>
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

