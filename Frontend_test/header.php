<!DOCTYPE html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php wp_head(); ?>
</head>
<body  class="d-flex flex-column min-vh-100 <?php body_class(); ?>">
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-1">
                    <div class="header__logo">
                    <?php site_logo(); ?>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-11">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container-fluid"> 
                    <div class="row">
                <div class="col-xl-8 col-lg-9">   
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                                
                             <div class="collapse navbar-collapse" id="main-menu">            
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav mr-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            </div>
            </div>
            </div>
            <div class="col-xl-4 col-lg-3">             
             <div class="header__right">
                        <div class="header__right__auth">
                            <a class="logIn" href="#">Log In</a>
                            <a class="signup" href="#">Sign up</a>
                        </div>                        
                    </div> 
                    </div>
                    </div>            
           </nav>                       
      </div>                       
    </div>
    </header>
    <!-- Header Section End -->


    