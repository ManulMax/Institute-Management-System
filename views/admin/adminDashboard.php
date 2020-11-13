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
            <li><a href="<?php echo URL; ?>updateTeacher"><i class="fa fa-user-o"></i>Update Teacher</a></li>
            <li><a href="<?php echo URL; ?>UpdateStaff"><i class="fa fa-user-o"></i>Update Staff</a></li>
            <li><a href="<?php echo URL; ?>addSubject"><i class="fa fa-book"></i>Add Subject</a></li>
            <li><a href="<?php echo URL; ?>salaryPay"><i class="fas fa-money-bill-wave"></i>Salary Payment</a></li>
            <li><a href="<?php echo URL; ?>adminIncome"><i class="fas fa-money-bill-wave"></i>Income</a></li>
        </ul>        
    </div>

    
    <div class="header">
        <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i></i>Admin Dashboard</h2>
        <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
        <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>  
    </div>

    <!-------------------Middle contet---------------------------------->
    <div class="mid-pane">
        <div class="grid">
            <div class="col">
                <h3>No Of Students</h3>
                <?php
                    while($row = mysqli_fetch_assoc($this->stuCount1)){
                    echo "<div style='margin-left: 37%;margin-top: -35px;'><p><b>".$row['count1']." Students</b></p></div>";
                }
                ?>
                
            </div>
            <div class="col">
                <h3>No Of Classes</h3>
                <?php
                    while($row = mysqli_fetch_assoc($this->classCount)){
                    echo "<div style='margin-left: 37%;margin-top: -35px;'><p><b>".$row['count1']." Students</b></p></div>";
                }
                ?>
                
            </div>
            <div class="col">
                <h3>No Of Teachers</h3>
                <?php
                    while($row = mysqli_fetch_assoc($this->tecCount)){
                    echo "<div style='margin-left: 37%;margin-top: -35px;'><p><b>".$row['count1']." Students</b></p></div>";
                }
                ?>
                
            </div>
            <div class="col">
                <h3>No Of Paied Students</h3>
                <?php
                    while($row = mysqli_fetch_assoc($this->stuCount2)){
                    echo "<div style='margin-left: 37%;margin-top: -35px;'><p><b>".$row['count1']." Students</b></p></div>";
                }
                ?>
                
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
