<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package midterm
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_enqueue_script("jquery"); ?>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'midterm' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'midterm' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">


	<head>
	<title>More Practice with jQuery</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<style>
body {
	background-color: none;
}
	#redDiv{
		display: inline-block;
		background-color: red;
		width: 200px;
		height: 200px;
		margin-top: 80px
	}	
	#blueDiv{
		display:inline-block;
		margin-left: 40px;
		background-color: blue;
		width: 200px;
		height: 200px;
		margin-top: 80px;
	}

	#myCounter{
		font-size: 5em;
	}

	#contentWrapper{
		background-color: #A19EAD;
		width: 600px;
		height: 600px;
		margin-left: auto;
		margin-right: auto;

	}

	</style>
</head>
<body>
	<div id="pageWrapper">
		<div id="contentWrapper">


			
				
			<div id="myCounter"> </div>
			
			<div id="redDiv">
				<p> Click me to count Up</p>

			</div>

			<div id="blueDiv">
				<p> Click me to count Down</p>

			</div>
			

			


		</div>
	</div>
<script type="text/javascript">
		jQuery(document).ready(function(){
 
		var counter = 0;

		

		jQuery('#redDiv').on('click',function(){
			counter++;
			jQuery('#myCounter').html(counter);
		});

		jQuery('#blueDiv').on('click',function(){
			counter--;
			jQuery('#myCounter').html(counter);
		});


	});// document ready




</script>