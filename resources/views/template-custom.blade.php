{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
    @if (have_posts())
        @while (have_posts())
            @php the_post() @endphp
            @include('partials.page-header')
            @include('partials.content-blocks')
            <div class="container">
                @include('partials.content-page')
            </div>
            @include('partials.content-contact-form')
        @endwhile
    @endif
@endsection
