<!DOCTYPE html>
<html lang="en">
<head>
<title>New Class</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php echo URL; ?>public/libraries/calendar-datepickerdemo/css/mobiscroll.javascript.min.css">
<script src="<?php echo URL; ?>public/libraries/calendar-datepickerdemo/js/mobiscroll.javascript.min.js"></script>

<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/addNewClassStylesheet">
<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script>
</head>

<body>

<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="teacherHome.html"><i class="fas fa-home"></i>Dashboard</a></li>
	  <li><a href="materials.php"><i class="fas fa-upload"></i>Upload Materials</a></li>
	  <li><a href="createQuiz.html"><i class="fas fa-question"></i>Quizzes</a></li>
	  <li><a href="addNewClass.html"><i class="fas fa-users"></i>New Class</a></li>
	  <li><a href="reschedule.html"><i class="far fa-calendar-alt"></i>Re-schedule</a></li>
	  <li><a href="paperMarkerRegistration.html"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
	  <li><a href="salaryDetails.html"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
	</ul>
	<div class="chip"><img src="<?php echo URL; ?>public/icons/Logout.png" alt="Person" width="96" height="96">Log out</div>
	<div class="chip" style: "float:left;"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Profile</div>
  </div>
  <div class="header">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-users"></i>New Class</h2>
	  <div class="chip"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Teacher Name</div>
  </div>
  
  
  <div class="middle" style="background-color:white;">

<form action="" method="post" style="padding-left: 10%;padding-right: 10%;padding-top: 5%;">
  <div class="row">
    <div class="col-20">
      <label for="subject">Subject :</label>
    </div>
    <div class="col-75">
      <div class="custom-select" style="width:400px;">
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
      <div class="custom-select" style="width:200px;">
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
      <div class="custom-select" style="width:200px;">

      <select name="day" class="day" id = "selecter">
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="4">Thursday</option>
      <option value="5">Friday</option>
      <option value="6">Saturday</option>
      <option value="7">Sunday</option>
      </select>    

	   </div>
    </div>
	<div class="col-20">
    </div>
	<div class="col-20">
      <label for="subject">Hall :</label>
    </div>
    <div class="col-20">
      <div class="custom-select" style="width:200px;">

		  <select name="hall" class="hall" onchange="<?php echo URL; ?>addNewClass/viewCurrentSchedules/".$_POST['hall']."/".$_POST['day']>

        <?php
            $num=1;
            while($row = mysqli_fetch_assoc($this->hallList)){	
			         echo "<option value = '".$num."'". ">" .$row['name']. "</option>";
               $num++;
            }
        ?>
		  </select>
	  </div>
    </div>
  </div>
  <br />


  <label style="color: grey;font-weight:bold;margin-top:30px;">Current Hall Allocations :</label>
  <table id="allocations">
  <tr>
    <th>Duration</th>
    <th>Teacher</th>
    <th>Subject</th>
    <th>Batch</th>
  </tr>

  <?php while($schedule = mysqli_fetch_assoc($this->hallList)){ ?>
  <tr>
    <td><?php echo $schedule['start_time']." - ".$schedule['start_time']; ?></td>
    <td><?php echo $schedule['fname']." ".$schedule['mname']." ".$schedule['lname']; ?></td>
    <td><?php echo $schedule['name']; ?></td>
    <td><?php echo $schedule['batch']; ?></td>
  </tr>
  <?php }?>
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
  <button type="button" onclick = "gfg_Run()">  
        Click here 
    </button>
    <p id = "GFG_DOWN" style = 
        "font-size: 23px; font-weight: bold; color: green; "> 
    </p>
    
</form>

</div>
  
 <div class="right" style="background-color:#2F4F4F;">
	  
	<div height="40%">
		<div mbsc-page class="demo-datepicker">
		  <div style="height:100%">
			  <div class="mbsc-grid">
				<div class="mbsc-row">

					<div mbsc-form>
						<div class="mbsc-form-grid">
							<div id="demo-calendar-date-picker"></div>
						</div>
					</div>

				</div>
			</div>
		  </div>
		</div>
	</div>
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
<script> 
        var el_down = document.getElementById("GFG_DOWN");  
          
        function gfg_Run() { 
            document.getElementById("GFG_DOWN").innerHTML =  
                 $("#selecter").val();
        }          
   



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






    mobiscroll.settings = {
        lang: 'en',                       // Specify language like: lang: 'pl' or omit setting to use default
        theme: 'ios',                     // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light'             // More info about themeVariant: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-themeVariant
    };
    
    var now = new Date();
    
    mobiscroll.calendar('#demo-calendar-date-picker', {
        display: 'inline',                // Specify display mode like: display: 'bottom' or omit setting to use default
        onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/4-10-7/javascript/calendar#event-onInit
            inst.setVal(now, true);
        }
    });
    
    mobiscroll.calendar('#demo-calendar-header', {
        display: 'bubble',                // Specify display mode like: display: 'bottom' or omit setting to use default
        headerText: '{value}',            // More info about headerText: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-headerText
        onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/4-10-7/javascript/calendar#event-onInit
            inst.setVal(now, true);
        }
    });
    
    mobiscroll.calendar('#demo-calendar-non-form', {
        display: 'bubble',                // Specify display mode like: display: 'bottom' or omit setting to use default
        onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/4-10-7/javascript/calendar#event-onInit
            inst.setVal(now, true);
        }
    });
    
    var instance = mobiscroll.calendar('#demo-calendar-date-external', {
        display: 'bubble',                // Specify display mode like: display: 'bottom' or omit setting to use default
        showOnTap: false,                 // More info about showOnTap: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-showOnTap
        showOnFocus: false,               // More info about showOnFocus: https://docs.mobiscroll.com/4-10-7/javascript/calendar#opt-showOnFocus
        onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/4-10-7/javascript/calendar#event-onInit
            inst.setVal(new Date(), true);
        }
    });
    

</script>

</html>