<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Welcome <?php echo $this->session->userdata('fname'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link  href="<?php echo BASE_URL; ?>/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo BASE_URL; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo BASE_URL; ?>/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo BASE_URL; ?>/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo BASE_URL; ?>/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo BASE_URL; ?>/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/uploadify.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo BASE_URL; ?>/css/custom.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo BASE_URL; ?>/home"> <img alt="icuracao" src="<?php echo BASE_URL; ?>/img/logo.png" /> </a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"><?php echo $this->session->userdata('fname');echo " ".$this->session->userdata('lname'); ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo BASE_URL; ?>/logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a class="ajax-link" href="<?php echo BASE_URL; ?>/home"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li><li><a class="ajax-link" href="<?php echo BASE_URL; ?>/home/add"><i class="icon-search"></i><span class="hidden-tablet"> Add New Department</span></a></li><li><a class="ajax-link" href="<?php echo BASE_URL; ?>/home/upload"><i class="icon-search"></i><span class="hidden-tablet"> Upload File</span></a></li>
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->