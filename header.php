<?php
/**
*Header template for theme
*
*/
?>

<html>

<head>

<meta charset=" <?php bloginfo ( 'charset' ); ?> " />
<meta name="viewport" content="width=device-width" />

<title><?php bloginfo( 'name' ) ?> | <?php bloginfo( 'description' ) ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php  bloginfo( 'pingback_url' ); ?>" />
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<?php wp_head(); ?>

</head>

<body>

<div id="site-wrapper">

<header id="main-header">
	
   <img src="<?php echo get_template_directory_uri(); ?>/images/uta_logo_black.png" alt="UTA-logo" id="m-h-logo" >
   
   <nav id="m-h-menu">
   	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
   </nav>
   
   <nav id="m-h-socials">
   	<?php wp_nav_menu( array( 'theme_location' => 'social-menu' ) ); ?>
   </nav>
   
   <div id="m-h-hamburger">
   
      <span></span>
      <span></span>
      <span></span>
   
   </div>
    
</header> <!-- Main Header -->

<div id="m-h-mobile-menu" class="overlay">

	<nav>
    	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'social-menu' ) ); ?>
    </nav>

</div>

