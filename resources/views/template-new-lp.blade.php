{{--
  Template Name: New LP Template
  Template Post Type: post, page, product, lp
--}}

@extends('layouts.app_new')

@section('content')
    @if (have_posts())
        @while (have_posts())
            @php the_post() @endphp
            @include('partials.page-header')
            @include('partials.content-blocks-new')
            <div class="container">
                @include('partials.content-page')
            </div>
            @include('partials.content-contact-form')
        @endwhile
    @endif
@endsection
