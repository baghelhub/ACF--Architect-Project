<?php
$mainheading = get_sub_field("main_heading"); ?>
   <section class="about-left-right-main">
    <h2><?php echo $mainheading; ?></h2>
    <div class="container">
    <div class="about-left-right-image-section">
     <?php while (have_rows("image_heading_and_content")):
        the_row();
        $image = get_sub_field("image");
        $smallheading = get_sub_field("small_heading");
        $wysiwyg_editor = get_sub_field("wysiwyg_editor");
        $wysiwygheading = get_sub_field("wysiwyg_editor_heading");
        $wysiwygparagraph = get_sub_field("wysiwyg_editor_paragraph");
        ?>
            <div class="about-left-right-image wow fadeInLeft animated"
                data-wow-duration="1000ms"
                data-wow-delay="400ms">
                    <?php if ($image): ?>
                        <img src="<?php echo $image; ?>">
                    <?php endif; ?>
                    <?php if ($wysiwyg_editor): ?>
                <div class="abt-img"> <?php echo $wysiwyg_editor; ?></div>
                          <?php endif; ?>
                    <?php if ($smallheading): ?>
                <h3><?php echo $smallheading; ?></h3>
                      <?php endif; ?>
                   <?php if ($smallheading): ?>
                <div class="abt-three"> <?php echo $wysiwygheading; ?></div>
                  <?php endif; ?>
                  <?php if ($smallheading): ?>
               <?php echo $wysiwygparagraph; ?>
                  <?php endif; ?>
            </div>
       <?php
    endwhile; ?>
    </div>
    </div>
</section>




