<?php $val=5; ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/changePassword.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body oncontextmenu="return  true;">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo URL; ?>login/pwChangeAfterLogin" class="sign-up-form" id="pass" method="post">
            <h2 class="title">Change Password</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="usernm" name="uname" type="text" placeholder="Username" disabled>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="current_passwd" placeholder="Current Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="new_passwd" placeholder="New Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="confirm_passwd" placeholder="Confirm New Password" />
            </div>

            <?php if(isset($_GET['msg'])){ ?>
           <div><p style="color: red;">*<?php echo $_GET['msg']; ?></p></div>  <?php } ?>
           
            <input type="submit" class="btn" value="Save" />
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
        <div class="panel right-panel">
          <img src="<?php echo URL; ?>public/img/logosvg.svg" class="image" alt="" />
        </div>
      </div>
    </div>

<script type="text/javascript">
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".container");

  var nm = "<?php echo $_SESSION['username']; ?>";

  container.classList.add("sign-up-mode");
  document.getElementById('usernm').value = nm;
</script>
  </body>
</html>
