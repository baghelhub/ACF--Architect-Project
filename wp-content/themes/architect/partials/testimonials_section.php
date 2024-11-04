<?php
if (function_exists('get_sub_field')) {
    $smallheading = get_sub_field('small_heading');
    $mainheading = get_sub_field('main_heading');
    $buttonlink = get_sub_field('button_link');
    ?>
  <section class="testimonial-main wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="400ms">
        <div class="container">
            <div class="commitment-text">
                <?php if ($smallheading): ?>
                <h2><?php echo $smallheading; ?></h2>
                 <?php endif; ?>
                 <?php if ($mainheading): ?>
                <h3><strong><?php echo $mainheading; ?></strong></h3>
                <?php endif; ?>
            </div>
            <div class="row">
            <?php while (have_rows('testimonial_sides')):
                the_row();
                $image = get_sub_field('image');
                $wysiwygeditor = get_sub_field('wysiwyg_editor');
                $bottomboldheading = get_sub_field('bottom_bold_heading');
                $bottomheading = get_sub_field('bottom_heading');
                ?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="testimonial-text">
                         <?php if ($image): ?>
                        <img src="<?php echo $image; ?>">
                        <?php endif; ?>
                        <?php if ($wysiwygeditor): ?>
                        <p><?php echo $wysiwygeditor; ?></p>
                        <?php endif; ?>
                        <?php if ($bottomboldheading): ?>
                        <h2><?php echo $bottomboldheading; ?><span><?php echo $bottomheading; ?></span></h2>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
            endwhile; ?>
            </div>
        </div>  
        <?php if ($buttonlink): ?>
           <a href="<?php echo $buttonlink['title']; ?>" class="commitment-btn"><?php echo $buttonlink['title']; ?></a>
        <?php endif; ?>
    </section>
<?php
} ?>
