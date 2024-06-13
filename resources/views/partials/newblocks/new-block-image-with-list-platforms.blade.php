@if (get_row_layout() == 'image_with_list_platforms')

    @php
        $header = get_sub_field('header');
        $image = get_sub_field('image');
    @endphp

    <section class="block-image-with-list in-page-section px-lg-4 px-4 px-md-0 py-5 my-5 in-page-section"
        id="list-{{ get_row_index() }}" data-section-name="">
        <div class="container">
            @if ($header)
                <div class="row justify-content-lg-center text-md-center mb-5 mb-lg-0 pb-5">
                    <div class="">
                        <h2 class="hero-eyebrow text-sm-start text-md-center mb-3">{{ the_sub_field('header_eyebrow') }}</h2>
                        <h3 class="fs-1 font-black mb-3 pt-0 mt-0">{!! $header !!}</h3>
                        <div>{!! the_sub_field('subhead') !!}</div>
                    </div>
                </div>
            @endif
                @php
                    $count = count(get_sub_field('grid'));
                @endphp
                @if (have_rows('grid'))    
                    @while (have_rows('grid'))
                      @php the_row();
                          $title = get_sub_field('title');
                          $descr = get_sub_field('descr', false, false);
                          $link = get_sub_field('link');
                          $image = get_sub_field('image');
                          $icon_image = get_sub_field('icon_image');  
                          $swap_sides = get_sub_field('swap_sides');
                      @endphp
                      <div class="row gx-5 mt-5 pb-lg-5">
                        <div class="col-12 col-lg-6 d-flex align-items-center mb-5 mb-lg-0 @if ($swap_sides) order-lg-2 @else order-lg-1 ps-lg-0 @endif">
                            @if ($image)
                                <img width="318" height="288" src="{{ esc_url($image['url']) }}"
                                    alt="{{ esc_attr($image['alt']) }}" loading="lazy" />
                            @endif
                        </div>
                        <div class="col-12 col-lg-6 flex-column @if ($swap_sides) order-lg-1 @else order-lg-2 @endif">
                            <div class="pb-3 position-relative @if ($count > 1) ps-lg-5 @endif">
                              <div class="ps-lg-0">

                                @if ($title)
                                <div class="container mb-4">
                                  <div class="row">
                                    <div class="col-2 col-sm-auto p-0">
                                      @if ($icon_image)
                                        <img width="50" height="50" src="{{ esc_url($icon_image['url']) }}" alt="{{ esc_attr($icon_image['alt']) }}" loading="lazy" style="width: 50px;" />
                                      @endif
                                    </div>
                                    <div class="col"> 
                                      <h4 class="p-0 mb-2 fs-5 font-bold @if (get_row_index() != 1)  @endif">{!! $title !!}</h4>
                                    </div>
                                  </div>
                                </div>
                                @endif

                                @if ($descr)
                                  <div class="pe-xl-5 me-xl-5 mb-4">{!! $descr !!}</div>
                                @endif
                              </div>
                                </div>
                            </div>
                          </div>
                    @endwhile
                @endif
      </div>
    </section>
@endif
