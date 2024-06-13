@if (get_row_layout() == 'hero_banner_lp_dark')
    @php
        $background_image = get_sub_field('background_image');
        $logo_image = get_sub_field('logo_image_lp');
        $show_logos_below_hero = get_sub_field('show_logos_below_hero');
        $linear_gradient_background = get_sub_field('linear_gradient_background');
        $image = get_sub_field('image');
        $responsive_image = get_sub_field('responsive_image');
    @endphp

    <section class="banner new hero-banner hero-banner-dark hero-banner-form">
        @if ($background_image)
            @php
                $url = $background_image['url'];
                $alt = $background_image['alt'];
            @endphp
            <div class="full-width-banner" style="background-image:url({{ esc_url($background_image['url']) }});"></div>
        @endif
        <div class="container-1320 header-container mob-header">
            <div class="row row-eq-height p-0 m-0">
                <div class="col-md-6 hero-text px-xs-4 px-s-5 pt-5 pb-md-5 px-md-4 my-lg-5">
                    @if ($logo_image)
                        @php
                            $logo_url = $logo_image['url'];
                            $logo_alt = $logo_image['alt'];
                        @endphp
                        <img class="hero-logo-image" src="{{ esc_url($logo_url) }}" alt="{{ esc_attr($logo_alt) }}" />
                    @endif

                    @if (is_singular('lp'))
                        <span class="hero-eyebrow"> {{ the_sub_field('hero_eyebrow') }}</span>
                        <h1 id="pageTitle" class="mb-sm-4 mb-3 p-0">
                            {{ the_sub_field('hero_title') }}
                        </h1>
                    @else
                        <h1 class="mb-sm-4 mb-3 p-0">
                            {{ the_sub_field('hero_title') }}
                        </h1>
                    @endif

                    <div class="hero-description mb-lg-5">
                        {{ the_sub_field('hero_description') }}
                    </div>

                    @php $link = get_sub_field('button') @endphp
                    @if ($link)
                        @php
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        @endphp
                        <a class="mt-3 mb-md-5 mb-lg-0 btn btn btn-outline-dark" href="{{ esc_url($link_url) }}"
                            target="{{ esc_attr($link_target) }}">{{ esc_html($link_title) }}</a>
                    @endif
                </div>

                @if ($responsive_image)
                    <div class="d-block d-md-none p-0">
                        <picture>
                            <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                media="(min-width: 768px)">
                            <img width="264" height="213" src="{{ esc_url($responsive_image['url']) }}"
                                alt="{{ esc_attr($responsive_image['alt']) }}" class="mob-head-img"
                                loading="eager" />
                        </picture>
                    </div>
                @endif

                @if ($image)
                    <div class="col-md-6 p-0 d-none d-md-block">
                        <picture>
                            <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                media="(max-width: 767px)">
                            <img width="1007" height="675" src="{{ esc_url($image['url']) }}"
                                alt="{{ esc_attr($image['alt']) }}" class="hero-image" loading="eager" />
                        </picture>
                    </div>
                @endif

            </div>
        </div>
    </section>
    @if ($show_logos_below_hero)
        <section id="block-client-logos" class="mb-lg-5 mb-sm-0 d-block d-md-none block new clients-logos"
            style="background-color:  #f5f5f5;">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="slides">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/sephora_logo_web.png"
                                alt="sephora logo web">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/keybank_logo_web-1.png"
                                alt="key bank logo">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/osha_logo_web-1.png"
                                alt="osha logo web">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/bespoke_logo_web-1.png"
                                alt="bespoke logo web">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/indeed_logo_web-1.png"
                                alt="indeed logo">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/leica_logo_web-1.png"
                                alt="leica logo web">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="block-client-logos" class="d-none d-md-block block new clients-logos"
            style="background-color:  #f5f5f5;">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="client-logos-home-desktop d-flex justify-content-around">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/sephora_logo_web.png"
                                alt="sephora logo web">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/keybank_logo_web-1.png"
                                alt="key bank logo">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/osha_logo_web-1.png"
                                alt="osha logo web">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/bespoke_logo_web-1.png"
                                alt="bespoke logo web">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/indeed_logo_web-1.png"
                                alt="indeed logo">
                            <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/leica_logo_web-1.png"
                                alt="leica logo web">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
