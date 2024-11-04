<?php    
   if (function_exists('get_sub_field'))  {  
                $smallheading = get_sub_field('small_heading'); 
                $mainheading = get_sub_field('wysiwyg_editor_heading');
                $wysiwygeditorparagraph = get_sub_field('wysiwyg_editor_paragraph');  
                $buttonurl = get_sub_field('button_url'); 
         ?>
<div class="commitment-main">
    <div class="container">
        <div class="commitment-text">
            <?php if($smallheading): ?>
               <h2><?php  echo $smallheading; ?></h2>
            <?php endif; ?>
            <?php if($mainheading): ?>
               <h3><?php  echo $mainheading; ?></h3>
            <?php endif; ?>
            <?php if($wysiwygeditorparagraph): ?>
              <p><?php  echo $wysiwygeditorparagraph; ?></p>
            <?php endif; ?>
            <?php if($buttonurl): ?>
               <a href="<?php echo $buttonurl['url']; ?>" class="commitment-btn"><?php echo $buttonurl['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php  } ?>
