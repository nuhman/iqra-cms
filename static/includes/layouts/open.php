<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>	<title>Iqra<?php
		if($layout_context === 'public') {
			echo ' ';
		}
		else{ echo '- Admin';
		}
		?>
	</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="static/styles/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="static/styles/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="static/styles/mystyle.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<nav class="white" role="navigation">
		<div class="nav-wrapper container">
		  <a id="logo-container" href="index.php" class="brand-logo">iQra<?php
			if($layout_context === 'public') echo ' ';
			else{ echo ' - admin'; }
			?>
			</a>
		  <ul class="right hide-on-med-and-down">
		  <?php if($layout_context === 'public'){ ?>
			<li><a href="signup.php">Sign Up</a></li>
			<li><a href="login.php">Log In</a></li>
			<li><a href="display_all.php">Read</li>
		  <?php } 
			else{
		  ?>		  
		  <li><a href="admin.php">Menu</a></li>		  
		  <li><a href="logout.php">Logout</a></li>		  
			<?php } ?>
		  </ul>

		  <ul id="nav-mobile" class="side-nav">
		  <?php if($layout_context === 'public'){ ?>
			<li><a href="login.php">Log In</a></li>
			<li><a href="dispaly_all.php">Read</li>
			<?php } 
			else{
		  ?>		  
		  <li><a href="admin.php">Menu</a></li>		  
		  <li><a href="logout.php">Logout</a></li>		  
			<?php } ?>
		  </ul>
		  
		  
		  <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
		</nav>
		
	
	
