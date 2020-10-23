
<!DOCTYPE html>
<html lang="en">
<head>
<title>New Class</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">


<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/addNewClassStylesheet">
<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script>



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
<style>
  body {margin: 0; background-color: #fafafa; font-family: 'Open Sans';}
  .container { margin: 150px auto; max-width: 960px; }
  </style>
</head>



<body>

<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
  <ul>
    <li><a href="<?php echo URL; ?>teacherHome"><i class="fas fa-home"></i>Dashboard</a></li>
    <li><a href="<?php echo URL; ?>materials"><i class="fas fa-upload"></i>Upload Materials</a></li>
    <li><a href="<?php echo URL; ?>createQuiz"><i class="fas fa-question"></i>Quizzes</a></li>
    <li><a href="<?php echo URL; ?>addNewClass"><i class="fas fa-users"></i>New Class</a></li>
    <li><a href="<?php echo URL; ?>reschedule"><i class="far fa-calendar-alt"></i>Re-schedule</a></li>
    <li><a href="<?php echo URL; ?>paperMarkerRegistration"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
    <li><a href="<?php echo URL; ?>salaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
  </ul>
  
  
  </div>
  <div class="headerClass">
    <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-users"></i>New Class</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
    <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Teacher ;-)</div>
  </div>
  
  
  <div class="middle" style="background-color:white;">

<form action="" method="post" style="padding-left: 10%;padding-right: 10%;padding-top: 5%;">
  <div class="row">
    <div class="col-20">
      <label for="subject">Subject :</label>
    </div>
    <div class="col-75">
      <div style="width:400px;">
		  <select>
			<option value="0">Select Subject:</option>
      <?php
          $num=1;
          while($row = mysqli_fetch_assoc($this->subjectList)){  
             echo "<option value = '".$num."'". ">" .$row['name']. "</option>";
             $num++;
          }
      ?>
		  </select>
	  </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-20">
      <label for="subject">Batch :</label>
    </div>
    <div class="col-75">
      <div style="width:200px;">
		  <select>
			<option value="0">Select Batch:</option>
			<option value="1"><?php echo date("Y"); ?> A/L</option>
			<option value="2"><?php echo date("Y")+1; ?> A/L</option>
      <option value="3"><?php echo date("Y")+2; ?> A/L</option>
      <option value="4">Revision</option>
		  </select>
	  </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-20">
      <label for="subject">No. of Students :</label>
    </div>
    <div class="col-20">
      <input type="text" class="stu">
    </div>
  </div>

  <div class="row">
    <div class="col-20">
      <label for="subject"> Day :</label>
    </div>
    <div class="col-20">
      <div style="width:200px;">

      <select id = "daySelector">
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="Thursday">Thursday</option>
      <option value="Friday">Friday</option>
      <option value="Saturday">Saturday</option>
      <option value="Sunday">Sunday</option>
      </select>    

	   </div>
    </div>
	<div class="col-20">
    </div>
	<div class="col-20">
      <label for="subject">Hall :</label>
    </div>
    <div class="col-20">
      <div style="width:200px;">

		  <select id="hallSelector">

        <?php
            $num=1;
            while($row = mysqli_fetch_assoc($this->hallList)){	
			         echo "<option value = '".$row['name']."'". ">" .$row['name']. "</option>";
               $num++;
            }
        ?>
		  </select>
	  </div>
    </div>
  </div>
  <br />


  <label style="color: grey;font-weight:bold;margin-top:30px;">Current Hall Allocations :</label>

  <div class="container" style="margin: 30px;margin-top: 0px;">

<div class="row">
<div class="table-filters">
  <div class="col-20">
    <label for="filter-country">Name:</label>
    <input type="text" class="input-text" id="filter-name" data-filter-col="0,1">
  </div>
<div class="col-20"></div>
  <div class="col-20">
    <label for="filter-city">City:</label>
    <select id="filter-city" data-filter-col="2" style="min-width:60px">
      <option value="">- All -</option>
      <option value="j">J</option>
      <option value="k">K</option>
      <option value="ll">LL</option>
    </select>
  </div>
<div class="col-20"></div>
<div class="col-20">
  <label for="filter-country">Country:</label>
  <input type="text" class="input-text" id="filter-country" data-filter-col="3">

  <label for="filter-tick">
    <input type="checkbox" id="filter-tick" data-filter-col="0,1,2,3" data-filter-val="B"> B</label>
</div>

</div>
</div>

<!-- data taken from generatedata.com -->
<table id="data">
<thead>
  <tr>
    <th>Class</th>
    <th>Day</th>
    <th>Time</th>
    <th>Hall</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Shoshana</td>
    <td>Wooten</td>
    <td>Valdosta</td>
    <td>United Kingdom</td>
  </tr>
  <tr>
    <td>Stewart</td>
    <td>Dillard</td>
    <td>South Portland</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>Tana</td>
    <td>Villarreal</td>
    <td>Waltham</td>
    <td>Solomon Islands</td>
  </tr>
  <tr>
    <td>Wendy</td>
    <td>Greer</td>
    <td>Bellflower</td>
    <td>Mauritania</td>
  </tr>
  <tr>
    <td>Kenneth</td>
    <td>Livingston</td>
    <td>Anaheim</td>
    <td>Honduras</td>
  </tr>
</tbody>
</table>
</div>
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









  <?php 

  if(isset($this->scheduleList)){
    while($row = mysqli_fetch_assoc($this->scheduleList)){ ?>
      <tr>
        <td><?php echo $row['start_time']." - ".$row['start_time']; ?></td>
        <td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['batch']; ?></td>
      </tr>
      <?php }
  }
  ?>
</table>



<label style="color: grey;font-weight:bold;margin-top:30px;">New Class Duration:</label>

  <div class="row">
    <div class="col-20">
      <label for="subject"> Start Time :</label>
    </div>
    <div class="col-20">
      <input type="text">
    </div>
	<div class="col-20">
    </div>
	<div class="col-20">
      <label for="subject">End Time :</label>
    </div>
    <div class="col-20">
      <input type="text">
    </div>
  </div>
  <div class="row" style="margin-top:30px;">
    <input type="submit" value="Send Details">
  </div>

    
</form>

</div>
  

<div class="footer">
  <p>Footer</p>
</div>

</body>
<script> 




var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);


</script>

</html>