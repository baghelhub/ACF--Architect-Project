<div class="tabs-main wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="400ms">
<div class="container">
  <div class="tabs-border"></div>
    <div class="tabs-top">
     <div id="tabs">
      <?php
      $tabCount = 1;
      while (have_rows('slider_tab_text')):
          the_row();
          $tabtitle = get_sub_field('tab_title');
            if ($tabtitle): ?>
                 <li class="<?php if ($tabCount == 1) { echo "active";  } ?>"><a href="#tab<?php echo $tabCount; ?>"><?php echo $tabtitle['title']; ?></a></li>
            <?php endif;
            $tabCount++;
      endwhile;
      ?>
       </div>
      <?php $tabbuttonlink = get_sub_field('tab_button_link'); ?>
         <?php if ($tabbuttonlink): ?>
            <div class="btn-tabed"><a href="<?php echo $tabbuttonlink['url']; ?>" class="btn-tabs"><?php echo $tabbuttonlink['title']; ?></a></div>
         <?php endif; ?>
     <div class="clr"> </div>
       <section id="tab-contents">
            <?php
            $idcount = 1;
            while (have_rows('slider_tab_text')):
                the_row(); ?>
                    <div id="tab<?php echo $idcount; ?>" class="tab-contents <?php if ($idcount == 1) { echo "active";} ?>">
            <?php $idcount++; ?>
           <div class="slider-width-ff">
              <div class="slider_sec_slider">
                <div class="owl-carousel slider-tr">
                <?php while (have_rows('tab_slider_image')):
                    the_row();
                    $sliderimages = get_sub_field('slider_images');
                    $sliderimagetext = get_sub_field('slider_image_text');
                    ?>       
                        <a href="#">
                    <div class="slider-img">
                  <?php if ($sliderimages): ?>
                     <img src="<?php echo $sliderimages; ?>" alt="">
                  <?php else:echo "";endif; ?>
                 <?php if ($sliderimagetext): ?>
                  <h2><?php echo $sliderimagetext; ?></span></h2>
               <?php else:echo "";endif; ?>
             </div>
           </a> 
           <?php endwhile; ?>
           </div>
        </div>
    </div>
    </div>
    <?php endwhile; ?>
  </section>
</div>
<div class="tabs-border-bottom"></div>
</div>
</div>
