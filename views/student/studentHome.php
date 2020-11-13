<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Dashboard</title>
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
    <h2><i class="fas fa-home"></i>Dashboard</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>


  <div class="middle" style="background-color:white;">

    <table class="midTable" cellpadding="10px;" border="0">
      <tr>
        <td width="40%">
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fas fa-users fa-2x"></i></div>
            <div style='margin-left: 27%;margin-top: -35px;'><h3><b>Combined Maths 2021 A/L</b></h3></div>
             <div class="containerCard">
            <h5><b>Teacher : Vinuri Piyathilake</b></h5>  
            </div>
          </div>
          <br />
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fas fa-users fa-2x"></i></div>
            <div style='margin-left: 27%;margin-top: -35px;'><h3><b>Physics 2021 A/L</b></h3></div>
             <div class="containerCard">
            <h5><b>Teacher : Vinuri Piyathilake</b></h5>  
            </div>
          </div>
          <br />
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fas fa-users fa-2x"></i></div>
            <div style='margin-left: 27%;margin-top: -35px;'><h3><b>Chemistry 2021 A/L</b></h3></div>
             <div class="containerCard">
            <h5><b>Teacher : Vinuri Piyathilake</b></h5>  
            </div>
          </div>
          <br />
        </td>

        <td width="60%">
          <div style="position: relative;margin-left: 10%;">
            <canvas id="myChart1"></canvas>
            <script>
            var ctx = document.getElementById('myChart1').getContext('2d');
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

        </td>
      </tr>
      <tr>
        <td>
          <div class="marks">
            <h3>Exam results</h3>
            <br />
            <h4>Subject 1</h4>
            <p>Exam 1</p>
            <p>Exam 2</p>
            <p>Exam 3</p>
            <br />

            <h4>Subject 2</h4>
            <p>Exam 1</p>
            <p>Exam 2</p>
            <p>Exam 3</p>
            <br />

            <h4>Subject 3</h4>
            <p>Exam 1</p>
            <p>Exam 2</p>
            <p>Exam 3</p>
            <br />

            <h4>Subject 3</h4>
            <p>Exam 1</p>
            <p>Exam 2</p>
            <p>Exam 3</p>
            <br />
          </div>
        </td>
        <td>
          <div style="position: relative;margin-left: 10%;">
            <canvas id="myChart2"></canvas>
            <script>
            var ctx = document.getElementById('myChart2').getContext('2d');
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

        </td>
      </tr>
    </table>

      

      
  	

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