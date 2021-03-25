<html lang="en">
<head>
  <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Study Materials</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/materialsStylesheet">

<link rel="stylesheet" href="<?php echo URL; ?>public/libraries/file-upload-with-preview-master/dist/file-upload-with-preview.min.css">

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
            <a href="<?php echo URL; ?>Quiz/index/<?php echo $row['id'].'/'.$row['batch']; ?>"><?php echo $row['batch']; ?></a>
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
    <li><a href="<?php echo URL; ?>Papermarker"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
    <li><a href="<?php echo URL; ?>TeacherSalary"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
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
    <h2><i class="fas fa-upload"></i>Upload Materials</h2>
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
          <a id="deleteBtn" class="roundBtn"  style='padding: 10px 15px 10px 15px;background-color:#990000;' href="">Delete</a>
        </div>
        
       </div>
    </div>
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
  
  
  
  <div class="middle" style="background-color:#F8F8FF;width:53%;padding-left: 40px;padding-right: 40px;">

<script type="text/javascript">
  function promptFunction(materialId){
    var alert = document.getElementById("confirmModal");
    document.getElementById('deleteBtn').href="<?php echo URL; ?>materials/delete/<?php echo $this->classid.'/'.$this->batch.'/'; ?>"+materialId;
    alert.style.display = "block";
  }
</script>

      <h2 class="className"><?php echo $this->batch; ?> Class</h2>
      
        <?php

        $files = glob("http://localhost/IMS_Vidarsha/public/uploads/*");
       
         while($row = mysqli_fetch_assoc($this->materialList)){ 
          ?>  <br />
          <div class="row" style="padding-bottom: 5px;">
             <h3 style="color: #228B22;"><i class="fas fa-book-open"></i><?php echo $row['heading'] ?></h3>
             <p style="color: #2F4F4F;padding-left: 10px;"><?php echo $row['description'] ?></p>
             <p><i class="far fa-file-pdf"></i><a href="http://localhost/IMS_Vidarsha/public/uploads/<?php echo $row['name']; ?>" style="text-decoration: none;text-transform: uppercase;"><?php echo $row['name'] ?></a></p>
             <a style="float: right;color: #777" onclick="promptFunction(<?php echo $row['id']; ?>)"><i class="fas fa-trash"></i>Delete</a>
             </div><hr />
        <?php  } ?>

        <script type="text/javascript">
            var alert=document.getElementById("alertModal");
            if("<?php echo $_GET['alert2']; ?>" =="success"){    
              document.getElementById("msg").innerHTML="Material Deleted Successfully!";
              document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
              alert.style.display = "block";
            }else if("<?php echo $_GET['alert2']; ?>" =="fail"){
              document.getElementById("msg").innerHTML="Failed to Delete Study Material!";
              document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
              alert.style.display = "block";
            }
          </script>
  
  </div>
  

  
  <div class="right" style="background-color:#E7EBE0FF;width:30%;color: #228B22;padding-top: 50px;">

 <!-- ------ form ------ --> 
 <h2 class="topHeading"><i class="fas fa-upload"></i>Upload New Material</h2>
    <form id="regForm" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>materials/create/<?php echo $this->classid.'/'.$this->batch; ?>" style="padding: 20px;">
    <div class="row">
      <div class="col-25">
      <label>Heading</label>
      </div>
      <div class="col-75">
      <input type="text" name="heading">
      </div>
    </div>
    <div class="row">
    <div class="col-25">
      <label>Description</label>
      </div>
      <div class="col-75">
      <textarea placeholder="Write something.." style="height:150px" name="description"></textarea>
      </div>
    </div>
    <div class="row" style="padding-top: 50px;padding-bottom: 5px;">
      <div class="col-25">
      </div>
      <div class="col-75">   
         <label style="float: right;padding-bottom: 0px;">Maximum size = 2MB </label>
      </div>
    </div>
    <div class="row" style="padding-top: 0px;">
      <div class="col-25">
        <label>Upload File </label>
      </div>
      <div class="col-75">   
        <input type="file" id="file" class="btn" name="file" accept="*">
      </div>
    </div>


      <div class="row">
      <!--  <a id="removeLink" href="javascript:void(0)" title="Clear Image">Remove</a> -->
        <input type="submit" name="submit" value="Upload File" style="float: right;">
        <script type="text/javascript">
            var alert=document.getElementById("alertModal");
            if("<?php echo $_GET['alert1']; ?>" =="success"){    
              document.getElementById("msg").innerHTML="Material Uploaded Successfully!";
              document.getElementById('alertImg').src="<?php echo URL; ?>public/img/success_icon.png";
              alert.style.display = "block";
            }else if("<?php echo $_GET['alert1']; ?>" =="fail"){
              document.getElementById("msg").innerHTML="Failed to Upload Study Material!";
              document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
              alert.style.display = "block";
            }
          </script>
      </div>
    </form>
    
  </div>

<div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
  
</div>






</body>

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




// -------------------------------------------------------------------------

// Get the modal
var modal = document.getElementById("myModal");
var alertmodal = document.getElementById("alertModal");
var confirmmodal = document.getElementById("confirmModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var alertspan = document.getElementsByClassName("close")[2];
var confirmspan = document.getElementsByClassName("close")[1];

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

// -----------------------------file size------------------------------------
var uploadField = document.getElementById("file");

uploadField.onchange = function() {
    if(this.files[0].size > 2097152){
       var alert=document.getElementById("alertModal");
       document.getElementById("msg").innerHTML="File is too big! Maximum file size is 2MB.";
       document.getElementById('alertImg').src="<?php echo URL; ?>public/img/error_icon.png";
       alert.style.display = "block";
       this.value = "";
    };
};

</script>

</html>