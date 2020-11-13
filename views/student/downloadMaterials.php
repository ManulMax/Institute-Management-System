<!DOCTYPE html>
<html lang="en">
<head>
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
          <?php
             $classes = []; //create array
              while($class=mysqli_fetch_assoc($this->classList)) {
                  $classes[] = $class; //assign whole values to array
              }
             foreach($classes as $row){  ?>
                <a href="<?php echo URL; ?>materials/renderDownloadMaterials/<?php echo $row['id']; ?>"><?php echo $row['batch']; ?></a>
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
            <a href="<?php echo URL; ?>createQuiz"><?php echo $row['batch']; ?></a>
          <?php  } ?>
        </div>
    </li>
  </ul> 	
	
  </div>


  <div class="headerClass">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-home"></i>Download Materials</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
	 <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Student ;-)</div>
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
</script>

</body>


</html>