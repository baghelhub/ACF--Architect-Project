<?php  
  if (function_exists('get_sub_field')) {  
            $smallheading = get_sub_field('small_heading');  
            $mainheading = get_sub_field('main_heading'); 
      ?>

    <section class="awards-main wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="400ms">
        <div class="container">
            <div class="commitment-text">
                    <?php if($smallheading): ?>
                       <h2><?php echo $smallheading; ?></h2>
                   <?php endif; ?>
                    <?php if($mainheading): ?>
                       <h3> <strong><?php echo $mainheading; ?></strong></h3>
                    <?php endif; ?>
               </div>
            <div class="awards-width">
                <div class="owl-carousel awards-slider">
                   <?php   while ( have_rows('award_slider_image') ) : the_row();
                             $sliderimage = get_sub_field('slider_image');   ?>
                     <div class="awards-in">
                        <div class="awards-in-image">
                            <?php if($sliderimage):  ?>
                               <img src="<?php echo $sliderimage['url']; ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php  endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
