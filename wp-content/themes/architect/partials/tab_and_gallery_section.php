<?php
// $args = array(
//     'post_type' => 'post', // Post type (e.g., 'post', 'page', 'custom_post_type')
//     'posts_per_page' => -1 // -1 to get all posts
// );

// $query = new WP_Query($args);

// if ($query->have_posts()) {
//     while ($query->have_posts()) {
//         $query->the_post();
//         the_title('<h2>', '</h2>');
//         the_excerpt();
//     }
// } else {
//     echo 'No posts found';
// }

// // Restore original post data
// wp_reset_postdata();


// die;





    $categories = get_terms( array(
      'taxonomy' => 'category',
      'hide_empty' => false, 
    ) );
?>
<section class="portfolio-tabs-top">
<div class="container">
    <div class="potfolio-menu-li">
        <ul>
        <?php
         if ( ! empty( $categories ) && ! is_wp_error( $categories ) ):   
        foreach ( $categories as $category ):  ?>
           <li><a href="<?php get_term_link( $category ); ?>"><?php echo $category->name; ?></a></li> 
        <?php endforeach;
            else:  echo 'No categories found.';  
          endif;  ?>
        </ul>
     </div>
    <div class="tab-content">
     <div class="tab-pane fade show active" id="profolio1">
       <div class="portfolio-main-1">
       <?php while ( have_rows('image_and_content') ) : the_row(); 
            $image = get_sub_field('image');
              $mainheading = get_sub_field('main_heading');
               $smallheading = get_sub_field('small_heading');
             ?>
         <div class="portfolio-box">
           <div class="portfolio-img">
             <img src="<?php echo $image; ?>">
              </div>
             <div class="portfolio-textp">
              <?php if($mainheading):?>
                  <h2><?php echo $mainheading; ?></h2>
                <?php endif;
                 if($mainheading):?>
                <p><?php echo $smallheading; ?></p>
             <?php endif; ?>
        </div>
     </div>
  <?php endwhile; ?>
      </div>
    </div>
   </div>
  </div>
</section>
