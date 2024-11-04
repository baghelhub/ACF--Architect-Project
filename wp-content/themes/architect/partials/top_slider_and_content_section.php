<?php
   $wysiwyone = get_sub_field('wysiwyg_editor_content');
?>
    <section class="mm-talks-m">
        <div class="container">
            <div class="row">
                <div class="owl-carousel silder-m">
                    <?php while (have_rows('slider_image_repeater')): the_row();
                          $images = get_sub_field('images');  
                          if($images):  ?>
                        <div class="mm-talks-images-n">
                            <div class="mm-talks-images"> <img src="<?php echo $images['url'];?>"> </div>
                        </div>
                        <?php endif;
                       endwhile; ?>
                    </div>
                <?php if($wysiwyone): ?>
                    <div class="mm-talks-txt">
                        <?php echo $wysiwyone; ?>
                    </div>
                    <?php endif; ?>
             </div>
        </div>
    </section>