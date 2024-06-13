@php
    $loop->the_post();
    $default_post_thumbnail_image = '/wp-content/uploads/2020/10/missing_image.png';
    $postType = get_post_type_object(get_post_type());
@endphp
<div class="col-lg-4 mb-3 post-item-wrapper">
    <div class="card h-100">
        <div class="card-image-wrapper">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail("medium", ['class' => 'object-fit', 'loading' => 'lazy', 'style' => 'height: 160px']); ?>
            </a>
            <?php endif; ?>
            <div class="over-image-label">@php echo esc_html($postType->labels->singular_name) @endphp</div>
        </div>
        <div class="card-body">
            <a class="title-link" href="<?php the_permalink(); ?>">
                <h2 class="card-title">
                    <?php the_title(); ?>
                </h2>
            </a>
            <div class="card-text pb-3"><?php the_excerpt(); ?></div>
            <a class="card-cont-read" href="<?php the_permalink(); ?>">Continue Reading
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path fill="currentColor"
                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                </svg></a>
        </div>
    </div>
</div>
