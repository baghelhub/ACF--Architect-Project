<?php
if (function_exists('get_sub_field')) {    
        $smallheading = get_sub_field('small_heading');
        $mainheading = get_sub_field('main_heading');
        $wysiwygeditor = get_sub_field('wysiwyg_editor');
?>
<section class="subcribe-main">
    <div class="subcribe-bg">
        <div class="container">
            <div class="commitment-text">
                <?php if($smallheading): ?>
                   <h2><?php  echo $smallheading; ?></h2>
                <?php endif; ?>
                <?php if($mainheading): ?>
                  <h3><strong><?php  echo $mainheading;?></strong></h3>
                <?php endif; ?>
            </div>
            <div class="subcribe-two">
                <?php if($wysiwygeditor): ?>
                <?php echo $wysiwygeditor; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
