<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>React - Bootstrap Theme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/compiled/theme.css">

	<!-- javascript -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="js/theme.js"></script>

	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body id="features">
	<header class="navbar navbar-inverse normal" role="banner">
  		<div class="container">
    		<div class="navbar-header">
		      	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
      			<a href="index.php" class="navbar-brand">BitSharesX</a>
    		</div>
    		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      			<ul class="nav navbar-nav">
      		
      				<li class="active dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Showcase <b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="features.php">Features</a></li>
							<li><a href="services.php">Services</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Pricing <b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="pricing.php">Pricing charts</a></li>
							<li><a href="charts.php">Comparison tables</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					More pages <b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="aboutus.php">About us</a></li>
							<li><a href="docs.php">API Documentation</a></li>
							<li><a href="support.php">Support</a></li>
							<li><a href="coming-soon.php">Coming Soon</a></li>
							<li><a href="signup.php">Sign Up & Sign In</a></li>
				        </ul>
        			</li>
        		
      			</ul>
      			<ul class="nav navbar-nav navbar-right visible-md visible-lg">
      				<li>
          				<a href="download.php" class="btn-success">Get the wallet!</a>
        			</li>
      			</ul>
    		</nav>
  		</div>
	</header>
