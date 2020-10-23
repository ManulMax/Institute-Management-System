<!DOCTYPE html>
<html lang="en">
<head>
<title>Re-schedule</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">



<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/rescheduleStylesheet">

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
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="far fa-calendar-alt"></i>Re-schedule</h2>
	  <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
	 <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Teacher ;-)</div>
  </div>
  
  
  
  
  <div class="middle" style="background-color:white;">
	<form action="" style="padding-left: 10%;padding-right: 10%;padding-top: 5%;">
	  <div class="row">
		<div class="col-40">
		  <label class="container">Temporary Re-schedule
			  <input type="radio" checked="checked" name="radio">
			  <span class="checkmark"></span>
			</label>
		</div>
		<div class="col-40">
		  <label class="container">Permanant Re-schedule
			  <input type="radio" name="radio">
			  <span class="checkmark"></span>
			</label>
		</div>		
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">Class :</label>
		</div>
		<div class="col-75">
		  <div class="custom-select" style="width:400px;">
			  <select>
				<option value="0">Select Class:</option>
				<option value="1">Class 1</option>
				<option value="2">Class 2</option>
			  </select>
		  </div>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-20">
		  <label for="subject">No. of Students :</label>
		</div>
		<div class="col-20">
		  <input type="text">
		</div>
	  </div>

	  <div class="row">
		<div class="col-20">
		  <label for="subject"> Day :</label>
		</div>
		<div class="col-20">
		  <div class="custom-select" style="width:200px;">
			  <select>
				<option value="0">Select Day:</option>
				<option value="1">Monday</option>
				<option value="2">Tuesday</option>
				<option value="3">Wednesday</option>
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
			  <select>
				<option value="0">Select Hall:</option>
				<option value="1">Hall 1</option>
				<option value="2">Hall 2</option>
				<option value="3">Hall 3</option>
				<option value="4">Hall 4</option>
				<option value="5">Hall 5</option>
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
	  </tr>
	  <tr>
		<td>8:00 a.m. - 11:00 a.m.</td>
		<td>Mr.Kamal Perera</td>
		<td>Biology</td>
	  </tr>
	  <tr>
		<td>11:00 a.m. - 3:00 p.m.</td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td>3:00 p.m. - 6:00 p.m.</td>
		<td>Miss.Amasha Gamage</td>
		<td>Information Technology</td>
	  </tr>
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