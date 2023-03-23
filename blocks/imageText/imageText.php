<div id="" class="wow image-text">
    <h2 class="wow fadeInLeft"  data-wow-duration="2s" data-wow-delay="0.6s"><?php the_field('title'); ?></h2>
    <a class="wow fadeInLeft image-text-cta"  data-wow-duration="2s" data-wow-delay="0.6s" href="<?php the_field('cta_link'); ?>"><?php the_field('cta'); ?> <i class="fas fa-solid fa-arrow-right"></i></a>
    <?php 
    $image = get_field('image');
    if( !empty( $image ) ): ?>
        <div class="wow fadeIn image-text-image">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <div class="image-text-image-fadeUp"></div>
            <div class="image-text-image-fadeBottom"></div>
        </div>
    <?php endif; ?>
    <?php if(get_field('show_extern_cta_info') == true): ?>
        <div class="wow fadeInRight image-text-cta-extern"  data-wow-duration="2s" data-wow-delay="0.6s">
            <div class="image-text-cta-extern-title">
                <p><?php the_field('taxonomy_title'); ?></p>
                <svg xmlns="http://www.w3.org/2000/svg" width="22.13" height="22.142" viewBox="0 0 22.13 22.142">
                    <g id="Group_21" data-name="Group 21" transform="translate(0.5 0.5)">
                        <path id="Path_12" data-name="Path 12" d="M0,0V16.646H.765V.765H16.646V0Z" fill="#c1a360" stroke="#c1a360" stroke-width="1"/>
                        <path id="Path_13" data-name="Path 13" d="M27.6,11.753V27.634H11.721V28.4H28.368V11.753Z" transform="translate(-7.238 -7.258)" fill="#c1a360" stroke="#c1a360" stroke-width="1"/>
                    </g>
                </svg>
                <span><?php the_field('taxonomy'); ?></span>
            </div>
            <a class="wow fadeInLeft image-text-cta" href="<?php the_field('extern_cta_link'); ?>"><?php the_field('extern_cta_label'); ?> <i class="fas fa-solid fa-arrow-right"></i></a>
        </div>
    <?php endif; ?>
</div>