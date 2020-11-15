<?php $val=5; ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo URL; ?>public/img/logo.png">
    <script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/forgotPassword.css" />
    <title>Forgot Password Form</title>
  </head>
  <body oncontextmenu="return  true;">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo URL; ?>login/forgotPassword" class="sign-up-form" id="pass" method="post">
            <h2 class="title">Forgot Password?</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="usernm" name="user-email" type="text" placeholder="Email address" />
            </div>

            <?php if(isset($_GET['msg'])){ ?>
           <div><p style="color: red;">*<?php echo $_GET['msg']; ?></p></div>  <?php } ?>
           
            <input type="submit" class="btn" value="Send Reset Link" />

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
