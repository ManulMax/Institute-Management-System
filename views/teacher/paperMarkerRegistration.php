<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Papermarker Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://localhost/IMS_Vidarsha/public/js/form_validation.js"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/paperMarkerRegistrationStylesheet">
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
</head>


<body>
<div class="row">
  <div class="leftNav">
  <img class="logo" src="<?php echo URL; ?>public/img/logo.png">
	<ul>
	  <li><a href="<?php echo URL; ?>teacherHome"><i class="fas fa-home"></i>Dashboard</a></li>
	  <li>
        <button class="dropdown-btn"><i class="fas fa-upload"></i>Upload Materials
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
             $classes = []; //create array
              while($class=mysqli_fetch_assoc($this->classList)) {
                  $classes[] = $class; //assign whole values to array
              }
             foreach($classes as $row){  ?>
                <a href="<?php echo URL; ?>materials/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
          <?php  } ?>

        </div>
    </li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-question"></i>Quizzes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
       
         foreach($classes as $row){  ?>
            <a href="<?php echo URL; ?>createQuiz/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
	  <li><a href="<?php echo URL; ?>Classes"><i class="fas fa-users"></i>New Class</a></li>
	  <li>
        <button class="dropdown-btn"><i class="far fa-calendar-alt"></i>Re-schedule
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
       
         foreach($classes as $row){  ?>
            <a href="<?php echo URL; ?>reschedule/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
	  <li><a href="<?php echo URL; ?>paperMarkerRegistration"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
	  <li><a href="<?php echo URL; ?>salaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
	  <li>
        <button class="dropdown-btn"><i class="fas fa-file-signature"></i>Exam Results
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <?php
       
         foreach($classes as $row){  ?>
            <a href="<?php echo URL; ?>uploadExamResults/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
	</ul>
	
  </div>
  <div class="headerClass">
	  <h2><i class="fas fa-user-edit"></i>Papermarker Registration</h2>
	  <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
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
               echo "<h4 id='name'>Teacher (Chemistry)</h4><br />";
               echo "<p id='name'>Qualifications : ".$row['qualifications']."</p><br />";

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
                <br />
              </div>
              <br />";
             
            }
          ?>

    </div>

  </div>


  
  <div class="middle" style="background-color:#F8F8FF;">




		<!-- data taken from generatedata.com -->
		<div id="tableDiv">
		<table id="data">
		<thead>
		  <tr>
		    <th>Name</th>
		    <th>NIC</th>
		    <th>DOB</th>
		    <th>Gender</th>
		    <th>Email</th>
		    <th>Address</th>
		    <th>Mobile No.</th>
		    <th>Qualifications</th>
		  </tr>
		</thead>
		<tbody>
		  <?php

		      while($row = mysqli_fetch_assoc($this->pmList)){ 
		      
		         echo "<tr><td>".$row['name']."</td>
		         <td>".$row['NIC']."</td>
		         <td>".$row['DOB']."</td>
		         <td>".$row['gender']."</td>
		         <td>".$row['email']."</td>
		         <td>".$row['address']."</td>
		         <td>".$row['tel_no']."</td>
		         <td>".$row['qualifications']."</td>
		         <td><a class='btn' id='editBtn' href='http://localhost/IMS_Vidarsha/paperMarkerRegistration/renderPmUpdate/".$row['user_id']."' style='padding: 5px 15px 5px 15px;'>Edit</a></td>
		         <td><input type='submit' value='Delete' style='padding: 5px 15px 5px 15px;background-color:#555555;text-transform: uppercase;'></td></tr>";

		      }
		  ?>
		  
		</tbody>
		</table>
		</div>




<!-- registration form -->

	<form id="regForm" action="<?php echo URL; ?>paperMarkerRegistration/create" method="post">
	  <div class="row">
		<div class="col-15">
		  <label>Full Name :</label>
		</div>
		<div class="col-75">
			<div class="popup">
				<input type="text" id="fullname" placeholder="Full name..." name="name" onfocusout="validateName()">
			  <span class="popuptext" id="name-popup"></span>
			</div>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-15">
		  <label for="subject"> NIC :</label>
		</div>
		<div class="col-25">
		  <div class="popup">
		  	<input type="text" placeholder="Identity card number..." id="NIC" name="NIC" onfocusout="validateNIC()">
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
		   <input type="date" name="DOB" id="DOB" onfocusout="validateDOB()">
		   <span class="popuptext" id="DOB-popup"></span>
		  </div>
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
		  <span class="popuptext" id="email-popup"></span>
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
		  <input type="text" placeholder="Mobile number..." id="phone" name="tel" onfocusout="validatePhoneNumber()">
		  <span class="popuptext" id="phone-popup"></span>
		</div>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-15">
		  <label for="subject">Qualifications :</label>
		</div>
		<div class="col-75">
		  <textarea rows="4" cols="90" name="qualifications"></textarea>
		</div>
	  </div>
	  
	  <div class="row" style="margin-top:30px;margin-right:10%;">
		<input id="formSubmit" type="submit" value="Save" style="padding: 12px 20px;margin-left: 45%;font-size: 17px;height: 40px;width: 100px;">
	  </div>
	  
	</form>

  </div>
 


<div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>

</div>


<script type="text/javascript">
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

