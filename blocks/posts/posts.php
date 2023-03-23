<div class="wow posts">
    <div class="posts-title wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.4s">
        <h2><?php the_field('title'); ?></h2>
        <span>.</span>
    </div>
    <p class="posts-desc wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.5s"><?php the_field('description'); ?></p>
    <div class="posts-row wow fadeInRight"  data-wow-duration="2s" data-wow-delay="0.6s">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
            );
            $loop = new WP_Query($args);
            while($loop->have_posts()): $loop->the_post();
        ?>
            <a href="">
                <div class="posts-item">
                    <div class="posts-item-image"><?php the_post_thumbnail(); ?></div>
                    <div class="posts-item-info">
                        <p class="posts-item-info-title"><?php the_title(); ?></p>
                        <div class="posts-item-info-cta">
                            <p>Lees meer</p>
                            <i class="fas fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        <?php endwhile; wp_reset_query(); ?>
        <div class="posts-row-fade"></div>
    </div>
    <a href="<?php the_field('cta_link'); ?>" class="posts-cta wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.4s">
        <p><?php the_field('cta'); ?></p>
        <i class="fas fa-solid fa-arrow-right"></i>
    </a>
</div>