<section class="faq-main">
    <div class="container">
        <div class="acc-width">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php
                if ( have_rows('faq_content_repeater') ) :
                    $idcount = 1;
                    while ( have_rows('faq_content_repeater') ) : the_row(); 
                        $questionheading = get_sub_field('question_heading');
                        $wysiwygeditor = get_sub_field('wysiwyg_editor_content'); ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne<?php echo $idcount; ?>">
                        <?php if($questionheading): ?>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $idcount; ?>" aria-expanded="false" aria-controls="flush-collapseOne<?php echo $idcount; ?>">
                            <?php echo $questionheading; ?>
                        </button>
                        <?php endif; ?>
                    </h2>
                    <?php if($wysiwygeditor): ?>
                    <div id="flush-collapseOne<?php echo $idcount; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne<?php echo $idcount; ?>" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $wysiwygeditor; ?></div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php 
                    $idcount++;
                    endwhile; 
                 endif; ?>
            </div>
        </div>
    </div>
</section>
