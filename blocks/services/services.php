<div id="services" class="wow services">
    <div class="services-title wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.4s">
        <h2><?php the_field('title'); ?></h2>
        <span>.</span>
    </div>
    <p class="services-desc wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.5s"><?php the_field('description'); ?></p>
    <?php
        $args = array(
            'post_type' => 'services',
        );
        $loop = new WP_Query($args);
        while($loop->have_posts()): $loop->the_post();
    ?>
        <a href="">
            <div class="services-list wow fadeInRight"  data-wow-duration="2s" data-wow-delay="0.6s">
                <div><?php the_post_thumbnail(); ?></div>
                <p><?php the_title(); ?></p>
                <i class="fas fa-solid fa-arrow-down"></i>
            </div>
        </a>
    <?php endwhile; wp_reset_query(); ?>
</div>