<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/admin.css" />
    <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
  <!-------------------------Navigation Bar------------------->
  <div class="row">
    <div class="leftNav">
        <img src="<?php echo URL; ?>public/img/logo2.png" class="img1" width="100%" height="12%" >
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="<?php echo URL; ?>teacherRegistration"><i class="fa fa-graduation-cap"></i>Register Teacher</a></li>
            <li><a href="<?php echo URL; ?>staffRegistration"><i class="fa fa-user-circle-o"></i>Register Staff</a></li>
            <li><a href="update teacher.html"><i class="fa fa-user-o"></i>Update Teacher</a></li>
            <li><a href="update staff.html"><i class="fa fa-user-o"></i>Update Staff</a></li>
            <li><a href="subject.html"><i class="fa fa-book"></i>Edit Subject</a></li>
            <li><a href="#"><i class="fas fa-money-bill-wave"></i>Salary Payment</a></li>
            <li><a href="#"><i class="fas fa-money-bill-wave"></i>Income</a></li>
        </ul>        
    </div>

    
    <div class="header">
        <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i
            ></i>Admin Dashboard</h2>
            <div style="margin-top:6px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt" style="font-size: 28px;"></i></div>
            <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user fa-lg"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
    </div>

    <!-------------------Middle contet---------------------------------->
    <div class="mid-pane">
        <div class="grid">
            <div class="col">
                <h3>No Of Students</h3>
                <p>500</p>
                
            </div>
            <div class="col">
                <h3>No Of Classes</h3>
                <p>16</p>
                
            </div>
            <div class="col">
                <h3>No Of Teachers</h3>
                <p>8</p>
                
            </div>
            <div class="col">
                <h3>No Of Students In</h3>
                <p>0</p>
                
            </div>
        </div>
    </div>
    <!-- -----------------------------chart pane------------------------ -->
    <div class="chart-panel">
        <div class="chart-set1">
            <div class="chart" style="position: relative; height:15vh; width:35vw">
                <canvas id="myChart"></canvas>
                <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            // The type of chart we want to create
                            type: 'line',
    
                            // The data for our dataset
                            data: {
                                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                                datasets: [{
                                    label: 'New Registering Student Per Month',
                                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                                    borderColor: '#14870f',
                                    data: [0, 10, 5, 2, 20, 30, 45, 12, 8, 10, 32, 46]
                                }]
                            },
    
                            // Configuration options go here
                            options: {}
                        })
                </script>
            </div>
            <div class="chart" style="position:relative; height:15vh; width:35vw">
                <canvas id="myChart2"></canvas>
                <script>
                    var ctx = document.getElementById('myChart2').getContext('2d');
                    var chart = new Chart(ctx, {
                        // The type of chart we want to create
                        type: 'horizontalBar',
    
                        // The data for our dataset
                        data: {
                            labels: ['Sunday', 'Monday', 'Tuesday', 'Wedensday', 'Thursday', 'Friday', 'Saturday'],
                            datasets: [{
                                label: 'Class Per Day',
                                backgroundColor: '#1d5b86',
                                borderColor: '#14870f',
                                data: [0, 5, 3, 4, 2, 4, 6]
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
</body>
</html>
