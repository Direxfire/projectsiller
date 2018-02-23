<?php
ob_start();
require('../inc/init.php');
if ($user -> LoggedIn($db_connect)) {
    header('location: statistics');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Project Siller</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/please-wait.css">
  <link rel="stylesheet" href="assets/css/spinkit.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/public.css" rel="stylesheet">
</head>
<body>
 <div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="inner cover">
        <h1 class="cover-heading">Project Siller</h1>
        <p class="lead">The best online scouting plaform for FRC<br><strong>We are currently in closed beta!</strong></p>
        <p class="lead">
          <a href="login" class="btn btn-lg btn-success">Login</a>
          <a href="login/register.php" class="btn btn-lg btn-info">Request Access</a>
        </p>
      </div>
      <div class="mastfoot">
        <div class="inner">
          <p class="white">This project is supported by <u>Project Siller LLC</u> &amp; <a class="url" href="https://metalmoose.org">The Metal Moose</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    if($.cookie('loading') == undefined || $.cookie('loading') == null) {
      window.loading_screen = window.pleaseWait({
        logo: " assets/images/logo.svg",
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
</body>
</html>
