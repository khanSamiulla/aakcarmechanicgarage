<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package AAK
 * @subpackage aak_car_mechanic_garage
 * @since AAK CAR MECHANIC GARAGE
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin: 0 !important">
<head>
    <title><?php echo get_bloginfo('name')?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php wp_head(); ?> 
    <?php 
        $custom_logo = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo , 'full' );
      ?> 
</head>

<body <?php body_class(); ?>>
    <header class="mb-70">
        <nav class="navbar navbar-expand-sm bg-white navbar-dark fixed-top">
            <div class="container">
                <div>
                    <a class="navbar-brand" href="/aakcarmechanicgarage">
                        <img src="<?php echo $logo[0]; ?>" alt="Logo" class="img-fluid aak-logo">
                    </a>
                </div>
                <button class="navbar-toggler head-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
             <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary-header',
                        'theme_location'    => 'primary-header',
                        'menu_class'        => 'navbar-nav ml-auto',
                        'depth'             => 4,
                        'container'         => 'ul',
                        'list_item_class'   => 'nav-item',
                        'link_class'        => 'nav-link',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker()
                    
                            )
                    
                        );
                ?>    
             </div>

            </div>
        </nav>
    </header>