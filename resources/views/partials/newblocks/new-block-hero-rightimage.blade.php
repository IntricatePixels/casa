@if (get_row_layout() == 'hero_banner_lp-rightimage')
    @php
        $background_image = get_sub_field('background_image');
        $logo_image = get_sub_field('logo_image_lp');
        $show_logos_below_hero = get_sub_field('show_logos_below_hero');
        $linear_gradient_background = get_sub_field('linear_gradient_background');
    @endphp

    <section class="banner new hero-banner hero-banner-form">
        @if ($background_image)
            @php
                $url = $background_image['url'];
                $alt = $background_image['alt'];
            @endphp
            <div class="full-width-banner" style="background-image:url({{ esc_url($background_image['url']) }});"></div>
        @endif
        <div class="header-container mob-header">
            <div class="row row-eq-height p-0 m-0">
                <div class="col-lg-6 hero-text py-5 my-lg-5 px-4 px-lg-5">
                    @if ($logo_image)
                        @php
                            $logo_url = $logo_image['url'];
                            $logo_alt = $logo_image['alt'];
                        @endphp
                        <img class="hero-logo-image" src="{{ esc_url($logo_url) }}" alt="{{ esc_attr($logo_alt) }}" />
                    @endif

                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>

                    @if ( is_singular('lp') )
                      <span class="hero-eyebrow"> {{ the_sub_field('hero_eyebrow') }}</span>
                      <h1 id="pageTitle" class="mb-sm-4 mb-3 p-0">
                          {{ the_sub_field('hero_title') }}
                      </h1>
                    @else
                      <h1 class="mb-sm-4 mb-3 p-0">
                          {{ the_sub_field('hero_title') }}
                      </h1>
                    @endif

                    <div class="hero-description mb-5">
                        {{ the_sub_field('hero_description') }}
                    </div>
                    @php $link = get_sub_field('button') @endphp
                    @if ($link)
                        @php
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        @endphp
                        <a class="mt-2 btn btn-primary-gradient" href="{{ esc_url($link_url) }}"
                            target="{{ esc_attr($link_target) }}">{{ esc_html($link_title) }}</a>
                    @endif
                </div>
                <div class="col-lg-6 p-0">
                    @php
                        $image = get_sub_field('image');
                        $size = 'full';
                    @endphp
                    @if ($image)
                      @php echo wp_get_attachment_image( $image, $size, "", ["class" => "hero-image d-none d-lg-block", "loading" => "eager", "id" => "animatedImage"]) @endphp
                    @endif
                </div>
            </div>
        </div>
    </section>
    @if ($show_logos_below_hero)
    <section id="block-client-logos" class="mb-5 mb-sm-0 d-block d-md-none block new clients-logos" style="background-color:  #f5f5f5;">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="slides"> 
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/sephora_logo_web.png" alt="sephora logo web">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/keybank_logo_web-1.png" alt="key bank logo">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/osha_logo_web-1.png" alt="osha logo web">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/bespoke_logo_web-1.png" alt="bespoke logo web">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/indeed_logo_web-1.png" alt="indeed logo">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/leica_logo_web-1.png" alt="leica logo web">
                  </div>
                </div>
            </div>
        </div>
    </section>
    <section id="block-client-logos" class="d-none d-md-block block new clients-logos" style="background-color:  #f5f5f5;">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="client-logos-home-desktop d-flex justify-content-around"> 
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/sephora_logo_web.png" alt="sephora logo web">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/keybank_logo_web-1.png" alt="key bank logo">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/osha_logo_web-1.png" alt="osha logo web">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/bespoke_logo_web-1.png" alt="bespoke logo web">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/indeed_logo_web-1.png" alt="indeed logo">
                    <img width="100" height="100" src="https://www.mimeo.com/wp-content/uploads/2022/03/leica_logo_web-1.png" alt="leica logo web">
                  </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endif
