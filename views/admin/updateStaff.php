<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminNav.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminUpdate.css">
  <title>Update_Staff</title>
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
    <h2><i class="fas fa-upload"></i>Update Staff</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>
  
  
  <div class="middle" style="background-color:#F8F8FF;padding-top: 5%;">
  
    
    <div class="table-filters">
  <div class="row" style="margin-left: 15%;">
    <div class="col-10" style="width: 7%;">
      <label for="filter-reg">Reg No :</label>
    </div>
    <div class="col-10">
      <input type="text" class="input-text" id="filter-reg" data-filter-col="0">
    </div>
    <div class="col-5">
    </div>

    <div class="col-10" style="width: 7%;">
      <label for="filter-name">Name :</label>
    </div>
    <div class="col-20">
      <input type="text" class="input-text" id="filter-name" data-filter-col="1">
    </div>
    <div class="col-5">
    </div>

    <div class="col-10" style="width: 7%;">
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
        <th>Reg. No</th>
        <th>Name</th>
        <th>Tep No</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row = mysqli_fetch_assoc($this->staffList)){  
      echo "<tr><td>".$row['reg_no']."</td>
      <td>" .$row['fname']."</td>
      <td>".$row['tel_no']."</td>
      <td><input type='submit' value='Edit' class='open-button' onclick='openForm()' style='padding: 5px 15px 5px 15px;'></td>
      <td><input type='submit' value='Delete' onclick='alertFunc()' style='padding: 5px;background-color:#555555;'></td></tr>";
                        
    }
    ?>      
    </tbody>
    </table>
    </div>

    <div class="form-popup" id="myForm">
               <form action="/action_page.php" class="form-container">
                  <div class="row">
                     <div class="col-75">
                        <h3 style="margin-right: 20%;float: right;">Edit Paper Marker Details</h3>
                     </div>
                     <div class="col-25">
                        <button type="button" class="btn cancel" onclick="closeForm()"><i class="fas fa-times fa-lg"></i></button>
                     </div>
                  </div>
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
                        <input type="date" name="DOB">
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
                           <input type="text" placeholder="Mobile number..." id="phone" name="tel">
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
                     <div class="row">
                     </div>
                  </div>
                  <button type="submit" class="btn" >Update</button>
                  <br />
               </form>
            </div>

  </div>
  
</div>

<div class="footer">
  <p>Footer</p>
</div>
<script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
         
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
         
        function alertFunc() {
          alert("Are You Sure Want to Proceed ?");
        }
</script>
</body>
</html>