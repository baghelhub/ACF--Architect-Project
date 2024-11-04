<?php

if (function_exists('get_sub_field')) {  
            $mainheading = get_sub_field('main_heading');  
            $smallheading = get_sub_field('small_heading'); 
            $wysiwygeditor = get_sub_field('wysiwyg_editor'); 
            $contactnumber = get_sub_field('contact_number');
      ?>
<section class="contact-us-main contact-us-kh wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="400ms">
    <div class="container">
        <div class="contact-us-page">
            <?php if($mainheading): ?>
            <h2><?php echo $mainheading; ?></h2>
            <?php endif; ?>
             <p>
                <?php echo $smallheading; ?>
                <span>
                    <a href="<?php echo $contactnumber['url']; ?>"><?php echo $contactnumber['title']; ?></a>
                </span>
            </p>
        </div>
    </div>
    <div class="contact-us-width">
        <div class="inf_form">
            <?php if($wysiwygeditor): ?>
            <?php echo $wysiwygeditor; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php } ?>
