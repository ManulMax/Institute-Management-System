<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update_Teacher</title>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminNav.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminUpdate.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>


  <!-- filter table -->

  <link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/libraries/filter-form-Controls-filtable/examples/styles.css">
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="<?php echo URL; ?>public/libraries/filter-form-Controls-filtable/filtable.js"></script>
  <script>
  $(function(){
    // Basic Filtable usage - pass in a div with the filters and the plugin will handle it
    $('#data').filtable({ controlPanel: $('.table-filters')});
  });
  </script>
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
    <h2><i class="fa fa-user-o"></i>Update Teacher</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>
  <div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>
  
  <div class="middle" style="background-color:#F8F8FF;padding-top: 5%;">
	
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
	          document.getElementById("msg").innerHTML="Teacher Details Updated Successfully!";
	          document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
	          alert.style.display = "block";
	        }else if("<?php echo $_GET['alert1']; ?>" =="fail"){
	          document.getElementById("msg").innerHTML="Failed to Update Teacher Details!";
	          document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
	          alert.style.display = "block";
	        }
	  </script> 

    <script type="text/javascript">
	        var alert=document.getElementById("alertModal");
	        if("<?php echo $_GET['alert2']; ?>" =="success"){    
	          document.getElementById("msg").innerHTML="Teacher Deleted Successfully!";
	          document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
	          alert.style.display = "block";
	        }else if("<?php echo $_GET['alert2']; ?>" =="fail"){
	          document.getElementById("msg").innerHTML="Failed to Delete Teacher Details!";
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
  function promptFunction(tecID){
    var alert = document.getElementById("confirmModal");
    document.getElementById('deleteBtn').href="<?php echo URL; ?>updateTeacher/delete/"+tecID;
    alert.style.display = "block";
  }
</script>

    <div class="table-filters">
	  <div class="row" style="margin-left: 9%;">
    <div class="col-5">
    </div>
    <div class="col-5">
    </div>
    <div class="col-10">
      <label for="filter-name">Name :</label>
    </div>
    <div class="col-20">
      <input type="text" class="input-text" id="filter-name" data-filter-col="1">
    </div>
    <div class="col-5">
    </div>

    <div class="col-10">
      <label for="filter-nic">NIC :</label>
    </div>
    <div class="col-10">
      <input type="text" class="input-text" id="filter-nic" data-filter-col="2">
    </div>
    </div>
  </div>

	<div id="tableDiv">
    <table id="data">
    <thead>
      <tr>
        <th>Name</th>
        <th>NIC</th>
        <th>email</th>
        <th>Tel No</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>

    <?php
    while($row = mysqli_fetch_assoc($this->tecList)){  ?>
    <tr><td><?php echo $row['fname']?></td>
    <td><?php echo $row['NIC'] ?> </td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['tel_no'] ?></td>
    <td><a class='btn' id='editBtn' href="http://localhost/IMS_Vidarsha/updateTeacher/renderTeacherUpdate/<?php echo $row['user_id']; ?>" style="padding: 5px 15px 5px 15px;">Edit</a></td>
		<td><a class='btn' id='deleteBtn' onclick="promptFunction(<?php echo $row['user_id']; ?>)" style="padding: 5px 15px 5px 15px;background-color:#555555;text-transform: uppercase;">Delete</a></td></tr>
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