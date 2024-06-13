@if (get_row_layout() == 'hero_banner')
    @if (get_sub_field('banner_type') == 'large-banner')
        @php $banner_class = "large-banner"@endphp
    @elseif (get_sub_field('banner_type') == 'medium-banner')
        @php $banner_class = "medium-banner" @endphp
    @elseif (get_sub_field('banner_type') == 'icon-banner')
        @php $banner_class = "icon-banner d-flex flex-column flex-lg-row" @endphp
    @endif
    <section id="block-hero-banner" class="hero-banner new in-page-section <?php echo $banner_class; ?>" data-section-name="">
        @if (get_sub_field('banner_type') == 'icon-banner')
        @else
            <div class="full-width-banner-cta">
                @php
                    $image = get_sub_field('background_image');
                    $size = 'full';
                @endphp
                @if ($image)
                    @php echo wp_get_attachment_image( $image, $size, "", ["class" => "object-fit", "loading" => "eager"]) @endphp
                @endif
            </div>
        @endif
        <div class="hero-block position-relative">
            <div class="ms-lg-3 hero-text p-5 my-lg-5 <?php echo $banner_class; ?>">
                @if (get_sub_field('banner_type') == 'icon-banner')
                    <img class="banner-icon me-3" src="<?php the_sub_field('icon'); ?>" alt="Mimeo header icon" />
                    <div class="d-flex flex-column">
                        <h1 class="mb-3"><?php the_sub_field('hero_title'); ?></h1>
                        <div class="hero-description mb-4">
                            @php the_sub_field('hero_description')@endphp
                        </div>
                        @php $link = get_sub_field('button') @endphp
                        @if ($link)
                            @php
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            @endphp
                            <div>
                                <a class="mt-2 btn btn-primary-gradient" href="<?php echo esc_url($link_url); ?>"
                                    target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            </div>
                        @endif
                    </div>
                @else
                    <h1 class="mb-3">
                        <?php the_sub_field('hero_title'); ?></h1>
                    <div class="hero-description mb-4">
                        <?php the_sub_field('hero_description'); ?>
                    </div>
                    @php $link = get_sub_field('button') @endphp
                    @if ($link)
                        @php
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        @endphp
                        <div>
                            <a class="mt-2 btn btn-primary-gradient" href="<?php echo esc_url($link_url); ?>"
                                target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </section>
    <section id="block-client-logos" class="block new clients-logos" style="background-color:  #f5f5f5;">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-lg-12">
                    <img loading="lazy" width="100" height="100" class="me-3" src="https://www.mimeo.com/wp-content/uploads/2022/03/sephora_logo_web.png" alt="sephora logo web" style="width: 100px;">
                    <img loading="lazy" width="100" height="100" class="me-3" src="https://www.mimeo.com/wp-content/uploads/2022/03/keybank_logo_web-1.png" alt="key bank logo" style="width: 100px;">
                    <img loading="lazy" width="100" height="100" class="me-3" src="https://www.mimeo.com/wp-content/uploads/2022/03/osha_logo_web-1.png" alt="osha logo web" style="width: 100px;">
                    <img loading="lazy" width="100" height="100" class="me-3" src="https://www.mimeo.com/wp-content/uploads/2022/03/bespoke_logo_web-1.png" alt="bespoke logo web" style="width: 100px;">
                    <img loading="lazy" width="100" height="100" class="me-3" src="https://www.mimeo.com/wp-content/uploads/2022/03/indeed_logo_web-1.png" alt="indeed logo" style="width: 100px;">
                    <img loading="lazy" width="100" height="100" class="me-3" src="https://www.mimeo.com/wp-content/uploads/2022/03/leica_logo_web-1.png" alt="leica logo web" style="width: 100px;">
                </div>
            </div>
        </div>
    </section>
@endif
