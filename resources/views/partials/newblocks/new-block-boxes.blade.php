@if (get_row_layout() == 'boxes')
    
    @php
        $header = get_sub_field('header');
        $description = get_sub_field('description');
        $swap_sides = get_sub_field('swap_sides');
        $eyebrow = get_sub_field('eyebrow');

    @endphp
    
    <section class="block-boxes in-page-section px-lg-4 px-4 px-md-0 py-5 my-5 in-page-section" id="list-{{ get_row_index() }}" data-section-name="">
       <div class="container">
    <div class="row">
      <!-- First column (33% width) -->
      <div class="col-12 col-lg-4 mb-5">
        <h2 class="hero-eyebrow text-start pb-3">{{ $eyebrow }}</h2>
        <h3 class="font-black fs-1 pb-4 pe-lg-5 me-lg-5">{{ $header }}</h3>
        <p>{{ $description }}</p>
        <div class="mx-auto">
          @php
              $link = get_sub_field('link');
          @endphp
          @if ($link)
              @php
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
              @endphp
              <a class="btn btn-primary-gradient mt-4 px-5" href="@php echo esc_url( $link_url ) @endphp"
                  target="@php echo esc_attr( $link_target ) @endphp">
                  @php echo esc_html( $link_title ) @endphp
              </a>
          @endif
        </div>
      </div>
      <div class="d-none d-lg-block col-lg-1"></div>
      <!-- Second column (rest of the width) -->
      <div class="col-12 col-lg-7">
        <div class="row gy-5">

         @if (have_rows('boxes'))
                  @while (have_rows('boxes'))
                      @php the_row();
                        $title = get_sub_field('title');
                        $descr = get_sub_field('description');
                      @endphp
                      <div class="col-12 col-md-6 d-flex">
                        <div class="border rounded p-5 gradient-border w-100 d-flex flex-column">
                            @if ($title)
                                <h4 class="p-0 mb-2 mt-0 fs-5 font-bold">{!! $title !!}</h4>
                            @endif
                            <div class="flex-grow-1">{{ $descr }}</div>
                        </div>
                    </div>
                  @endwhile
              @endif
        </div>
      </div>
    </div>
  </div>
</section>

@endif

