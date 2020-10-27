<!DOCTYPE html>
<html lang="en">
<head>
<title>Staff Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffNavigationBar">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/staffDashboard">
</head>


<body>
  <!---------------------------Navigation bar--------------------------------->
<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="staffDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
      <li><a href="studentRegistration"><i class="fa fa-user-o"></i>Register Student</a></li>
      <li><a href="updateStudent"><i class="fas fa-user-edit"></i>View Student</a></li>
      <li><a href="enrollStudent"><i class="fa fa-user-o"></i>Enroll Student</a></li>
      <li><a href="markAttendance"><i class="fas fa-users"></i>Mark Attendance</a></li>
      <li><a href="collectClassFees"><i class="fa fa-money"></i>Collect fees</a></li>
      <li><a href="staffSalaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
	</ul>
	<div class="chip"><img src="<?php echo URL; ?>public/icons/Logout.png" alt="Person" width="96" height="96">Log out</div>
	<div class="chip" ><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Profile</div>
  </div>
  <div class="header">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-home"></i>Staff Dashboard</h2>
	  <div class="chip"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Staff Name</div>
  </div>
  
  <!----------------------Middle content----------------------------->
  <div class="middle" style="background-color:white;">
	<div class="card">
	  <div class="container">
		<h4><b>Register student</b></h4>  
	  </div>
	</div>
	<div class="card">
	  <div class="container">
		<h4><b>Update student</b></h4>  
	  </div>
	</div>
	<div class="card">
	  <div class="container">
		<h4><b>Mark attendance</b></h4>  
	  </div>
	</div>
	<div class="card">
	  <div class="container">
		<h4><b>Fees collection</b></h4>  
	  </div>
	</div>
  </div>

  <!--------------------Calender-------------------------------->
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