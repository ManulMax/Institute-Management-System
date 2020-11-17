<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidarsha Edu</title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/home.css">    
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/home.js"></script>
</head>
<body>
    <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
    <div class="wrapper-1">
        <header class="head clear">
            <div class="top_left">
                <h1><a href="index.html">Vidarsha Higher Education Center <br> Galle</a></h1>
                <p>Key to the future</p>
            </div>
            <div class="top_right">
                <ul class="nospace">
                    <li><strong>Hot Line :</strong>
                          +94715657788</li>
                          <br>
                    <li><strong>Class Info :</strong>
                        +9477110052</li>
                  </ul>                
            </div>
        </header>
    </div>
    <nav class="top_nav clear">
        <ul class="ul clear">
            <li class="active"><a href="#">Home</a></li>
            <li><a class="drop" href="#">Galary</a>
                <ul>
                    <li><a href="<?php echo URL; ?>/gallery.html">Life At Vidarsha</a></li>
                    <li><a href="<?php echo URL; ?>/full-width.html">Top Results</a></li>
                </ul>
            </li>
            <li><a href="#details">Teachers  Crew</a></li>
            <li><a href="#map">Find  Vidarsha</a></li>            
            <li><a href="#details">Classes  Today </a></li>
            <li><a href="#instruction">Instruction For Student</a></li>
			  <div class="popup">
			      <li><a href="#login-btn" >Login/Signup</a>
			    <span class="popuptext" id="myPopup" >To login click the signup/signin button below <br>
			පුරනය වීමට පහත signup/signin බොත්තම ක්ලික් කරන්න. පහත උපදෙස් අනුගමනය කරන්න.
          </span>
			    </li>
			  </div>
      </ul>
    </nav>
    <div class="back-img" style="background-image:url('<?php echo URL; ?>public/img/back5.jpg');">
        <div id="pageintro" class="intro clear">           
          <article>
            <h3 class="heading">The only source of knowledge is experience</h3>  
            <p>-Albert Einstein-</p>            
            <img class="logo" src="<?php echo URL; ?>public/img/logo2.png" alt="">            
            <footer><a id="login-btn" class="btn" href="<?php echo URL; ?>login">SignIn or SignUp</a></footer>
          </article>          
        </div>
    </div>
    <div class="wrapper-2">
        <main class="main-mid clear">               
            <div class="sectiontitle" id="instruction">
              <h6 class="heading">Special Instruction For Students</h6>
              <p>Follow the below instruction for better user experience</p>
              <p class="data">
                Students can use their admission number as username and the special 
                number that given in registration as password. <br>
                Use the above telephone number for inquiries about class times and 
                more details. <br>
                You must not handover your class card to another one. <br>
                You must maintain your decipline in institute are. <br>
                You can obtain a higher result by doing your studies and activities 
                on time. <br>
              </p>
              
			</div>
			<div class="sectiontitle" id="instruction">
              <h6 class="heading">සිසුන් සඳහා විශේෂ උපදෙස්</h6>
              <p>වඩා හොඳ පරිශීලක අත්දැකීමක් සඳහා පහත උපදෙස් අනුගමනය කරන්න</p>
              <p class="data">
			  සිසුන්ට ඔවුන්ගේ ඇතුළත් කිරීමේ අංකය පරිශීලක නාමය ලෙසත් ලියාපදිංචි කිරීමේදී ලබා දී ඇති විශේෂ අංකය මුරපදය ලෙසත් භාවිතා කළ හැකිය. <br>
			  පන්ති වේලාවන් සහ වැඩි විස්තර සඳහා ඉහත දුරකථන අංකය භාවිතා කරන්න. <br>
			  ඔබේ පන්ති කාඩ්පත වෙනත් අයෙකුට ලබාදීමෙන් වලකින්න. <br>
			  ආයතනය තුල සහ ඉන් පිටත ඔබගේ විනය පවත්වාගන්න. <br>
			  පැවැරුම් සහ එදිනෙදා කටයුතු එදිනෙදා අවසන් කිරිඉමෙන්  ඔබට උසස් ප්‍රතිපල ලබාගත හැකිය. <br>
              </p>
              
            </div>             
          <hr class="h-line">         
          <section>
            <div class="sectiontitle" id="details">
              <h6 class="heading">“Vidarsha Will Lead You To Find Success”</h6>
              <p>Join Us Today </p>
            </div>
            <ul class="mid-block group overview">
              <li class="block-set">
                <figure><a href="#"><img src="<?php echo URL; ?>public/img/block1.jpg" alt=""></a>
                  <figcaption>
                    <h6 class="heading">Teachers Crew</h6>                    
                    <?php
                      while($row = mysqli_fetch_assoc($this->teacherList)){ 

                      echo "<p id='name'><b>".$row['fname']." ".$row['mname']." ".$row['lname']."</b></p>";
                      
                      }
                    ?>
                  </figcaption>
                </figure>
              </li>
              <li class="block-set">
                <figure><a href="#"><img src="<?php echo URL; ?>public/img/block2.jpg" alt=""></a>
                  <figcaption>
                    <h6 class="heading">Subjects Taught</h6>
                    <?php
                      while($row = mysqli_fetch_assoc($this->subjectList)){ 

                      echo "<p id='name'><b>".$row['name']."</b></p>";
                      
                      }
                    ?>
                  </figcaption>
                </figure>
              </li>
              <li class="block-set">
                <figure><a href="#"><img src="<?php echo URL; ?>public/img/block3.jpg" alt=""></a>
                  <figcaption>
                    <h6 class="heading">Today Classes</h6>
                    <?php
                      while($row = mysqli_fetch_assoc($this->classList)){ 

                      echo "<p id='name'><b>".$row['name']."</b></p>";
                      
                      }
                    ?>
                  </figcaption>
                </figure>
              </li>              
            </ul>
          </section>
          <div class="clear"></div>
        </main>
      </div>
      <hr class="h-line"> 
      <div class="wrapper-3">
        <main class="main-map clear" id="map">               
            <div class="sectiontitle" >
              <h6 class="heading">Follow The Path To Vidarsha</h6>
              <p>use the map for locate</p>                           
            </div>                      
          <section>
            <div class="mapouter">
                <div class="gmap_canvas" >
                    <iframe width="1000" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=vidarsha%20institute%20galle&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                    <a href="https://www.whatismyip-address.com/divi-discount/"></a>
                </div>  
            </div>
          </section>
          <div class="clear"></div>
        </main>
      </div>
      <hr class="h-line">
      <div class="wrapper-4">
        <footer id="footer" class="footer clear">          
          <div class="left-block">
            <h6 class="heading">Contact Us Through</h6>
            <ul class="ulist">
              <li><i class="fa fa-map-marker"></i>
                <address>
                    Vidarsha Institute,Havelock Road, Gall
                </address>
              </li>
              <li><i class="fa fa-phone"></i> +9471565778</li>
              <li><i class="far fa-envelope"></i> vidarshaedu@gmail.com</li>
            </ul>
            <ul class="icons clear">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="messanger" href="#"><i class="fab fa-facebook-messenger"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
          <div class="right-block">
            <h6 class="heading">VIDARSHA GALLE</h6>
            <p class="para">
                We are on of leading educational institute in galle district. 
                With more 10 years experience , we always ready to provide the  
                best facilities and best education for the students in galle district. 
                With the high qualified teachers we always aim to deliver 
				        maximum amount of education to all of you who come inside to Vidarsha Roof. <br>
				        වසර 10 කට වැඩි පළපුරුද්දක් ඇති අපි සෑම විටම ගාලු දිස්ත්‍රික්කයේ සිසුන්ට හොඳම පහසුකම් සහ 
				        හොඳම අධ්‍යාපනය ලබා දීමට සූදානම්. උසස් සුදුසුකම් ලත් ගුරුවරුන් සමඟ අපි සැමවිටම 
				        අරමුණු කරන්නේ විදර්ෂා වහල වෙත පැමිණෙන ඔබ සැමට උපරිම අධ්‍යාපනයක් ලබා දීමයි.
            </p>
          </div>
        </footer>
        </div> 
      </div>
      <div class="wrapper-5">
        <div id="copyright" class="cpy clear">           
          <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">IS group 01</a></p>                   
        </div>
      </div>
</body>
</html>