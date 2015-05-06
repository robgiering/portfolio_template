<!-- Header/CSS Definitons -->
<?php
session_start();
require_once 'helpers/security.php';
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.ico">
<title>Rob Giering Design</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Custom Page CSS -->
<link href="css/style.css" rel="stylesheet">
<link href="css/hover.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- CSS Fonts -->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300' rel='stylesheet' type='text/css'>

<!-- Bootstrap Javascript File -->
<script src="js/bootstrap.min.js"></script>

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="js/ie-emulation-modes-warning.js"></script>

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 </head>


<!-- Begin Layout HTML -->

<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">
      <!-- Logo image or text goes here -->
      <img src="images/logo.png" width="150" height="120" class="img-responsive">
    </a>
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
  <!-- Screen Reader Text, no need to delete this -->
  <span class="sr-only">Toggle navigation</span>
  <!-- Navbar Collapse Button (Appears when page is resized) -->
  <span class="glyphicon glyphicon-menu-hamburger"></span>
  </button>
 </div>

  <!-- This creates the navbar, which shows the navbar icon we created above when page is resized-->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
  <!-- This is the beginning of the links in the top right corner -->
    <ul class="nav navbar-nav">
      <!-- Page Title 1 -->
      <li class="links"><a href="index.html">HOME</a></li>
      <!-- Page Title 2 -->
      <li class="links"><a href="aboutme.html">ABOUT ME</a></li>
      <!-- Page Title 3 -->
      <li class="links"><a href="recentwork.html">RECENT WORK</a></li>
      <!-- Page Title 4 -->
      <li class="links"><a href="hireme.php">HIRE ME</a></li>
      <!-- Page Title 5 -->
      <li class="links"><a href="contactme.php">CONTACT ME</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="pageheader_font">CONTACT ME</div>
    <img src="images/undershadow.png" class="img-responsive center-block">
  <div class="col-xs-6 col-md-4">
    <h3 align="center">Contact Information</h3>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".socialboxes").addClass('shown animated slideInLeft');
  $(".twitterbox").addClass('shown animated slideInRight'); 
});
</script>
  <div class="socialboxes">
    <div class="container">
        <div class="col-xs-6 col-md-4">
        <img src="images/icons/gmail.png">
        </div>
        <div class="col-xs-12 col-md-8">
        <p style="font-size: 15px; margin-top: 10px; "><a href="#" target="_blank">youremail@email.com</a><br><em>Professional Email</em></p>
        </div>
    </div>
  </div>


  <div class="socialboxes">
    <div class="container">
        <div class="col-xs-6 col-md-4">
        <img src="images/icons/gmail.png">
        </div>
        <div class="col-xs-12 col-md-8">
        <p style="font-size: 15px; margin-top: 10px; "><a href="#" target="_blank">youremail@email.com</a><br><em>Personal Email</em></p>
        </div>
    </div>
    </div>


  <div class="socialboxes">
    <div class="container">
        <div class="col-xs-6 col-md-4">
        <img src="images/icons/twitter1.png">
        </div>
        <div class="col-xs-12 col-md-8">
        <p style="font-size: 15px; margin-top: 10px; "><a href="#" target="_blank">@yourtwitter</a><br><em>Twitter</em></p>
        </div>
    </div>
  </div>
  <div class="socialboxes">
    <div class="container">
        <div class="col-xs-6 col-md-4">
        <img src="images/icons/facebook.png">
        </div>
        <div class="col-xs-12 col-md-8">
        <p style="font-size: 15px; margin-top: 10px; "><a href="#" target="_blank">Your FB Name</a><br><em>Facebook</em></p>
        </div>
    </div>
  </div>
    <div class="socialboxes">
      <div class="container">
        <div class="col-xs-6 col-md-4">
        <img src="images/icons/insta.png">
        </div>
        <div class="col-xs-12 col-md-8">
        <p style="font-size: 15px; margin-top: 10px; "><a href="#" target="_blank">@yourinstagram</a><br><em>Instagram</em></p>
      </div>
    </div>
</div>
</div>
  <div class="col-xs-6 col-md-4">
    <h3 align="center">Quick Email</h3>
    <div class="contactbox">
      <div class='container'>
    <?php if(!empty($errors)): ?>
    <div class="well">
      <ul>
        <li><?php echo implode('</li><li>', $errors); ?></li>
      </ul>

    </div>
  <?php endif; ?>

<form action="contact.php" method="post">
    <div class="form-group">
      <label>Full Name:</label>
    <input type="text" name="name" class="form-control" autocomplete="off"<?php echo isset($fields['name']) ? ' value="' . e($fields['name']) . '"' : '' ?>>
    </div>
    <div class="form-group">
      <label>Email:</label>
    <input name="email" type="email" class="form-control" autocomplete="off" <?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"' : '' ?>>
  </div>
  <div class="form-group">
    <label>Message:</label>
      <textarea name="message" rows="3" class="form-control" <?php echo isset($fields['message']) ? e($fields['message']) : '' ?>></textarea>
    </div>
  <div class="g-recaptcha" data-sitekey="6LfASQYTAAAAAEshJ7q5e1EIksqZz_DXatwjY3Ma"></div>  <button class="btn btn-primary btn-lg href="#" role="button" type="submit" style="margin-top: 5px; float: right;">Submit</button>
</form>
</div>
</div>
</div>
<div class="col-xs-6 col-md-4">
  <h3 align="center">Twitter Feed</h3>
 <div class="twitterbox">
        <a class="twitter-timeline" href="#" data-widget-id="593252799045103616"></a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
  </div>
</div>
<!-- Closes closes spacing div -->
</div>
</div>
  <footer>
  <div class="container text-center">
    <div class="footertext center-block">
    <a href="#" class="hvr-grow">
      <img src="images/icons/email.png"></a>
    <a href="#" class="hvr-grow">
      <img src="images/icons/fb.png"></a>
    <a href="#" class="hvr-grow">
      <img src="images/icons/twitter.png"></a>
    <a href="#" class="hvr-grow">
      <img src="images/icons/instagram.png">
    <a href="#" class="hvr-grow"><img src="images/icons/paypal.png"></a>
    </div>
  </div>
 </footer>
 </div><!-- /container -->


 <!-- Bootstrap core JavaScript
================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="js/ie10-viewport-bug-workaround.js"></script>
 </body>
</html>
<?
session_destroy();
?>