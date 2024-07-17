@if (get_row_layout() == 'boxes')

    @php
        $header = get_sub_field('header');
        $description = get_sub_field('description');
        $swap_sides = get_sub_field('swap_sides');
        $eyebrow = get_sub_field('eyebrow');

    @endphp

    <section class="block-boxes in-page-section px-lg-4 px-4 px-md-0 py-5 my-5 in-page-section"
        id="list-{{ get_row_index() }}" data-section-name="">
        <div class="container">
            <div class="row">
                <!-- First column (33% width) -->
                <div class="col-12 col-lg-4 mb-5">
                    <h2 class="hero-eyebrow text-start pb-3">{!! $eyebrow !!}</h2>
                    <h3 class="font-black fs-1 pb-4 pe-lg-5 me-lg-5">{!! $header !!}</h3>
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
                            <a class="btn btn-brown right-arrow mt-0 position-relative" href="@php echo esc_url( $link_url ) @endphp"
                                target="@php echo esc_attr( $link_target ) @endphp">
                                @php echo esc_html( $link_title ) @endphp
                            </a>
                        @endif
                    </div>
                </div>
                <!-- Second column (rest of the width) -->
                <div class="col-12 col-lg-8">
                    <div class="row gy-5">

                        @if (have_rows('boxes'))
                            @while (have_rows('boxes'))
                                @php
                                  the_row();
                                    $title = get_sub_field('title');
                                    $image = get_sub_field('image');
                                    $descr = get_sub_field('description');
                                    $link = get_sub_field('link');
                                @endphp
                                <div class="col-12 col-md-6 d-flex">
                                    <div>
                                       
                                        @if (!empty($image))
                                            <img class="rounded-0" src="{{ esc_url($image['url']) }}"
                                                alt="{{ esc_attr($image['alt']) }}" style="" />
                                        @endif

                                        @if ($title)
                                            <h4 class="p-0 mb-2 mt-4 fs-55 font-bold">{!! $title !!}</h4>
                                        @endif
                                        <div class="flex-grow-1">{{ $descr }}</div>
                                        @if ($link)
                                            @php
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                            @endphp
                                            <a class="btn btn-brown right-arrow mt-0 position-relative"
                                                href="{{ esc_url($link_url) }}">{{ esc_html($link_title) }}</a>
                                        @endif
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
