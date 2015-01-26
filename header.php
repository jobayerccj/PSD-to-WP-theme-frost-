<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title('|', true, 'right'); ?></title>  
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php esc_url( get_template_directory_uri() ); ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container-fluid" style="overflow-x: hidden;">
        <header>
            
                <div class="row" style="background: #2e2e2e;height: 66px;">
                    <div class="col-md-4 text-center col-sm-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.jpg" alt="logo">

                    </div>
                    <div class="col-md-8 col-sm-9">
                        <nav class="navbar navbar-default top-menu" role="navigation">
                            <div class="container-fluid " >
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                 <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                      </button>
                                      
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <?php 
                                  
                                  $defaults = array(
                                        'theme_location' => 'header-menu',                                       
                                        'container'       => false,                                        
                                        'menu_class'      => 'nav navbar-nav top-menu2'                                                                         
                                    );
                                  
                                  wp_nav_menu( $defaults );  
                                  ?>
<!--                                    <ul class="nav navbar-nav top-menu2">
                                      <li ><a href="#">HOME </a></li>
                                        <li><a href="#">SERVICES</a></li>
                                        <li><a href="#">PORTFOLIO</a></li>
                                        <li><a href="#">ABOUT</a></li>
                                        <li><a href="#">CONTACT</a></li>
                                        <li><a href="#">FEATURES</a></li>
                                        <li><a href="#" class="menu-last">BLOG</a></li>
                                  </ul>-->
                                </div>  
                            </div>	
                        </nav>

                    </div>
                </div>
            
        </header>