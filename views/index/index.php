<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidarsha.Edu</title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/home.css">
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <script src="<?php echo URL; ?>public/js/home.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        body{
            background-image: url("<?php echo URL; ?>public/img/back5.jpg");
            /* background-image: linear-gradient(#164A41,#9DC88D); */
            z-index:-1;
            
}
    </style>
</head>
<!-- oncontextmenu="return false;" -->
<body>
    <div class="container">
        <div class="top-nav">
            <img src="<?php echo URL; ?>public/img/logo.png" alt="class logo" width="500px" height="300px" class="logo">
            <div class="side-nav" id="side-navbar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="<?php echo URL; ?>login">Login</a>
                <a href="#">Services</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </div>
            <div id="nav-click">
                <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </div>
        </div>
        <div class="top-mid">
            <h3>"Irrespective of race, creed, and gender, <br>
                education makes it possible for people to stand out as equal with all the other persons from different walks of life" <br>
                -Famous Quote
            </h3>
            <hr width="75%">
        </div>
        <div class="grid-panel">
            <div class="grid-panel1">
                <div class="col-top">
                    <a href=""><i class='fas fa-laptop' style='font-size:48px;color:rgb(207, 50, 50)'></i>
                    <h3>Online Lessons</h3></a>
                    <p>Download Your Study Materials Here</p>
                </div>
                <div class="col-top">
                    <a href=""><i class="fas fa-chart-bar" style='font-size:48px;color:rgb(207, 50, 50)'></i>
                    <h3>Exam Marks</h3></a>
                    <p>View And Analyze Your Exam Marks Here</p>
                </div>
                <div class="col-top">
                    <a href=""><i class="far fa-calendar-alt" style='font-size:48px;color:rgb(207, 50, 50)'></i>
                    <h3>Class TimeTable</h3></a>
                    <p>View All Classes Holding On This Week</p>
                </div>
            </div>            
            <div class="grid-panel2">
                <div class="col-top">
                    <a href=""><i class="fas fa-chalkboard-teacher" style='font-size:48px;color:rgb(207, 50, 50)'></i>
                    <h3>Class Details</h3></a>
                    <p>View All Class And Subject Details Here</p>
                </div>
                <div class="col-top">
                    <div class="alert"><i class="fas fa-circle" style='font-size:15px;color:rgb(207, 50, 50)'></i></div>
                    <a href=""><i class="far fa-calendar-times" style='font-size:48px;color:rgb(207, 50, 50)'></i>
                    <h3>Public Notices</h3></a>
                    <p>View All Public And Important Notices Here</p>
                </div>
                <div class="col-top">
                    <a href=""><i class="fas fa-camera" style='font-size:48px;color:rgb(207, 50, 50)'></i>
                    <h3>Life At Vidarsha</h3></a>
                    <p>View Fun Event Photographs At Vidarsha</p>
                </div>
            </div>
        </div>
        <div class="mid">
            <h3>“Vidarsha Has The Best Qualified Teaching Crew In Galle District” <br> Join Us Today To Find Success</h3>
            <hr width="50%">
        </div>
        <div class="mid-panel">
            <div class="col-mid">
                <i class='far fa-user' style='font-size:48px;color:rgb(13, 59, 34)'></i>
                <h3>Padmika Godakanda <br> BSc. MSc. </h3>
                <p>Former Physics Teacher At Leading School In Galle. He Complete His Bachelor's degree and 
                    Master's degree In University Of Peradeniya. Currenty Teaching Advance Level Physics At Vidarsha.
                </p>
            </div>
            <div class="col-mid">
                <i class="far fa-user" style='font-size:48px;color:rgb(13, 59, 34)'></i>
                <h3>Nadeera Siriwardane <br> BSc.(Hons) </h3>
                <p>Competed His Bachelor's degree In University Of Peradeniya Becomming Top Of His Batch. He Has A First Class Degree In Mathematics
                    Currenty Teaching Advance Level Combined Mathematics At Vidarsha.
                </p>
            </div>
            <div class="col-mid">
                <i class="far fa-user" style='font-size:48px;color:rgb(13, 59, 34)'></i>
                <h3>P. Harison <br> BSc.(Chemistry Special)</h3>
                <p>Senior Advance Level Chemistry Tutor With 30 Years Of Teaching Experience. He Show The Path To 1000+ Students To Engineering and Medical
                   Faculties. 
                </p>
            </div>                
        </div>
        <div class="end">
            <hr width="50%">
        </div>
        <!-- --------------------------------------------------footer--------------------------------------------------------------------->
        <footer id="footer">
            <div class="inner">
                <div class="content">
                    <section>
                        <h3>VIDARSHA GALLE</h3>
                        <p>
                            We are on of leading educational institute in galle district. With more 10 years experience , we always ready to provide the best facilities 
                            and best education for the students in galle district. With the high qualified teachers we always aim to deliver maximum amount of education 
                            to all of you who come inside to Vidarsha Roof. 
                        </p>
                    </section>
                    <section>
                        <h4>Reach Us From ...</h4>
                        <ul class="alt">
                            <li>Vidarsha Institute, Havelock Road, Galle</li>
                            <li>(Near Dolosmaha Shopping Mall)</li>
                            <li>TP- 0715657788/0771111111</li>
                            <li></li>                            
                        </ul>
                    </section>
                    <section>
                        <h4>Follow Us On</h4>
                        <ul class="plain">
                            <li><i class="fab fa-facebook-square" style='font-size:28px;color:rgb(209, 199, 199)'></i><a href="#"></a>Facebook</a></li>
                            <li><i class="fab fa-twitter-square" style='font-size:28px;color:rgb(209, 199, 199)'></i><a href="#"></a>Twitter</a></li>
                            <li><i class="fas fa-envelope-square" style='font-size:28px;color:rgb(209, 199, 199)'></i><a href="#"></a>Email</a></li>
                            <li><i class="fab fa-youtube-square" style='font-size:28px;color:rgb(209, 199, 199)'></i><a href="#"></a>YouTube</a></li>
                        </ul>
                    </section>
                </div>
                <div class="copyright">
                    &copy; Vidarsha 2020. IS Group Project Group No:1
                </div>
            </div>
        </footer>
    </div>
        
</body>
</html>
