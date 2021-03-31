<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminNav.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminUpdate.css">
  <title>Subject</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
    <div class="leftNav">
        <img class="logo" src="<?php echo URL; ?>public/img/logo.png">
        <ul>
            <li><a href="<?php echo URL; ?>adminDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="<?php echo URL; ?>teacherRegistration"><i class="fa fa-graduation-cap"></i>Register Teacher</a></li>
            <li><a href="<?php echo URL; ?>staffRegistration"><i class="fa fa-user-circle-o"></i>Register Staff</a></li>
            <li><a href="<?php echo URL; ?>updateTeacher"><i class="fa fa-user-o"></i>Update Teacher</a></li>
            <li><a href="<?php echo URL; ?>updateStaff"><i class="fa fa-user-o"></i>Update Staff</a></li>
            <li><a href="<?php echo URL; ?>updateStudent"><i class="fa fa-user-o"></i>Update Student</a></li>
            <li><a href="<?php echo URL; ?>addSubject"><i class="fa fa-book"></i>Add Subject</a></li>
            <li><a href="<?php echo URL; ?>salaryPay"><i class="fas fa-money-bill-wave"></i>Salary Payment</a></li>
            <li><a href="<?php echo URL; ?>adminIncome"><i class="fas fa-money-bill-wave"></i>Income</a></li>
        </ul>        
    </div>

    
    
  <div class="headerClass">
    <h2><i class="fa fa-book"></i>Add Subject</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>
  <div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>
    <!-------------------Middle contet---------------------------------->
  
  
  <div class="middle" style="background-color:#F8F8FF;padding-top: 5%;">
  
  <div class="row" style="margin-left: 30%;">
    <div class="col-25">
      <label for="filter-reg">New Subject :</label>
    </div>
    <!-- onsubmit="return confirm('Do you really want to add this subject?');" -->
    <form  id="addSub" action="<?php echo URL; ?>addSubject/create" method="post">
    <div class="col-25">
      <input type="text" placeholder="subject name..." name="subject" required>
    </div>
    <div class="col-25">
    <input type='submit' value='ADD'>

    </div>
    </from>
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
	          document.getElementById("msg").innerHTML="Subject Details Updated Successfully!";
	          document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
	          alert.style.display = "block";
	        }else if("<?php echo $_GET['alert1']; ?>" =="fail"){
	          document.getElementById("msg").innerHTML="Failed to Update Subject Details!";
	          document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
	          alert.style.display = "block";
	        }
	  </script> 

    <script type="text/javascript">
	        var alert=document.getElementById("alertModal");
	        if("<?php echo $_GET['alert2']; ?>" =="success"){    
	          document.getElementById("msg").innerHTML="Subject Deleted Successfully!";
	          document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
	          alert.style.display = "block";
	        }else if("<?php echo $_GET['alert2']; ?>" =="fail"){
	          document.getElementById("msg").innerHTML="Failed to Delete Subject Details!";
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
      		<a class="roundBtn" id="cancelBtn" style='padding: 10px 15px 10px 15px;background-color:#808080;' href="">Cancel</a>
      	</div>
      	<div class="col-25">
      		<a class="roundBtn" id="deleteBtn" style='padding: 10px 15px 10px 15px;background-color:#990000;' href="">Delete</a>
      	</div>
      	
       </div>
    </div>
</div>
  <script type="text/javascript">
  function promptFunction(subjectID){
    var alert = document.getElementById("confirmModal");
    document.getElementById('deleteBtn').href="<?php echo URL; ?>addSubject/delete/"+subjectID;
    alert.style.display = "block";
  }
  </script>  

  <div id="tableDiv" style="width: 80%;">
    <table id="data">
    <thead>
      <tr>
        <th>Subject ID</th>
        <th>Subject</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php

while($row = mysqli_fetch_assoc($this->subList)){  ?>
<tr>
  <td><?php echo $row['id']?></td>
  <td><?php echo $row['name']?></td>
  <td><a class='btn' id='editBtn' href="http://localhost/IMS_Vidarsha/addSubject/renderSubUpdate/<?php echo $row['user_id']; ?>" style="padding: 5px 15px 5px 15px;">Edit</a></td>
	<td><a class='btn' id='deleteBtn' onclick="promptFunction(<?php echo $row['id']; ?>)" style="padding: 5px 15px 5px 15px;background-color:#555555;text-transform: uppercase;">Delete</a></td></tr> 
  </tr>

<?php } ?>
    </tbody>
    </table>
    </div>

  </div>


</div>

</body>
<script>
  // Get the modal
var alertmodal = document.getElementById("alertModal");
var confirmmodal = document.getElementById("confirmModal");

// Get the button that opens the modal
var btn = document.getElementById("deleteBtn");

// Get the <span> element that closes the modal
var alertspan = document.getElementsByClassName("close")[0];
var confirmspan = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  confirmmodal.style.display = "block";
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
  if (event.target == alertmodal) {
    alertmodal.style.display = "none";
  }else if (event.target == confirmmodal) {
    confirmmodal.style.display = "none";
  }
}

</script>
</html>