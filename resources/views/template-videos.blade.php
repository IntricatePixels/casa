{{--
  Template Name: Videos Template
--}}
@extends('layouts.app')

@section('content')
<div class="container-fluid container-resources">
  <div class="row position-relative">
      <div class="col resources-menu collapse show collapse-horizontal p-4" id="resourcescollapse">
          <p>
              <a class="d-block d-md-none resources-close" data-bs-toggle="collapse" data-bs-target="#resourcescollapse"
                  aria-expanded="false" aria-controls="resourcescollapse">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path
                          d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                  </svg>
              </a>
          </p>
          {!! wp_nav_menu($resourcesNavigation) !!}
      </div>
            <div class="col">
                <p>
                    <button class="d-md-none btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#resourcescollapse" aria-expanded="false" aria-controls="resourcescollapse">
                        Menu Collapse
                    </button>
                </p>
                <section class="block">
                    <div class="container">
                        <div class="row mt-5 mb-3">
                          {{-- platform reqiured for loop  --}}
                            @php
                              $video_platform = get_field('video_platform');
                              $video_platform_name = $video_platform->name;
                            @endphp
                            <div class="resources-breadcrumb"><?php echo $video_platform_name ?> / Videos</div>
                            <h1>@php the_title(); @endphp</h1>
                            @include('partials.content-page')
                            {{-- if statement required to remove filter from digital and marketplace  --}}
                            {{-- diabled due to admin-ajax error fix post launch  --}}
                            {{-- @if ($video_platform_name == 'Print')
                              <form action="{{ site_url() }}/wp-admin/admin-ajax.php" method="POST" id="filter">
                                  <label class="selected">
                                    <input type="radio" onclick="window.location='../videos/';" class="filter_radio" checked />All Videos</label>
                                      @if ($terms = get_terms(['taxonomy' => 'videos_category', 'orderby' => 'name']))
                                          @foreach ($terms as $term)
                                            @php echo '<label><input type="radio" name="categoryfilter" value="' . $term->name . '" class="filter_radio" />' . $term->name . '</label>' @endphp
                                          @endforeach
                                      @endif
                                  <input type="hidden" name="action" value="myfilter">
                              </form>
                            @endif --}}
                        </div>
                        <div class="row mt-4 mb-3" id="response">
                          {{-- if filter required for digital and marketplace pass platform nam to video_filter_function in functions.php  --}}
                            <?php
                                  $args = array(
                                    'post_type' => 'videos',
                                    'orderby'=>'menu_order',
                                    'order' => 'ASC',
                                    'posts_per_page'   => -1,
                                    'tax_query' => array(
                                        array (
                                            'taxonomy' => 'videos_platform',
                                            'field' => 'name',
                                            'terms' => $video_platform_name,
                                        )
                                    ),
                                  );
                                $query = new WP_Query( $args );
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); ?>
                            <div class="col-lg-4 mb-4">
                              <div class="border rounded h-100">
                                  <a href="@php the_permalink() @endphp">
                                    <?php the_post_thumbnail('blog-block'); ?>
                                  </a>
                                  <div class="px-3 text-center">
                                      <a href="@php the_permalink() @endphp">
                                          <h3 class="mt-3"><?php the_title() ?></h3>
                                      </a>
                                          <p><?php the_excerpt() ?></p>
                                    </div>
                              </div>
                          </div>
                            <?php   }
                                }

                                wp_reset_postdata();
                                ?>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>
    @include('partials.content-contact-form')
@endsection
<script>
    jQuery(function($) {
        $('#filter').change(function() {
            var filter = $('#filter');
            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(), // form data
                type: filter.attr('method'), // POST
                beforeSend: function(xhr) {
                    filter.find('button').text(
                    'Processing...'); // changing the button label
                },
                success: function(data) {
                    filter.find('button').text(
                    'Apply filter'); // changing the button label back
                    $('#response').html(data); // insert data
                }
            });
            return false;
        });
        $('label').on('click', function() {
            $('label').removeClass('selected');
            $(this).addClass("selected");
        });
    });
</script>
