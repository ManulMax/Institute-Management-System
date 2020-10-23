<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
<title>Staff Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>

<style>
* {
  box-sizing: border-box;
}

body {
	margin: 0px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #07A3B2;
  padding:1px;
  margin:0;
  font-size: 16px;
  height: 50px;
  color: white;
}

.chip {
  float:right;
  display: inline-block;
  padding: 0 25px;
  height: 40px;
  font-size: 16px;
  line-height: 40px;
  border-radius: 25px;
  background-color: #f1f1f1;
  color: black;
  margin-top: 3px;
  margin-right: 10px;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 40px;
  width: 40px;
  border-radius: 50%;
}


.leftNav {
  background-color: #000000;
  float: left;
  padding: 10px;
  height: 1000px;
  width: 17%;
  
}

.leftNav ul {
  list-style-type: none;
  margin: 0;
  padding: 20px;
  width: 100%;
  background-color: #000000;
  margin-bottom:250px;
}

.leftNav ul li a {
  display: block;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
.leftNav ul li a:hover {
  background-color: #306B76;
  color: white;
}

i{
	padding:10px;
}


.middle {
	float: left;
  padding: 10px;
  height: 950px;
  width: 63%;
  overflow: scroll;
}

.right {
	float: left;
  padding: 10px;
  height: 950px;
  width: 20%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* ------------------ calendar ------------------------------ */
.month ul {list-style-type: none;}


.month {
  padding: 70px 25px;
  width: 100%;
  background: #1abc9c;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 12%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 12%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

/* ----------------------------- middle content ----------------------------- */

* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
  
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=radio]{
	
}

input[type=text]:focus, input[type=password]:focus, input[type=date], textarea, input[type=radio]{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

</style>



</head>
<body>
<!-------------------------Navigation Bar------------------->
<div class="row">
  <div class="leftNav">
  <img src="../../img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="<?php echo URL; ?>adminDashBoard"><i class="fas fa-home"></i>Dashboard</a></li>
	  <li><a href="Teacher registration.html"><i class="fa fa-graduation-cap"></i>Register Teacher</a></li>
	  <li><a href="Staff registration.html"><i class="fa fa-user-circle-o"></i>Register Staff</a></li>
	  <li><a href="update teacher.html"><i class="fa fa-user-o"></i>Update Teacher</a></li>
	  <li><a href="update staff.html"><i class="fa fa-user-o"></i>Update Staff</a></li>
	  <li><a href="subject.html"><i class="fa fa-book"></i>Edit Subject</a></li>
	  <li><a href="#"><i class="fas fa-money-bill-wave"></i>Salary Payment</a></li>
	  <li><a href="#"><i class="fas fa-money-bill-wave"></i>Income</a></li>
	</ul>
	<div class="chip"><img src="../../icons/Logout.png" alt="Person" width="96" height="96">Log out</div>
	<div class="chip" style: "float:left;"><img src="../../icons/School Director_30px.png" alt="Person" width="96" height="96">Profile</div>
  </div>
  <div class="header">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fa fa-user-circle-o"></i>Staff Registration</h2>
	  <div class="chip"><img src="../../icons/School Director_30px.png" alt="Person" width="96" height="96">Admin Name</div>
  </div>
  
  <!-------------------Middle contet---------------------------------->
  <div class="middle" style="background-color:white;">
	
	<form name="myForm" action="/action_page.php" method="post">
	<div class="container">
   
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>
	
	<label for="psw"><b>Gender</b></label><br>
    <input type="radio" id="male" name="gender" value="male" rquired>
	<label for="male">Male</label><br>
	<input type="radio" id="female" name="gender" value="female" required>
	<label for="female">Female</label><br><br>
	

    <label for="psw"><b>NIC</b></label>
    <input type="text" placeholder="Enter NIC" name="nic" id="nic" required>

    <label for="e-mail"><b>E-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="e-mail" id="e-mail" required>
	
	<label for="dob"><b>DOB</b></label>
    <input type="date" placeholder="Select DOB" name="dob" id="dob" required>
	
	<label for="tel"><b>Tel No</b></label>
    <input type="text" placeholder="Tel " name="tel" id="tel" required>
	
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Address" name="address" id="address" required>
    <hr>
	
	<label for="account"><b>Account No</b></label>
    <input type="text" placeholder="Account No" name="account" id="account" required>
	
	<label for="salary"><b>Salary amount</b></label>
    <input type="text" placeholder="Salary amount" name="salary" id="salary" required>	
    
	
	

	
	

    <button type="submit" class="registerbtn">Register</button>
	</div>  
	</form>
  </div>
  
  <!----------------------------Calender------------------------->
  <div class="right" style="background-color:#2F4F4F;">
	  <div class="month">      
		  <ul>
			<li class="prev">&#10094;</li>
			<li class="next">&#10095;</li>
			<li>
			  August<br>
			  <span style="font-size:18px">2020</span>
			</li>
		  </ul>
		</div>

		<ul class="weekdays">
		  <li>Mo</li>
		  <li>Tu</li>
		  <li>We</li>
		  <li>Th</li>
		  <li>Fr</li>
		  <li>Sa</li>
		  <li>Su</li>
		</ul>

		<ul class="days">  
		  <li>1</li>
		  <li>2</li>
		  <li>3</li>
		  <li>4</li>
		  <li>5</li>
		  <li>6</li>
		  <li>7</li>
		  <li>8</li>
		  <li>9</li>
		  <li><span class="active">10</span></li>
		  <li>11</li>
		  <li>12</li>
		  <li>13</li>
		  <li>14</li>
		  <li>15</li>
		  <li>16</li>
		  <li>17</li>
		  <li>18</li>
		  <li>19</li>
		  <li>20</li>
		  <li>21</li>
		  <li>22</li>
		  <li>23</li>
		  <li>24</li>
		  <li>25</li>
		  <li>26</li>
		  <li>27</li>
		  <li>28</li>
		  <li>29</li>
		  <li>30</li>
		  <li>31</li>
		</ul>
	</div>
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>

<!--.wrapper{
  position: relative;
  top: 48%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  max-width: 800px;
  max-height:5000px;
  background: rgba(0,0,0,0.8);
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}