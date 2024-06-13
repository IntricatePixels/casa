@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    <div class="container-perspectives mt-4">
        <div class="row">
            <div class="col-lg-9">
                @if ($mimeo_current_lang_id == '1')
                    <h1 class="mt-3 mb-4 pb-3 text-center border-bottom">Blog</h1>
                @else
                    <h1 class="mt-3 mb-4 pb-3 text-center border-bottom">News and Perspectives</h1>
                    <div class="latest-posts-wrapper">
                        @include('partials.post-nav')
                        @php $categories = get_categories() @endphp
                        @if (count($categories) > 0)
                            <div class="categories-list">
                                @foreach ($categories as $term)
                                    <a class="category-item"
                                        href="/blog/category/{{ $term->slug }}/">{{ $term->name }}</a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endif
                <div class="container latest-posts-loop">
                    <div class="row latest-posts-row">
                        <?php
                          global $post;
                          $posttype = get_post_type($post);
                          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                          $args = array(
                            'post_type' => $posttype,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_status' => 'publish',
                            'posts_per_page' => 12,
                            'paged' => $paged,
                          );

                          // Custom query.
                          $query = new WP_Query( $args );
                          // Check that we have query results.
                          if ( $query->have_posts() ) {
                              // Start looping over the query results.
                              while ( $query->have_posts() ) {
                                  $query->the_post();
                                  ?>
                        <div class="col-lg-4 mb-3 post-item-wrapper">
                            <div class="card h-100">
                                <div class="card-image-wrapper">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail('medium', ['class' => 'object-fit', 'loading' => 'eager', 'style' => 'height: 160px']); ?>
                                    </a>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <a class="title-link" href="<?php the_permalink(); ?>">
                                        <h2 class="card-title">
                                            <?php the_title(); ?>
                                        </h2>
                                    </a>
                                    <div class="card-text pb-3"><?php the_excerpt(); ?></div>
                                    <a class="card-cont-read" href="<?php the_permalink(); ?>">Continue Reading
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path fill="currentColor"
                                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>

                        <?php
                              }
                            }

                          wp_reset_postdata();
                          $args = array(
                                "nav_class" => "",
                                "ul_class" => "",
                                "li_class" => ""
                              );
                            echo paginate_links_as_bootstrap( $args );
                      ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @include('partials.sidebar')
            </div>
        </div>
    </div>
    @include('partials.content-contact-form')
@endsection
