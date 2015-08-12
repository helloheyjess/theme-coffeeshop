<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>

  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="header-bg" data-stellar-background-ratio="0.5">
    <div class="container">
      <?php wp_nav_menu( array(
        'container' => 'false',
        'theme_locations' => 'primary'
      )); ?>
      <div class="logo">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2><?php echo get_bloginfo ( 'description' ); ?></h2>
      </div>

    </div> <!-- /.container -->
  </div>
</header><!--/.header-->

