<?php get_header(); 
if (function_exists('get_sub_field')) {  
    $image = get_field('image', 'option');
    $mainheading = get_field('main_heading', 'option');
    $smallheading = get_field('small_heading', 'option');
    $buttonlink = get_field('button_link', 'option');
    $wysiwygeditor = get_field('wysiwyg_editor', 'option');
?>
    <section class="media-room not-found">
        <div class="media-room-image">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">            
            <div class="media-room-overlay">
            </div>
            <div class="container">
                <div class="media-room-text">
                   <?php if($mainheading): ?>
                       <h2><?php echo $mainheading; ?></h2>
                    <?php endif; 
                    if($smallheading):  ?> 
                       <h5><?php echo $smallheading; ?></h5>
                    <?php endif; 
                    if($wysiwygeditor):  ?>
                       <p><?php echo $wysiwygeditor; ?></p>
                    <?php endif; 
                     if($buttonlink):  ?>
                       <a href="<?php echo $buttonlink['url']; ?>" class="error-btn">
                       <?php echo $buttonlink['title']; 
                    endif;  ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

<?php get_footer(); ?>

