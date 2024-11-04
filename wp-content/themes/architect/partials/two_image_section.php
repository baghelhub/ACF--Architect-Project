<?php    
   if (function_exists('get_sub_field'))  {    
            $imageleft = get_sub_field('image_left');
            $imageright = get_sub_field('image_right');  
     ?>

  <!-- Dynamic Value Assign in HTML -->
        <section class="two-main">
            <div class="container">
                <div class="two-image-section">
                    <div class="two-image wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="400ms">
                        <?php  if($imageleft): ?>
                        <img src="<?php echo $imageleft; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="two-image wow fadeInRight animated" data-wow-duration="1000ms" data-wow-delay="400ms">
                        <?php if($imageright):?>
                        <img src="<?php echo $imageright; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
   <?php  } ?>
