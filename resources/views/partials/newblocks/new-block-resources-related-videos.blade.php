@if (get_row_layout() == 'resources_related_videos')

    @php
        $header = get_sub_field('header');
        $image = get_sub_field('image');
        $description = get_sub_field('description');
    @endphp

    <section class="block-image-with-list in-page-section px-lg-4 px-4 px-md-0 py-5" id="list-{{ get_row_index() }}" data-section-name="">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-lg-6 d-flex align-self-left flex-column pt-5">
                    <h2 class="hero-eyebrow text-start pb-3">{{ the_sub_field('eyebrow') }}</h2>
                    <h3 class="font-black fs-1 pb-3 pe-lg-5 me-lg-5">{{ the_sub_field('header') }}</strong></h3>
                    <div class="fs-6 pe-lg-5 me-lg-5 mb-2">{!! $description !!}</div>
                </div>
            </div>
            <div class="row gx-5">
                @php $select_your_posts = get_sub_field('select_your_post') @endphp
                @if ($select_your_posts)
                    @foreach ($select_your_posts as $select_your_post)
                        @php
                            $post_type = get_post_type($select_your_post->ID);
                            $post_type_object = get_post_type_object($post_type);
                            $post_type_singular_name = $post_type_object->labels->singular_name;
                            $permalink = get_permalink($select_your_post->ID);
                            $title = get_the_title($select_your_post->ID);
                            $thumbnail = get_the_post_thumbnail($select_your_post->ID, 'medium', array( 'class' => 'mb-3 col-block rounded-3'), ['loading' => 'lazy']);
                            $excerpt = get_the_excerpt($select_your_post->ID);
                            $trimmed_excerpt = wp_trim_words( $excerpt, $num_words = 14, $more = null );
                            $content = apply_filters('the_content', $select_your_post->post_content); // Get the full content

                           
                        @endphp

                        <div class="col-lg-4 col-sm-12 my-4 my-lg-3">
                            <a href="@php echo esc_url($permalink) @endphp">@php echo $thumbnail @endphp</a>
                            <div class="read-more-section mb-2">
                              <p class="font-bold small d-inline-block bg-lighter px-3 py-2 me-2 mb-0 ">{{ $post_type_singular_name }}</p>
                            </div>
                            <div>
                              <h2 class="py-2 font-black fs-5"><a href="@php echo esc_url($permalink) @endphp">@php echo esc_html($title) @endphp</a></h2>
                              <div class="py-1">@php echo $trimmed_excerpt @endphp</div>
                              <div><a class="d-block mt-lg-3 mt-2 news-link" href="@php echo esc_url($permalink) @endphp">Watch Video</a></div>
                            </div>
                        </div>
                    @endforeach
            </div>
@endif
<div class="text-center">
    @php
        $link = get_sub_field('link');
    @endphp
    @if ($link)
        @php
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        @endphp
        <a class="btn btn-brown-gradient mb-5 mt-5 px-5" href="@php echo esc_url( $link_url ) @endphp"
            target="@php echo esc_attr( $link_target ) @endphp">
            @php echo esc_html( $link_title ) @endphp
        </a>
    @endif
</div>
</div>
</section>
@endif
