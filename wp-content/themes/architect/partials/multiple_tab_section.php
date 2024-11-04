<section class="service-wrapper">
        <div class="container">
            <div class="row">
                <div class="menu-wrapper">
                <?php $taburl = 1;  
                while ( have_rows('tab_content_repeater') ) : the_row(); 
                     $linktab = get_sub_field('link_tab'); ?>
                     <div class="menu-tab">
                         <a href="#tab<?php echo $taburl;?>"><?php echo $linktab['title']; ?></a>
                     </div>
                    <?php  $taburl++;  endwhile;  ?>
                 </div>
            </div>
        </div>
        <div class="container">
        <?php 
        $tabid = 1;
          while ( have_rows('tab_content_repeater') ) : the_row(); 
                     $mainheading = get_sub_field('main_heading');
                     $wysiwygeditorcontent = get_sub_field('wysiwyg_editor_content'); 
                     $image = get_sub_field('image');   ?>
           <div id="tab<?php echo $tabid; ?>" class="row"> 
               <?php if($image): ?>
                  <div class="col-lg-6">
                    <div class="service-img-wrap">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                </div>
                <?php endif; ?>
                <?php if($mainheading): ?>
                   <div class="col-lg-6">
                    <div class="service-text-wrap">
                            <h2><?php echo $mainheading; ?></h2>
                            <?php echo $wysiwygeditorcontent; ?>
                        </div>
                    </div>
                <?php endif; ?>
             </div>
            <?php
            $tabid++; 
           endwhile;  ?>
         </div>
    </section>

