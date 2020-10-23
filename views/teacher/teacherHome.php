<!DOCTYPE html>
<html lang="en">
<head>
<title>Teacher Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php echo URL; ?>public/libraries/calendar-datepickerdemo/css/mobiscroll.javascript.min.css">
<script src="<?php echo URL; ?>public/libraries/calendar-datepickerdemo/js/mobiscroll.javascript.min.js"></script>

<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherHomeStylesheet">


</head>


<body>

<div class="row">
  <div class="leftNav">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "40%" height = "100px" style= "margin-left: 25%">
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
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-home"></i>Dashboard</h2>
    <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
	 <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Teacher ;-)</div>
  </div>


  <div class="middle" style="background-color:white;">


  	<table width="100%"  height="200px">
  		<tr>
  			<td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
  				<div class="card">
  					<div class="quarter-circle-top-left"><i id="icon1" class="fas fa-users fa-2x"></i></div>
  					<div style="margin-left: 37%;margin-top: -35px;"><h4><b>50 Students</b></h4></div>
			  	 <div class="containerCard">
					<h4><b>2020 A/L</b></h4>  
				  </div>
				</div>
  			</td>
  			<td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
  				<div class="card">
  				<div class="quarter-circle-top-left"><i id="icon2" class="fas fa-users fa-2x"></i></div>
  				<div style="margin-left: 37%;margin-top: -35px;"><h4><b>50 Students</b></h4></div>
			  	 <div class="containerCard">
					<h4><b>2021 A/L</b></h4>  
				  </div>
				</div>
  			</td>
			<td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
  				<div class="card">
  				<div class="quarter-circle-top-left"><i id="icon3" class="fas fa-users fa-2x"></i></div>
  				<div style="margin-left: 37%;margin-top: -35px;"><h4><b>50 Students</b></h4></div>
			  	 <div class="containerCard">
					<h4><b>2022 A/L</b></h4>  
				  </div>
				</div>
  			</td>
  			<td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
  				<div class="card">
  				<div class="quarter-circle-top-left"><i id="icon4" class="fas fa-users fa-2x"></i></div>
  				<div style="margin-left: 37%;margin-top: -35px;"><h4><b>50 Students</b></h4></div>
			  	 <div class="containerCard">
					<h4><b>Revision</b></h4>  
				  </div>
				</div>
  			</td>

  		</tr>
  	</table>



    <div style="position: relative;width: 40%;height: 400px;margin-top: 5%;">
      <canvas id="myChart"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2020 A/L', '2021 A/L', '2022 A/L', 'Revision'],
        datasets: [{
            label: 'Weekly Attendance',
            data: [12, 19, 3, 5],
            backgroundColor: [
                '#8FBC8F',
                '#8FBC8F',
                '#8FBC8F',
                '#8FBC8F'
            ],
            borderColor: [
                '#8FBC8F',
                '#8FBC8F',
                '#8FBC8F',
                '#8FBC8F'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
    </div>


<div class="container" style="margin: 30px;">


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


</div>





<div class="footer">
  <p>Footer</p>
</div>

</body>


</html>