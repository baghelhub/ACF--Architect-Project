<?php  
    
    $mainheading = get_sub_field('main_heading');
    $smallheading = get_sub_field('small_heading');
    $bannerimage = get_sub_field('banner_image');

  ?>
    <section class="media-room">
        <div class="media-room-image">
            <?php if($bannerimage): ?>
              <img src="<?php echo $bannerimage; ?>" />
            <?php endif; ?>
            <div class="media-room-overlay"></div>
            <div class="container">
                <div class="media-room-text">
                    <?php if($mainheading): ?>
                      <h2><?php echo $mainheading; ?></h2>
                    <?php endif; ?>
                    <?php if($smallheading): ?>
                       <p><?php echo $smallheading; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
