<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"      
    ></script>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body oncontextmenu="return  true;">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo URL; ?>login/loginUser" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <select name="type">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="staff">Staff</option>
                <option value="admin">Admin</option>
                <option value="papermarker">Paper marker</option>
              </select>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Follow Vidarsha In Social Networks</p>
            <div class="social-media">
              <a href="https://m.facebook.com/vidarshaedu/photos/?ref=page_internal&mt_nav=0" class="social-icon" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon" target="_blank">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="#" class="social-icon" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Follow Vidarsha In Social Networks</p>
            <div class="social-media">
              <a href="#" class="social-icon" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon" target="_blank" >
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="#" class="social-icon" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <div class="popup">
              <h3 class="info-img">New here ?</h3>
              <img src="<?php echo URL; ?>public/img/info.png" alt="infomation" class="info-img" width="20px" height="20px" >
              <span class="popuptext" id="myPopup" >Only Teachers and Staff are allowd to Sign Up to the System
                Students can Sign In using their admission no and ID number
              </span>
            </div>
            <p>
              Click the info button before you sign up to the Vidarsha Online Education 
              System
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="<?php echo URL; ?>public/img/logosvg.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Need To SignIn ?</h3>
            <p>
              Vidarsha Online Educational Platform is open for every Student
              who register to the institute
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="<?php echo URL; ?>public/img/logosvg.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="<?php echo URL; ?>public/js/login.js"></script>
  </body>
</html>
