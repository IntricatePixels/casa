@if (get_row_layout() == 'manual_product_grid')
    @php

    $max_width_980 = '';

      if( get_sub_field('columns') ) {
        $columns = get_sub_field('columns');
      }
      else {
        $columns = "col-md-4";
      }

      if ($columns === 'col-md-6') {
        $max_width_980 = 'max-width-980';
      }
    @endphp
    <section class="block new block-products-grid in-page-section px-lg-4 px-4 px-md-0 pb-5 mt-0 {{ $max_width_980 }}" id="product-grid-{{ get_row_index() }}" data-section-name="">
        <div class="container">
            <div class="col-12 mt-lg-5">
                <p class="hero-eyebrow">{{ the_sub_field('header_eyebrow') }}</p>
                <h2 class="mb-3 pt-0 mt-0 font-black text-center" data-title="{{ the_sub_field('behind_header_text') }}">
                    {{ the_sub_field('header') }}</h2>
                <div class="block-subheader mb-5">{{ the_sub_field('subhead') }}</div>
            </div>
            <div class="row gx-5 gy-4">
                @if (have_rows('grid'))
                    @while (have_rows('grid'))
                        @php the_row();
                          $image = get_sub_field('image');
                          $column_padding = '';
                          if ($columns === 'col-md-4') {
                              $column_padding = 'pe-5';
                          }
                        @endphp
                        <div class="{{ $columns }}">
                            <div class="post-card-content p-0">
                                @if ($image)
                                  <img src="{{ esc_url($image['url']) }}" alt="{{ esc_attr($image['alt']) }}" class="product-block mb-0 size-product-block" loading="lazy" />
                                @endif
                                <p class="prod-grid-title font-bold mt-3 mb-2">{{ the_sub_field('subtitle') }}</p>
                                <p class="p-0">{{ the_sub_field('subtext') }}</p>
                            </div>
                        </div>
                    @endwhile
                @endif
            </div>
        </div>
    </section>
@endif
