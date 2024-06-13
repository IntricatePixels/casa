{{--
  Template Name: Signup Template UK
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-signup-uk')
@include('partials.content-blocks')
@include('partials.content-contact-form')
@endwhile
@endsection