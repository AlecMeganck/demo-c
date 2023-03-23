<div id="clients" class="wow clients">
    <div class="clients-title wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.4s">
        <h2><?php the_field('title'); ?></h2>
        <span>.</span>
    </div>
    <p class="clients-subtitle wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.5s"><?php the_field('subtitle'); ?></p>
    <p class="clients-info wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.5s"><?php the_field('info'); ?> <span><?php the_field('info_gold'); ?></span></p>
    <div class="clients-grid wow fadeInUp"  data-wow-duration="2s" data-wow-delay="0.6s">
        <?php
            $args = array(
                'post_type' => 'clients',
                'posts_per_page' => -1,
            );
            $loop = new WP_Query($args);
            while($loop->have_posts()): $loop->the_post();
        ?>
            <a href="">
                <div class="clients-item">
                    <div><?php the_post_thumbnail(); ?></div>
                </div>
            </a>
        <?php endwhile; wp_reset_query(); ?>
    </div>
    <a href="<?php the_field('cta_link'); ?>" class="clients-cta wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.4s">
        <p><?php the_field('cta'); ?></p>
        <i class="fas fa-solid fa-arrow-right"></i>
    </a>
</div>