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
<!-- CSS Fonts -->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300' rel='stylesheet' type='text/css'>
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
    <div class="pageheader_font">HIRE ME</div>
    <h1 align="center">Please view my skills and submit info for a free estimate!</h1>
    <img src="images/undershadow.png" class="img-responsive center-block">
    <div class="col-xs-6 col-md-4">
     
    <h3 align="center">Programming Skills</h3>

 <div class="textdiv">
 <div class="container">
  
<!-- Skill List 1 Title Goes Here-->
 

 <h5>HTML</h5>
 <div class="progress">
 <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
 <span class="sr-only">40% Complete (success)</span>
 </div>
 </div>


  <h5>CSS</h5>
  <div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
  <span class="sr-only">20% Complete</span>
  </div>
  </div>

  <h5>PHP</h5>
  <div class="progress">
  <div class="progress-bar progress-bar-average" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
  <span class="sr-only">60% Complete (warning)</span>
  </div>
  </div>

  <h5>JQuery</h5>
  <div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  <span class="sr-only">80% Complete (danger)</span>
  </div>
  </div>

  <h5>Javascript</h5>
  <div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  <span class="sr-only">80% Complete (danger)</span>
  </div>
  </div>
<!--- Closes "center-block div" -->
<!-- START COLOR WELL -->
    <button class="btn btn-primary buttonright" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
     View Key
    </button>
    </div>
    <div class="container">
    <div class="collapse" id="collapseExample">
    <div class="well well-sm"><div class="row">
    <!-- This is a spacing object for each of the Color Keys icon. -->
    <div class="col-xs-6 col-md-4">
    <!-- Color Key Box 1 - "Beginner" -->
    <div class="colorkey red"></div>
    <!-- Skill Level name goes here -->
    <p>Beginner</p>
    </div>

    <!-- Key Color #1 -->
    <div class="col-xs-6 col-md-4">
    <div class="colorkey">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    </div>
    </div>
    <p>Average</p>
    </div>

    <!-- Key Color #2 -->
    <div class="col-xs-6 col-md-4">
    <div class="colorkey">
    <div class="progress-bar progress-bar-average" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    </div>
    </div>
    <p>Skilled</p>
    </div>
    
    <!-- Key Color #3 -->
    <div class="col-xs-6 col-md-4">
    <div class="colorkey">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    </div>
    </div>
    <p>Above Average</p>
    </div>

    <!-- Key Color #3 -->
    <div class="col-xs-6 col-md-4">
    <div class="colorkey">
    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    </div>
    </div>
    <p>Expert*</p>
    </div>

    <!-- Key Color #4 -->
    <div class="col-xs-6 col-md-4">
    <div class="colorkey">
    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    </div>
    </div>
    <p>Certified</p>
    </div>
    </div>
    <p align="center">* Working towards certification</p>
    </div>
  </div>
</div>
<!-- Closes "linktext" div -->

</div>
<h3 align="center">Design Skills</h3>
<!-- Skill List 1 Title Goes Here-->
 
<div class="textdiv">
  <div class="container">
 <h5>Web Design</h5>
 <div class="progress">
 <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
 <span class="sr-only">40% Complete (success)</span>
 </div>
 </div>


  <h5>Graphic Design</h5>
  <div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
  <span class="sr-only">20% Complete</span>
  </div>
  </div>

  <h5>Logo Design</h5>
  <div class="progress">
  <div class="progress-bar progress-bar-average" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
  <span class="sr-only">60% Complete (warning)</span>
  </div>
  </div>

  </div>
</div>
    </div>
    <div class="col-xs-12 col-md-8">
      <h3 align="center">Free Estimate</h3>
      <form action="hire.php" method="post">
    <div class="form-group">
      <label>Full Name:</label>
    <input type="text" name="name" class="form-control" autocomplete="off"<?php echo isset($fields['name']) ? ' value="' . e($fields['name']) . '"' : '' ?>>
    </div>
    <div class="form-group">
      <label>Email:</label>
    <input name="email" type="email" class="form-control" autocomplete="off" <?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"' : '' ?>>
  </div>
      <div class="form-group">
      <label>Website Title:</label>
    <input type="text" name="websitetitle" class="form-control" autocomplete="off"<?php echo isset($fields['websitetitle']) ? ' value="' . e($fields['websitetitle']) . '"' : '' ?>>
    </div>
         <div class="form-group">
      <label>Estimated number of pages:</label>
    <input type="text" name="estimatedpages" class="form-control" autocomplete="off"<?php echo isset($fields['estimatedpages']) ? ' value="' . e($fields['estimatedpages']) . '"' : '' ?>>
    </div>
    <div class="form-group">
    <label>Website description:</label>
      <textarea name="websitedescription" rows="3" class="form-control" <?php echo isset($fields['websitedescription']) ? e($fields['websitedescription']) : '' ?>></textarea>
    </div>
  <div class="form-group">
    <label>Any extra details (eg. style, color, logo info):</label>
      <textarea name="extradetails" rows="3" class="form-control" <?php echo isset($fields['extradetails']) ? e($fields['extradetails']) : '' ?>></textarea>
    </div>
  <div class="g-recaptcha" data-sitekey="6LfASQYTAAAAAEshJ7q5e1EIksqZz_DXatwjY3Ma"></div>  <input type="submit" value="Send">
</form>
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