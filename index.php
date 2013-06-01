<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="no-js"> <!-- <![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Change This Title</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link href="styles/style.css" rel="stylesheet">
  <script src="scripts/vendor/modernizr-2.6.1.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->
  <div class="container wrapper" id="container">
    <div class="grid">
      <div class="grid__cell">
        <h1>Hi.</h1>
        <p>I'm Boilerplate Mark V …</p>
        <?php
        	print ("<h2>");
        	print ("and I can do PHP.");
        	print ("</h2>");
        
        	$sayit = "I Love Cheese!";
        
        	print ("<p>");
        	print ("When I eat Nachos I want to say $sayit");
        	print ("</p>");
        
        	$sayit = "I Miss Cheese …";
        
        	print ("<p>");
        	print ("When I don't eat Nachos I want to say $sayit");
        	print ("</p>");
        ?>
      </div>
    </div>
  </div>
  <div class="grid-overlay"></div>
  <script>window.jQuery || document.write('<script src="scripts/vendor/jquery-1.8.0.min.js"><\/script>')</script>
  <script src="scripts/scripts.min.js"></script>
</body>
