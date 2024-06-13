{{--
  KB single page template
--}}

@extends('layouts.app')

@section('content')

    @while (have_posts())
        @php the_post() @endphp
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
                    <section>
                        <div class="container">
                            <div class="row mt-5 position-relative">
                                <p>
                                    <button class="d-md-none btn btn-primary-gradient resources-open" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#resourcescollapse" aria-expanded="false"
                                        aria-controls="resourcescollapse">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="white" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192zm384-192l-192 192c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 470.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z"/></svg>
                                        Open Menu
                                    </button>
                                </p>
                                <div class="resources-breadcrumb"><?php resources_breadcrumb(); ?></div>
                                <h1>@php the_title(); @endphp</h1>
                                @include('partials.content-page')
                            </div>
                        </div>
                    </section>
                    @if (have_rows('blocks'))
                        @while (have_rows('blocks'))
                            @php the_row() @endphp
                            @include('partials/blocks/block-video')
                            @include('partials/blocks/block-three-columns-resources')
                            @include('partials/blocks/block-faq-resources')
                        @endwhile
                    @endif
                </div>
            </div>
        </div>
        @include('partials.content-contact-form')
        {{-- Collapsed On Mobile --}}
        <script>
          jQuery(document).ready(function($) {
            if ($(window).width() <= 1200) {
                          $("#resourcescollapse").removeClass("show");
                      }
          })
          </script>
    @endwhile
@endsection
