<?php 
if (function_exists('get_sub_field')) {    
    $footerlogo = get_field('footer_logo', 'option');
    $smalllogo = get_field('small_logo', 'option');
    $heading = get_field('heading', 'option');
    $address = get_field('address', 'option');
    $phone = get_field('phone', 'option');  
    $heading2 = get_field('heading2', 'option');
    $heading3 = get_field('heading3', 'option'); 
    $wysiwyg_form = get_field('wysiwyg_editor', 'option');
    $wysiwygeditoraddress = get_field('wysiwyg_editor_address', 'option');
    $copyright_left = get_field('copyright_left', 'option');  
    $copyright_right = get_field('copyright_right', 'option');  
    $copyright_right_image = get_field('copyright_right_image', 'option');  
  ?>

<section class="footer-main">
 <div class="container">
 <div class="row">
 <div class="col-lg-4 col-md-6 col-sm-6">
 <div class="footer-img">
 <?php
    if ($footerlogo) :
          ?>
          <a href="<?php echo home_url(); ?>"><img src="<?php echo $footerlogo; ?>" alt="Logo"></a>    
               <?php else : ?>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="Logo"></a>
          <?php endif; 
          if($smalllogo): ?>
      <a href="<?php echo home_url(); ?>"><img src="<?php echo $smalllogo; ?>" alt="Logo"></a>
      <?php else : ?>
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="Logo"></a>
      <?php endif ?>
      </div>
      </div>
   <div class="col-lg-2 col-md-6 col-sm-6">
    <div class="footer-text">
    <?php
         wp_nav_menu(array(
            'theme_location' => 'footer-2', 
                'container' => false, 
                'menu_class' => 'footer-2-menu', 
                'depth' => 3, 
                ));
             ?>
      </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="footer-text">
     <?php
         wp_nav_menu(array(
            'theme_location' => 'footer-1', 
                'container' => false, 
                'menu_class' => 'footer-1-menu', 
                'depth' => 3, 
                ));
            ?>
      </div>
  </div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="footer-text"> 
<ul>
 <li><a href="" class="foonter-colr"><?php echo $heading; ?></a></li>   
 <li><?php echo $address; ?></li>
 <li><a href=""><?php echo $phone; ?></a></li>
 <li><a href="" class="foonter-colr"><?php echo $heading2; ?></a></li>
<li>
<div class="flex-text">
<?php
  while ( have_rows('social_icons', 'option') ) : the_row();
        $media_icons = get_sub_field('media_icons');
        $media_link = get_sub_field('media_link');
    ?>
    <img href="<?php $media_link ?>" src="<?php echo $media_icons; ?>">
    <?php     
    endwhile;
   ?>
</div>
</li>
<li><a href="" class="foonter-colr"><?php echo $heading3; ?></a></li>
</ul>
   <div class="footer-subcribe-two">
        <?php echo $wysiwyg_form; ?>
    </div>
</div>
</div>
<div class="col-lg-12">
    <div class="footer-text-1">
<p><?php echo $wysiwygeditoraddress; ?></p>
</div>
    </div>
    <div class="footer-bottom"> 
    <h3 class="m-b"><a href=""><?php echo $copyright_left; ?></a></h3> 
    <h3><a href=""><?php echo $copyright_right; ?> <img src="<?php echo $copyright_right_image; ?>"></a></h3>
   </div>
  </div>
</div>
</section>
<?php } ?>
<!-- Js Files  -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js "></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/animation.js "></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

