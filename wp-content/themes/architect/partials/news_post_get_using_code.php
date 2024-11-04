<section class="media-room-main">
    <div class="container">
        <div class="row">
            <div class="col-sd">
                <?php
     $args = array(
     'post_type' =>
                'post', 'posts_per_page' => -1 ); $news_posts = new WP_Query($args); if($news_posts->have_posts()): while($news_posts->have_posts()): $news_posts->the_post(); $post_id = get_the_ID(); $post_title = get_the_title();
                $post_content = get_the_content(); $post_link = get_permalink(); $featured_image_url = get_the_post_thumbnail_url(); ?>
                <div class="media-room-box">
                    <div class="media-room-img">
                        <img src="<?php echo $featured_image_url; ?>" />
                    </div>
                    <div class="media-room-textp">
                        <h2><?php echo $post_title; ?></h2>
                        <p><?php echo $post_content; ?></p>
                        <a href="<?php echo $post_link; ?>" class="commitment-btn">Read more</a>
                    </div>
                </div>
                <?php  
             endwhile; wp_reset_postdata();  endif;
             ?>
            </div>
        </div>
    </div>
</section>
