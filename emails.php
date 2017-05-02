<?php

$servername = "localhost";
$username = "agoraorg_steven";
$password = "Sab91892";
$dbname = "agoraorg_landingpage";
$value = $_POST['email'];

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO emails (email) VALUES ('$value')";
	$conn->exec($sql);
}
catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


?>



<head>
	<title>Thank you!</title>

	<link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
  <!-- Font Awesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">    
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
  <!-- Animate css -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main Style -->
  <link href="style.css" rel="stylesheet">

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
                <div class="header-bottom row">
                  <h1>We'll keep you posted!<h1>
                    <div class="contact-area">
                        <div class="send-area">
                          <button onclick="location.href = 'index.html'" class="send-btn">Take me back</button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- End header section --> 
      </body>
