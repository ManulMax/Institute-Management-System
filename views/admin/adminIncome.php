<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <title>Income Data</title>
    <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <style>

* {
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            background-color: #212121;
            padding: 1px;
            margin: 0;
            font-size: 16px;
            height: 50px;
            color: #3e7737;
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

        .Log-out a:hover{
            background-color: #28882b;
        }
        /* -------------------------------footer----------------------------------------- */

        footer {
            background-color: #212121;
            color: rgba(255, 255, 255, 0.5);
            padding: 2rem 0 2rem 0 ;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100%; 
            text-align: center;
        }
        /* ----------------------------------chart---------------------------------------- */
        .top-mid{
            display: flex;
        }
        .top-mid .chart{
            flex: 1;
            padding-top: 40px;
            padding-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        /* ----------------------------------table-------------------------------------------- */
       .mid-table{
           display: flex;
       }
       .mid-table .purpleHorizon{
           flex: 1;
           margin-top: 20px;
       }
       
        table.purpleHorizon {
  background-color: #2c2c2c;
  width: 75%;
  height: 50%;
  text-align: left;
  border-collapse: collapse;
}
table.purpleHorizon td, table.purpleHorizon th {
  padding: 8px 8px;
}
table.purpleHorizon tbody td {
  font-size: 13px;
  color: #FFFFFF;
}
table.purpleHorizon tr:nth-child(even) {
  background: #969696;
}
table.purpleHorizon thead {
  background: #555555;
  border-bottom: 4px solid #555555;
}
table.purpleHorizon thead th {
  font-size: 19px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: left;
  border-left: 2px solid #555555;
}
table.purpleHorizon thead th:first-child {
  border-left: none;
}

table.purpleHorizon tfoot td {
  font-size: 13px;
}
table.purpleHorizon tfoot .links {
  text-align: left;
}
table.purpleHorizon tfoot .links a{
  display: inline-block;
  background: #555555;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}        
    </style>
</head>
<body>
      <!-------------------------Navigation Bar------------------->
<div class="row">
    <div class="leftNav">
        <img src="<?php echo URL; ?>public/img/logo.png" width="50%" height="100px" style="margin-left: 25%">
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
        <div class="Log-out"><a href="####">Logout</a></div> 
    </div>
    <div class="header">
        <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i
                class="fa fa-user-circle-o"></i>Income Details</h2>
        <div class="chip"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Admin Name
        </div>
    </div>

    <!-------------------Middle contet---------------------------------->
    <div class="mid">
        <div class="mid-table">
            <table class="purpleHorizon">
                <thead>
                    <tr>
                        <th>Teacher</th>
                        <th>Class #1</th>
                        <th>Students</th>
                        <th>Income</th>
                        <th>Class #2</th>
                        <th>Students</th>
                        <th>Income</th>
                        <th>Class #3</th>
                        <th>Students</th>
                        <th>Income</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Padmika Godakanda</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Nadeera Siriwardane</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Harison Silva</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Deneth Viduranga</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Teacher x</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Teacher y</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Teacher z</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Teacher</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Teacher</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Teacher</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
                </tr>
            </table>
        </div>
        <!-- -----------------------------chart pane------------------------ -->
        <div class="top-mid">
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
    <!----------------------------Calender- removed------------------------>
  </div>

<footer>
    <i class="far fa-copyright">Vidarsha Edu 2020</i>
</footer>

</body>
</html>


