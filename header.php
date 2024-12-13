<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Santive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Back-to-Top Button -->
<button id="back-to-top-btn">
    ↑
</button>



<div id="page" class="site">


<header id="masthead" class="site-header">
    <nav class="navbar navbar-expand-lg navbar-default fixed-top">
        <div class="container">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) :
                    ?>
                    
                    <?php
                else :
                    ?>
                    
                    <?php
                endif;
                $santive_description = get_bloginfo( 'description', 'display' );
                if ( $santive_description || is_customize_preview() ) :
                    ?>
                    
                <?php endif; ?>
            </div>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
        </div>
    </nav>
</header>