<?php  
                $headelogo = get_field('header_logo', 'option');
            $contacticon = get_field('contact_icon', 'option');  
        $contactnumber = get_field('contact_number', 'option');
 ?>

    <head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font/stylesheet.css">
  </head>

 <body>
 <div class="logo-nav-strip">
   <div class="container d-flex">    
      <div class="logo">
               <?php
                    if ($headelogo) :
                    ?>
                     <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($headelogo); ?>" alt="Logo"></a>
                    <?php else : ?>
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/default-logo.png" alt="Logo"></a>
                    <?php endif; ?>
                </div>
        <div class="menu-wrap">
   <div class="nav-main">
<nav id="cssmenu">
   <div id="head-mobile"></div>
     <div class="button"></div>
      <?php wp_nav_menu(array(
            'theme_location' => 'menu-1', 
                'container' => false, 
                'menu_class' => 'cus-header-menu', 
                'depth' => 3, 
                ));
             ?>
        </nav>
      </div>
        <div class="login"> 
        <a href="tel:<?php echo $contactnumber['title']; ?>">  
          <?php if($contacticon)  {   ?>  
         <img src="<?php echo $contacticon; ?>">     
         <?php  }  ?>
        <?php echo $contactnumber['title']; ?> </a></div>
            <div class="clr"></div>
         </div>
     </div>
    </div>
<body>