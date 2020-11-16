<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminNav.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminUpdate.css">
    <title>Income Data</title>
    <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
   



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
</head>



<body>
      <!-------------------------Navigation Bar------------------->
<div class="row">
    <div class="leftNav">
        <img class="logo" src="<?php echo URL; ?>public/img/logo.png">
        <ul>
            <li><a href="<?php echo URL; ?>adminDashboard"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="<?php echo URL; ?>teacherRegistration"><i class="fa fa-graduation-cap"></i>Register Teacher</a></li>
            <li><a href="<?php echo URL; ?>staffRegistration"><i class="fa fa-user-circle-o"></i>Register Staff</a></li>
            <li><a href="<?php echo URL; ?>updateTeacher"><i class="fa fa-user-o"></i>Update Teacher</a></li>
            <li><a href="<?php echo URL; ?>updateStaff"><i class="fa fa-user-o"></i>Update Staff</a></li>
            <li><a href="<?php echo URL; ?>updateStudent"><i class="fa fa-user-o"></i>Update Student</a></li>
            <li><a href="<?php echo URL; ?>addSubject"><i class="fa fa-book"></i>Add Subject</a></li>
            <li><a href="<?php echo URL; ?>salaryPay"><i class="fas fa-money-bill-wave"></i>Salary Payment</a></li>
            <li><a href="<?php echo URL; ?>adminIncome"><i class="fas fa-money-bill-wave"></i>Income</a></li>
        </ul>        
    </div>

    
    
  <div class="headerClass">
    <h2><i class="fas fa-upload"></i>Income</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>

    <!-------------------Middle contet---------------------------------->
    
  <div class="middle" style="background-color:#F8F8FF;padding-top: 3%;">
       

  <div class="table-filters">
  <div class="row" style="margin-left: 10%;">
    <div class="col-10" style="width: 7%;">
      <label for="filter-name">Name :</label>
    </div>
    <div class="col-20">
      <input type="text" class="input-text" id="filter-name" data-filter-col="0">
    </div>
    <div class="col-5">
    </div>

    <div class="col-10" style="width: 7%;">
      <label for="filter-sub">Subject :</label>
    </div>
    <div class="col-10">
      <input type="text" class="input-text" id="filter-sub" data-filter-col="1">
    </div>
    <div class="col-5">
    </div>

    <div class="col-10" style="width: 7%;">
      <label for="filter-batch">Batch :</label>
    </div>
    <div class="col-10">
      <input type="text" class="input-text" id="filter-batch" data-filter-col="1">
    </div>
    </div>

    
  </div>



  <div id="tableDiv" style="width: 50%;">
    <table id="data">
    <thead>
      <tr>
        <th>Teacher</th>
        <th>Subject</th>
        <th>Batch</th>
        <th>Student Count</th>
        <th>Income</th>
      </tr>
    </thead>
    <tbody>
    
    </tbody>
    </table>

    <div class="row" style="margin-left: 20%;">
      <div class="col-20">
        <label for="filter-total">Total Income:</label>
      </div>
      <div class="col-20" style="background-color: #ACE1AF;">
        <label for="filter-total"></label>
      </div>
    </div>
  </div>


    <div class="row" style="margin-top: 5%;">
    <div class="col-50">
      <div class="chart" style="position: relative; height:15vh; width:35vw">
            <canvas id="myChart"></canvas>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'bar',

                    // The data for our dataset
                    data: {
                        labels: ['Physics', 'Chemistry', 'Applied', 'Pure', 'ICT', 'Bio-Tec', 'Eng-Tec'],
                        datasets: [{
                            label: 'New Registering Student Per Month',
                            backgroundColor: '#0d7377',
                            borderColor: 'rgb(255, 99, 132)',
                            data: [0, 10, 5, 2, 20, 30, 45]
                        }]
                    },

                    // Configuration options go here
                    options: {}
                })
        </script>
        </div>
    </div>
    <div class="col-50">
      <div class="chart" style="position: relative; height:15vh; width:35vw">
            <canvas id="myChart2"></canvas>
            <script>
                var ctx = document.getElementById('myChart2').getContext('2d');
                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'pie',

                    // The data for our dataset
                    data: {
                        labels: ['Physics', 'Chemistry', 'Applied', 'Pure', 'ICT', 'Bio-Tec', 'Eng-Tec'],
                        datasets: [{
                            label: 'New Registering Student Per Month',
                            backgroundColor: '#de425b',
                            borderColor: '#7e8a97',
                            data: [0, 10, 5, 2, 20, 30, 45]
                        }]
                    },

                    // Configuration options go here
                    options: {}
                })
        </script>
        </div>
    </div>


        </div>
    </div>
    <!----------------------------Calender- removed------------------------>
  </div>

<footer>
    <i class="far fa-copyright">Vidarsha Edu 2020</i>
</footer>

</body>
</html>


