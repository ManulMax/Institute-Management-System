<!DOCTYPE html>
<html lang="en">

<head>
    <title>Staff Dashboard</title>
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

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
            padding: 1px;
            margin: 0;
            font-size: 16px;
            height: 50px;
            color: white;
        }

        .chip {
            float: right;
            /* display: inline-block; */
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
            background-color: #212121;
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
            background-color: #212121;
            margin-bottom: 250px;
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

        i {
            padding: 10px;
        }
        /* botoom logout btn*/
        .Log-out a{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px 15px 50px;
            cursor: pointer;
            border-radius: 10%;
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
        /* ------------------ calendar removed------------------------------ */

        /* ----------------------------- middle content ----------------------------- */

        .grid {
            display: flex;
            text-align: center;
            font-family: Raleway;
            font-weight: lighter;
            color: rgb(24, 31, 31);
        }

        .grid .col {
            flex: 1;
            border-radius: 8px;
            background-color: #f1f1f1;
            margin: 20px 40px 30px 40px;
            padding-top: 40px;
            padding-bottom: 20px;
        }

        .grid .col p {
            font-size: 20px;
            font-weight: bold;
            color: brown;
        }

        /* ---------------------------chart pane------------------------------------- */
        .chart-panel .chart-set1{
            display: flex;
            text-align: center;
        }
        .chart-panel .chart-set2{
            display: flex;
            text-align: center;
        }
        .chart-panel .chart{
            flex: 1;
            padding-top: 40px;
            padding-bottom: 20px;
        }
        .chart-panel .chart2{
            flex: 1;
            padding-top: 40px;
            padding-bottom: 20px;
        }

        /* -------------------------------footer----------------------------------------- */

        .footer {
            background-color: #212121;
            color: rgba(255, 255, 255, 0.5);
            padding: 2rem 0 2rem 0 ;
            margin-left: auto;
            margin-right: auto; 
            text-align: center;
        }

        /* -----------------------------media rule--------------------------------------- */
        @media(max-width: 570px){
        .grid{
            display: block;
            margin-left: auto;
            margin-right: auto;
            }
        .chart-panel{
            display: block;
        }
        }
    </style>



</head>

<body>
  <!-------------------------Navigation Bar------------------->
<div class="row">
    <div class="leftNav">
        <img src="<?php echo URL; ?>public/img/logo.png" width="50%" height="100px" style="margin-left: 25%">
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="<?php echo URL; ?>teacherRegistration"><i class="fa fa-graduation-cap"></i>Register Teacher</a></li>
            <li><a href="<?php echo URL; ?>staffRegistration"><i class="fa fa-user-circle-o"></i>Register Staff</a></li>
            <li><a href="<?php echo URL; ?>updateTeacher"><i class="fa fa-user-o"></i>Update Teacher</a></li>
            <li><a href="<?php echo URL; ?>updateStaff"><i class="fa fa-user-o"></i>Update Staff</a></li>
            <li><a href="<?php echo URL; ?>addSubject"><i class="fa fa-book"></i>Edit Subject</a></li>
            <li><a href="<?php echo URL; ?>salaryPay"><i class="fas fa-money-bill-wave"></i>Salary Payment</a></li>
            <li><a href="<?php echo URL; ?>adminIncome"><i class="fas fa-money-bill-wave"></i>Income</a></li>
        </ul>
        <div class="Log-out"><a href="####">Logout</a></div> 
    </div>
    <div class="header">
        <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i
                class="fa fa-user-circle-o"></i>Staff Registration</h2>
        <div class="chip"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Admin Name
        </div>
    </div>

    <!-------------------Middle contet---------------------------------->
    <div class="mid-pane">
        <div class="grid">
            <div class="col">
                <h3>No Of Students</h3>
                <p>500</p>
                <!-- get from db -->
            </div>
            <div class="col">
                <h3>No Of Classes</h3>
                <p>16</p>
                <!-- get from db -->
            </div>
            <div class="col">
                <h3>No Of Teachers</h3>
                <p>8</p>
                <!-- get from db -->
            </div>
            <div class="col">
                <h3>No Of Students In</h3>
                <p>0</p>
                <!-- get from db -->
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
                                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                datasets: [{
                                    label: 'New Registering Student Per Month',
                                    backgroundColor: '#003f5c',
                                    borderColor: '#6e6fae',
                                    data: [0, 10, 5, 2, 20, 30, 45]
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
                        type: 'bar',
    
                        // The data for our dataset
                        data: {
                            labels: ['Sunday', 'Monday', 'Tuesday', 'Wedensday', 'Thursday', 'Friday', 'Saturday'],
                            datasets: [{
                                label: 'Class Per Day',
                                backgroundColor: '#ffa600',
                                borderColor: 'rgb(255, 99, 132)',
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
    <!-- <div class="chart-panel2">
        <div class="chart-set2">
            <div class="chart-2" style="position: relative; height:15vh; width:35vw">
                <canvas id="myChart3"></canvas>
                <script>
                        var ctx = document.getElementById('myChart3').getContext('2d');
                        var chart = new Chart(ctx, {
                            // The type of chart we want to create
                            type: 'pie',
    
                            // The data for our dataset
                            data: {
                                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                datasets: [{
                                    label: 'New Registering Student Per Month',
                                    backgroundColor: 'rgb(255, 99, 132)',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [0, 10, 5, 2, 20, 30, 45]
                                }]
                            },
    
                            // Configuration options go here
                            options: {}
                        })
                </script>
            </div>
            <div class="chart-2" style="position:relative; height:15vh; width:35vw">
                <canvas id="myChart4"></canvas>
                <script>
                    var ctx = document.getElementById('myChart4').getContext('2d');
                    var chart = new Chart(ctx, {
                        // The type of chart we want to create
                        type: 'pie',
    
                        // The data for our dataset
                        data: {
                            labels: ['Sunday', 'Monday', 'Tuesday', 'Wedensday', 'Thursday', 'Friday', 'Saturday'],
                            datasets: [{
                                label: 'Class Per Day',
                                backgroundColor: 'rgb(255, 99, 132)',
                                borderColor: 'rgb(255, 99, 132)',
                                data: [0, 5, 3, 4, 2, 4, 6]
                            }]
                        },
    
                        // Configuration options go here
                        options: {}
                    })
                </script>
            </div>
        </div>
    </div> -->
    <!----------------------------Calender- removed------------------------>
  </div>

  <div class="footer">
    <i class="far fa-copyright">Vidarsha Edu 2020</i>
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