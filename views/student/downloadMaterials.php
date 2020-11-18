<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="<?php echo URL; ?>public/img/logo.png"> 
<title>Download Materials</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">



<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/studentNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/studentHomeStylesheet">


</head>


<body>

<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "40%" height = "100px" style= "margin-left: 25%">
	<ul>
    <li><a href="<?php echo URL; ?>studentHome"><i class="fas fa-home"></i>Dashboard</a></li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-download"></i>Download Materials
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="<?php echo URL; ?>materials/renderDownloadMaterials">ICT</a>
          <a href="<?php echo URL; ?>materials/renderDownloadMaterials">Chemistry</a>
          <a href="<?php echo URL; ?>materials/renderDownloadMaterials">Physics</a>
          <a href="<?php echo URL; ?>materials/renderDownloadMaterials">Revision</a>
        </div>
    </li>
    <li>
        <button class="dropdown-btn"><i class="fas fa-question"></i>Quizzes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="<?php echo URL; ?>participateQuizLandingPage">ICT</a>
          <a href="<?php echo URL; ?>participateQuizLandingPage">Chemistry</a>
          <a href="<?php echo URL; ?>participateQuizLandingPage">Physics</a>
          <a href="<?php echo URL; ?>participateQuizLandingPage">Revision</a>
        </div>
    </li>
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

               echo "<h2 id='name'>".$row['fname']." </h2>";
               echo "<h4 id='name'>Student</h4><br />";
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
    <h2><i class="fas fa-download"></i>Download Materials</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

  <div class="middle" style="background-color:white;">
<script>
  function getMaterials($cl){
    $class=document.getElementById($cl).text;
    
  }
</script>
       <?php

        $files = glob("http://localhost/IMS_Vidarsha/public/uploads/*");
       
         while($row = mysqli_fetch_assoc($this->materialList)){ 
          ?>  
              <br />
             <h3><i class="fas fa-book-open"></i><?php echo $row['heading'] ?></h3>
             <p style="color: #2F4F4F;padding-left: 10px;"><?php echo $row['description'] ?></p>
             <p><i class="far fa-file-pdf"></i><a href="http://localhost/IMS_Vidarsha/public/uploads/<?php echo $row['name'] ?>" style="text-decoration: none;text-transform: uppercase;"><?php echo $row['name'] ?></a></p>
             <br /><hr />
        <?php  } ?>
  	

</div>





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