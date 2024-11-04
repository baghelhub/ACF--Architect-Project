<?php
    if (function_exists('get_sub_field')) {    
            $smallheading = get_sub_field('small_heading');
            $mainheading = get_sub_field('main_heading');
            $mainheadingimage = get_sub_field('main_heading_image');
    ?>
    <div class="instagram-main">
        <div class="commitment-text">
            <h2><?php echo $smallheading; ?></h2>
            <h3>
                <?php if($mainheadingimage): ?>
                <img src="<?php echo $mainheadingimage; ?>" />
                <?php endif; ?>
                <strong><?php echo $mainheading; ?></strong>
            </h3>
        </div>
        <div class="column_detail">
            <div class="owl-carousel our-silder">
                <?php   while ( have_rows('slider_image') ) : the_row();
                $images = get_sub_field('images'); ?>
                <div class="column_sec">
                    <?php if($images): ?>
                    <img src="<?php echo $images; ?>" alt="" />
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
   <?php } ?>
