@if (get_row_layout() == 'hero_banner_platforms')
    @php
        $background_image = get_sub_field('background_image');
        $image = get_sub_field('image');
        $size = 'full';
        $eyebrow_image = get_sub_field('eyebrow_image');
    @endphp
    @if ($background_image)
        @php
            $url = $background_image['url'];
            $alt = $background_image['alt'];
        @endphp
    @endif

    <section class="banner-pillar px-4 pt-5 pb-0 in-page-section"
        style="background-image:url({{ esc_url($background_image['url']) }}); background-size: cover;" data-section-name="">
        <div class="container-1320 m-auto align-items-center justify-content-center text-center">
            <div class="mb-3">
              @if ($eyebrow_image)
                <img width="154" height="34" class="eyebrow-image-top mb-3" style="width: 153px;height: 34px;" src="{{ esc_url($eyebrow_image['url']) }}" alt="{{ esc_attr($eyebrow_image['alt']) }}" class="mb-3" loading="eager" />
              @endif

              <h1 class="font-black mb-3 mb-lg-4 p-0 mx-auto gradient">
                  {{ the_sub_field('hero_title') }}
              </h1>

              <div class="h5 mb-4 mb-lg-5">
                  {{ the_sub_field('hero_description') }}
              </div>
              
                @php $link = get_sub_field('button') @endphp
                @if ($link)
                    @php
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    @endphp
                    <a class="btn btn-primary-gradient px-5 mb-4" href="{{ esc_url($link_url) }}"
                        target="{{ esc_attr($link_target) }}">{{ esc_html($link_title) }}</a>
                @endif     
            </div>           
              @if ($image)
                <img width="318" height="288" src="{{ esc_url($image['url']) }}" alt="{{ esc_attr($image['alt']) }}" loading="eager" />
              @endif
        </div>
    </section>
@endif