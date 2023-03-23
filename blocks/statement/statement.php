<div class="wow statement">
    <?php if(get_field('is_it_gold') == true): ?>
        <h2 class="wow fadeInLeft statement-gold"  data-wow-duration="2s" data-wow-delay="0.4s"><?php the_field('title'); ?></h2>
    <?php endif; ?>
    <?php if(get_field('is_it_gold') == false): ?>
        <h2 class="wow fadeInRight statement-base"  data-wow-duration="2s" data-wow-delay="0.4s"><?php the_field('title'); ?> <span><?php the_field('title_gold'); ?></span></h2>
        <p class="wow fadeInRight statement-hashtag"data-wow-duration="2s" data-wow-delay="0.6s"><span>#</span><?php the_field('hashtag'); ?></p>
    <?php endif; ?>
</div>