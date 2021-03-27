<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/adminNav.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/admin.css">
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
    <h2><i class="fas fa-home"></i>Admin Dashboard</h2>
    <div class="logout"><a href="<?php echo URL; ?>login/logout" style="color: rgba(244,244,244,0.7);"><i class="fas fa-sign-out-alt"></i></a></div>
    <div id="myBtn" class="userDiv" style="margin-top:10px;float: right;margin-right: 30px;"><i class="fas fa-user"></i>Hello <?php echo $_SESSION['username']; ?> ;-)</div>
  </div>
  <div class="footer">
  <div id="copyright" class="cpy clear">           
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
  </div>
</div>



<div id="myModal" class="modal">

<!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <img src="<?php echo URL; ?>public/img/img_avatar.png" alt="Avatar" style="width:20%;border-radius: 50%;margin-left: 40%">
    <div class='row' style='background-color:white;text-align: center;'>
       <button id='psw-btn'><a href='<?php echo URL; ?>login/renderPasswordChange'  id='psw'><i class='fas fa-key'></i>change password</a></button>
     </div>

    <?php

          while($row = mysqli_fetch_assoc($this->userDetails)){ 


             echo "<h2 id='name'>".$row['fname']." ".$row['mname']." ".$row['lname']."</h2>";
             echo "<h4 id='name'>Teacher (Chemistry)</h4><br />";
             echo "<p id='name'>Qualifications : ".$row['qualifications']."</p><br />";

             echo "<div class='row'>
              <div class='col-50-topic'>
                <h3 class='topic'>Telephone no.</h3>
              </div>
              <div class='col-50-topic'>
                <h3 class='topic'>Email address</h3>
              </div>
            </div>";
            echo "<div class='row'>
              <div class='col-50-detail'>
                <h3 class='detail'>".$row['tel_no']."</h3>
              </div>
              <div class='col-50-detail'>
                <h3 class='detail'>".$row['email']."</h3>
              </div>
            </div>";

            echo "<div class='row'>
              <div class='col-50-topic'>
                <h3 class='topic'>NIC</h3>
              </div>
              <div class='col-50-topic'>
                <h3 class='topic'>DOB</h3>
              </div>
            </div>";
            echo "<div class='row'>
              <div class='col-50-detail'>
                <h3 class='detail'>".$row['NIC']."</h3>
              </div>
              <div class='col-50-detail'>
                <h3 class='detail'>".$row['DOB']."</h3>
              </div>
              <br />
            </div>
            <br />";
           
          }
        ?>

  </div>

</div>




    <!-------------------Middle contet---------------------------------->
    <div class="middle" style="background-color: #F8F8FF;">

    <table width="100%"  height="200px">
      <tr>

        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
            <div class="quarter-circle-top-left"><i id="icon1" class="fas fa-user-graduate fa-2x"></i></div>
            <?php

            while($row = mysqli_fetch_assoc($this->stuCount)){  

               echo "<div style='margin-left: 53%;margin-top: -35px;'><h4><b>".$row['stuCount']." </b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b>Total Students</b></h4>  
          </div>
        </div>
        </td>
        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon2" class="fas fa-chalkboard-teacher fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->classCount)){  

               echo "<div style='margin-left: 53%;margin-top: -35px;'><h4><b>".$row['classCount']." </b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b>Total Classes</b></h4>  
          </div>
        </div>
        </td>
      <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon3" class="fas fa-book fa-2x"></i></div>
          <?php

            while($row = mysqli_fetch_assoc($this->subCount)){  

               echo "<div style='margin-left: 53%;margin-top: -35px;'><h4><b>".$row['subCount']." </b></h4></div>";

            }
          ?>
           <div class="containerCard">
          <h4><b>Total Subjects</b></h4>  
          </div>
        </div>
        </td>
        <td style="padding-top:10px;padding-left:20px;padding-right:20px;border: 0px;">
          <div class="card">
          <div class="quarter-circle-top-left"><i id="icon4" class="fas fa-users fa-2x"></i></div>
          <?php
            while($row = mysqli_fetch_assoc($this->tecCount)){  
               echo "<div style='margin-left: 53%;margin-top: -35px;'><h4><b>".$row['tecCount']." </b></h4></div>";
            }
          ?>
           <div class="containerCard">
          <h4><b>Total Teachers</b></h4>  
          </div>
        </div>
        </td>

      </tr>
    </table>


<div class="chart" style="position: relative; height:15vh; width:35vw;margin-left: 3vW;margin-top: 10vh;">
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
                                    data: [0, 10, 5, 2, 20, 30, 45, 12, 8, 10, 0, 0]
                                }]
                            },
    
                            // Configuration options go here
                            options: {}
                        })
                </script>
            </div>

            <?php 
              // $classcount1 = mysqli_fetch_assoc($this->sum1);
              // $classcount2 = mysqli_fetch_assoc($this->sum2);
              // $classcount3 = mysqli_fetch_assoc($this->sum3);
              // $classcount4 = mysqli_fetch_assoc($this->sum4);
              // $classcount5 = mysqli_fetch_assoc($this->sum5);
              // $classcount6 = mysqli_fetch_assoc($this->sum6);
              // $classcount7 = mysqli_fetch_assoc($this->sum7);

             // $classcount = "'".$classcount1['sum']."','".$classcount2['sum']."','".$classcount3['sum']."','".$classcount4['sum']."','".$classcount5['sum']."','".$classcount6['sum']."','".$classcount7['sum']."'" ?>

            <div class="chart" style="position:relative; height:15vh; width:35vw; margin-left: 40vW;margin-top: -15vh;">
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
                                data: [<?php echo "1"//echo $classcount; ?>]
                            }]
                        },
    
                        // Configuration options go here
                        options: {}
                    })
                </script>
            </div>

   
 </div>
  </div>
</body>
</html>
