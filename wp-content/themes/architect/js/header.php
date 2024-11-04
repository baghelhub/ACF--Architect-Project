<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php echo wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?ver=<?php echo date('Ymis'); //comment, remove or set a static version in this line when launching the website ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style-responsive.css?ver=<?php echo date('Ymis'); //comment, remove or set a static version in this line when launching the website ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<header id="header">
    <!--Logo-Nav-Section-->
    <div class="logo-nav-strip">
        <div class="container d-flex">    
            <div class="logo"> 
                <a href="<?php get_site_url();?>">
                    <img src="<?php echo get_field('logo','options');?>" alt="logo">
                </a>
            </div>
            <div class="menu-wrap">
                <div class="nav-main">
                    <nav id='cssmenu'>
                        <div id="head-mobile"></div>
                        <div class="button"></div>
                        <?php
                            if (has_nav_menu('primary')) {
                                wp_nav_menu(
                                    array(
                                        'container'  => 'nav',
                                        'container_class' => 'menu-header',
                                        'container_id' => 'cssmenu',
                                        'theme_location' => 'primary',
                                    )
                                ); 
                            }
                        ?>
                    </nav>
                </div>
                <div class="login">    
                    <a href="tel:<?php echo get_field('contact_no','options');?>">
                        <img src="<?php echo get_field('contact_icon','options');?>" alt="icon"><?php echo get_field('contact_no','options');?>
                    </a>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
</header><!-- #header -->