<div class="contact-fd">
 <div class="container">
        <div class="row">
          <?php  while ( have_rows('heading_and_image') ) : the_row(); 
                $wysiwygeditorheading = get_sub_field('wysiwyg_editor_heading');
                $image = get_sub_field('image');   ?>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="map-33">
                    <?php if($wysiwygeditorheading):?>
                    <div class="flex-text">
                        <?php echo $wysiwygeditorheading; ?>
                    </div>
                    <?php endif;?>
                      <?php if($image): ?>
                         <div class="contact-img-1"> 
                         <img src="<?php echo $image; ?>" />
                    </div>
                    <?php  endif; ?>
                </div>
            </div>
            <?php
           $couimg++;
          endwhile; ?>
        </div>
     </div>
</div>
