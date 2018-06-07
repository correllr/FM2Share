<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<meta name="description" content="FM2Share"/>
			<title>FM2Share</title>
			<?php wp_head(); ?>
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Roboto+Condensed" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>

<body <?php body_class(); ?>> 
				
<div class="container">

	<!-- site-header -->

	<header class="site-header">
		<div class="logobox">
			<div class="logo">
				<a href="<?php echo home_url(); ?>"><img src="/wp-content/uploads/2018/04/FM2_Logo_FM2Share_R_1000px.png" height="67" width="150" alt="Logo" /></a>
			</div>
			<div class="logobox-contact">
				<div class="logobox-app"><i class="fab fa-whatsapp fa-l"></i><p><a href="callto:0645575803" target="_blank"><p>06 45 57 58 03</a></p></div>
				<div class="logobox-mail"><i class="far fa-envelope"></i><p><a href="info@fm2share.nl" target="_blank"><p>info@fm2share.nl</a></p></div>
			</div>
		</div>
		
	<!-- navigation -->
	
	<span id='hamburger'><i class="fas fa-bars"></i></span>
	<span id='menuclose'><i class="far fa-window-close"></i></span>
	
			<nav class="site-nav">
			
				<div class="socialmenu">
					<div class="socialbutton social"><a href="https://twitter.com/fm2share" target="_blank"><i class="fab fa-twitter"></i></a></div>
					<div class="socialbutton social"><a href="https://www.linkedin.com/groups/4143899" target="_blank"><i class="fab fa-linkedin-in"></i></div>
				</div>
				<?php
					$args = array(
					'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
				
			</nav>
	<!-- /navigation -->
	
	</header>
	<!-- /site-header -->