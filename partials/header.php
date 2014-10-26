<?php include( "partials/lang.php" ); ?>
<!doctype html>
<html lang="<?=$lang?>">
 <head>
  <meta charset="UTF-8">
  <title><?=$translate[$lang]["title"]?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Main theme styles (LESS COMPILED CSS VERSION)
    Comment out if using css only version -->
  <!--<link href="css/styles.css" rel="stylesheet"> -->
  <!-- Main theme styles (CSS VERSION ONLY).
       Uncomment line below to use and comment out styles.css above. -->
   <link href="css/main.css" rel="stylesheet">
  <!-- Animation styles -->
  <link href="css/animate.min.css" rel="stylesheet">
  <!-- Icon styles (Font Awesome) -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/btsx.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/animation.css"><!--[if IE 7]><link rel="stylesheet" href="css/btsx-ie7.css"><![endif]-->
  <!-- Google Fonts -->
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
   <script src="js/html5.js"></script>
  <![endif]-->
  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  <?php
  if (stripos($_SERVER['REQUEST_URI'], 'about')){
   echo '  <!-- Google map -->';
   echo '  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>';
  }?>
 </head>

<?php
if (stripos($_SERVER['REQUEST_URI'], 'about')){
 echo '	<body class="about"  data-spy="scroll" data-target=".navbar" data-offset="53" style="width: 100%;overflow-x: hidden;">';
} else {
 echo ' <body class="home" data-spy="scroll" data-target=".navbar" data-offset="53">';
}



// Force HTTPS for security
if($_SERVER["HTTPS"] != "on") {
 $pageURL = "Location: https://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
 }
 header($pageURL);
}

