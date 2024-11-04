<?php  
    $heading = get_sub_field('heading');
    $mainheading = get_sub_field('main_heading'); 
    $wysiwygeditor = get_sub_field('wysiwyg_editor');
    $image = get_sub_field('image');
   ?>
   
    <div class="imagecont-callout">
        <div class="imagecont-callout__inner">
            <div class="imagecont-callout__content">
                <div class="imagecont-callout__conbox wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay=".2s">
                    <div class="imagecont-callout__title">
                        <h2> <?php echo $heading; ?><span> <?php echo $mainheading; ?> </span></h2>
                    </div>
                    <?php if($wysiwygeditor): ?>
                    <p><?php echo $wysiwygeditor; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="imagecont-callout__image">
                <?php if($image): ?>
                <img src="<?php echo $image;  ?>" alt="" title="" />
                <?php endif; ?>
            </div>
        </div>
    </div>
