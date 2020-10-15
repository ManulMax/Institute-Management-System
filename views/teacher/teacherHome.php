<!DOCTYPE html>
<html lang="en">
<head>
<title>Teacher Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="../../public/libraries/calendar-datepickerdemo/css/mobiscroll.javascript.min.css">
<script src="../../public/libraries/calendar-datepickerdemo/js/mobiscroll.javascript.min.js"></script>

<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../public/css/teacherNavStylesheet.css">
<link rel="stylesheet" href="../../public/css/teacherHomeStylesheet.css">

</head>


<body>

<div class="row">
  <div class="leftNav">
  <img src="../../public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="teacherHome.html"><i class="fas fa-home"></i>Dashboard</a></li>
	  <li><a href="materials.php"><i class="fas fa-upload"></i>Upload Materials</a></li>
	  <li><a href="createQuiz.html"><i class="fas fa-question"></i>Quizzes</a></li>
	  <li><a href="addNewClass.html"><i class="fas fa-users"></i>New Class</a></li>
	  <li><a href="reschedule.html"><i class="far fa-calendar-alt"></i>Re-schedule</a></li>
	  <li><a href="paperMarkerRegistration.html"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
	  <li><a href="salaryDetails.html"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
	</ul>
	<div class="chip"><img src="../../public/icons/Logout.png" alt="Person" width="96" height="96">Log out</div>
	<div class="chip" style: "float:left;"><img src="../../public/icons/School Director_30px.png" alt="Person" width="96" height="96">Profile</div>
  </div>
  <div class="header">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-home"></i>Dashboard</h2>
	  <div class="chip"><img src="../../public/icons/School Director_30px.png" alt="Person" width="96" height="96">Teacher Name</div>
  </div>
  <div class="middle" style="background-color:white;">
	<div class="card">
	  <div class="container">
		<h4><b>Upload Materials</b></h4>  
	  </div>
	</div>
	<div class="card">
	  <div class="container">
		<h4><b>Add New Class</b></h4>  
	  </div>
	</div>
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
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>


<script>

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