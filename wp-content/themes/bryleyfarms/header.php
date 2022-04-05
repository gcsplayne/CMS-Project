<?php
/**
 * The header.
 *
 * This file displays the head section

 */

?>
<!doctype html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name ="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
	<!-- custom css -->
	<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/bryleyfarms/assets/css/custom-css.css')) ?>">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/bryleyfarms/assets/bootstrap/dist/css/bootstrap.min.css')) ?>">
<!-- link to custom css -->

<!-- bootstrap js -->
<script type="text/javascript" href="<?php echo esc_url(home_url('wp-content/themes/bryleyfarms/assets/bootstrap/dist/js/bootstrap.js')) ?>"></script>
<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
</head>
<!-- define header row -->
<body<?php body_class(); ?>>

		
		
	
<header> 
	<nav class="navbar navbar-expand-lg bg-light navbar-light"  role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
    <span class="navbar-toggler-icon"></span>
</button>
    <a class="navbar-brand" href="<?php echo esc_url(home_url('')); ?>">
   
	<img src="<?php echo esc_url(home_url('wp-content/themes/bryleyfarms/assets/images/logo1.png')); ?>" alt="logo" height="150" width="150"></a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 3,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
</header>
	

