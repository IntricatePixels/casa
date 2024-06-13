{{--
  Template Name: Signup Template DE
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-signup-de')
@include('partials.content-blocks')
@include('partials.content-contact-form')
@endwhile
@endsection