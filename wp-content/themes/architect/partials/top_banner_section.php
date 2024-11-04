<?php   
if (function_exists('get_field')) { 
        $bannervideo = get_sub_field('banner_image_video'); 
    ?>
<div class="banner">
    <?php if($bannervideo): ?>
    <video muted autoplay loop poster="" id="html5-video" class="fill">
        <source src="" type="video/webm" />
        <source src="<?php echo esc_url($bannervideo); ?>" type="video/mp4" />
    </video>
    <?php else: echo ""; endif; ?>
    <div class="overlay-detail"></div>
</div>
<?php } ?>
