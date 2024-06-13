{{--
  Template Name: New LP Dark
  Template Post Type: lp
--}}

@extends('layouts.lp')

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
