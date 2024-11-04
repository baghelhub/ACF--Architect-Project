<?php
$mainheading = get_sub_field('main_heading');
$wysiwygeditor = get_sub_field('wysiwyg_editor');
 ?>
<section class="terms-conditions-m">
<div class="container">
<div class="row">
 <div class="terms-conditions-text">
    <?php if($mainheading): ?>
       <h2><?php echo $mainheading;?></h2>
   <?php endif; ?>
    <?php echo $wysiwygeditor;?>
 </div>
</div> 
</div>
</section>
