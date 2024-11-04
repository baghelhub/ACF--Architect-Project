
<?php   
    $image = get_sub_field('image');
    $imagetext = get_sub_field('image_text'); 
    ?>
    <section class="media-room">
        <div class="media-room-image">
           <?php if($image): ?>
           <img src="<?php echo $image; ?>">
            <?php else: echo "Please Add Image"; endif; ?>
            <div class="media-room-overlay"></div>
            <div class="container">
            <div class="media-room-text">
            <h2><?php echo $imagetext;?></h2>
            </div>
        </div>
     </section>
            

   