{{--
  Video single page content
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
                    <p>
                        <button class="d-md-none btn btn-brown" type="button" data-bs-toggle="collapse"
                            data-bs-target="#resourcescollapse" aria-expanded="false" aria-controls="resourcescollapse">
                            Menu Collapse
                        </button>
                    </p>
                    <section>
                        <div class="container">
                            <div class="row mt-5">
                                <div class="resources-breadcrumb">Print / Videos</div>
                                <h1>@php the_title(); @endphp</h1>
                                @include('partials.content-page')
                                @if (have_rows('blocks'))
                                    @while (have_rows('blocks'))
                                        @php the_row() @endphp
                                        @include('partials/blocks/block-video')
                                    @endwhile
                                @endif
                            </div>
                            <div class="d-flex justify-content-between border-top pt-3 pb-4">
                                <div class="previous-nav">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M206.7 464.6l-183.1-191.1C18.22 267.1 16 261.1 16 256s2.219-11.97 6.688-16.59l183.1-191.1c9.152-9.594 24.34-9.906 33.9-.7187c9.625 9.125 9.938 24.37 .7187 33.91L73.24 256l168 175.4c9.219 9.5 8.906 24.78-.7187 33.91C231 474.5 215.8 474.2 206.7 464.6z"/>
                                  </svg>
                                  <div class="">
                                    <p class="d-block mb-0" style="font-size:18px"><strong>Previous</strong></p>
                                    <?php previous_post_link('%link'); ?>
                                  </div>
                                </div>
                                <div class="next-nav text-end">
                                  <div class="">
                                    <p class="d-block mb-0" style="font-size:18px"><strong>Next</strong></p>
                                    <?php next_post_link('%link'); ?>
                                  </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                      <path d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        @include('partials.content-contact-form')
    @endwhile
@endsection
