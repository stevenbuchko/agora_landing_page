<?php

$email = $_POST['email'];
$name = $_POST['name'];
$thoughts = $_POST['thoughts'];
$to = "steven@agoraorg.com";

$subject = "New Email from $name";
$header = "From: $email\n";

mail($to,$subject,$thoughts,$header);

?>



<head>
  <title>Thank you!</title>

  <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
  <!-- Font Awesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap-new.css" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- Animate css -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main Style -->
  <link href="style3.css" rel="stylesheet">

  <!-- Fonts -->

  <!-- Open Sans for body font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!-- Cabin for Title -->
  <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
  <!-- Pacifico for Logo   -->
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>



<body>
  <!-- Start header section -->
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="assets/images/header-bg.jpg" alt="img">
      <div class="overlay">
        <div class="header-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                      <div class="header-top">
                          <!-- Start logo area -->
                          <div class="logo-area">
                            <!-- Image based logo -->
                            <a class="logo" href="http://agoraorg.com"><img src="assets/images/logo_white_png_small.png" alt="logo"></a>
                            <!-- Text based logo -->
                            <!-- <a class="logo" href="index.html">App Landy.</a> -->
                          </div>
                          <!-- End logo area -->
                      </div>
                <div class="header-bottom row" style="margin-top:60px;">
                  <h2>Thanks for your input!<h2>
                    <div class="contact-area">
                        <div class="send-area">
                          <button onclick="location.href = 'http://www.agoraorg.com'" class="send-btn thank">Take me back</button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- End header section -->
      </body>
