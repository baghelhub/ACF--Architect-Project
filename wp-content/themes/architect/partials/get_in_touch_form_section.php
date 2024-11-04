<?php
if (function_exists('get_sub_field')) {    
        $smallheading = get_sub_field('small_heading');
        $mainheading = get_sub_field('main_heading');
        $wysiwygeditor = get_sub_field('wysiwyg_editor');
?>
<section class="contact-us-main wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="400ms">
    <div class="container">
        <div class="commitment-text">
            <?php if($smallheading):?>
              <h2><?php echo $smallheading; ?></h2>
            <?php endif; ?>
            <?php if($mainheading):?>
              <h3><strong><?php echo $mainheading; ?></strong> </h3>
            <?php endif; ?>
        </div>
    </div>
    <div class="contact-us-width">
        <div class="inf_form">
            <?php if($wysiwygeditor):?>
              <?php echo $wysiwygeditor;  ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php } ?>
