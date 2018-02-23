<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- register form -->
<form method="post" action="register.php" name="registerform">

    <!-- the user name input field uses a HTML5 pattern check -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project Siller</title>
    <!-- Bootstrap -->
      <link rel="stylesheet" href="../assets/css/please-wait.css">
      <link rel="stylesheet" href="../assets/css/spinkit.css">
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/css/login.css" rel="stylesheet">
      <link rel="stylesheet" href="../assets/css/sweetalert2.min.css" />
    </head>
    <body>
     <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">
           <form class="form-signin" method="post">
            <h2 class="form-signin-heading">Register Below</h2>
            <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
              <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
              <!-- the email input field uses a HTML5 email type check -->
            <label for="login_input_email">User's email</label>
              <input id="login_input_email" class="login_input" type="email" name="user_email" required />
            <label for="login_input_password_new">Password (min. 6 characters)</label>
              <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
            <label for="login_input_password_repeat">Repeat password</label>
              <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
            <input type="submit" class="btn btn-default" name="register" value="Register" />
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.cookie.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../ssets/js/sweetalert2.min.js"></script>
    <script type="text/javascript" src="../../assets/js/please-wait.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        if($.cookie('loading') == undefined || $.cookie('loading') == null) {
          window.loading_screen = window.pleaseWait({
            logo: "../assets/images/logo.svg",
            backgroundColor: '#AC1B1E',
            loadingHtml: "<p class='loading-message'>Project Siller<br>An online scouting platform for FIRST Robotics</p><div class='sk-spinner sk-spinner-three-bounce'><div class='sk-bounce1'></div><div class='sk-bounce2'></div><div class='sk-bounce3'></div></div>"
          });
          setTimeout(function() { window.loading_screen.finish();}, 3000);
          var date = new Date();
          date.setTime(date.getTime() + (5 * 60 * 1000));
          $.cookie("loading", "true", { expires: date });
        }
      });
    </script>
</form>

<!-- backlink -->
<a href="index.php">Back to Login Page</a>
