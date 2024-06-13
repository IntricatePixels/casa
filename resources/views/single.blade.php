@extends('layouts.app')
@section('content')
    @if (is_singular(['webinars', 'case_studies']))
        @include('partials.content-blocks')
    @endif
    <div class="container my-4">
        @if (is_singular('post'))
            <div class="row gx-5">
                <div class="col-lg-9 mb-4">
                @else
                    <div class="row">
                        <div class="col-lg-12 mb-4">
        @endif
        @while (have_posts())
            @php(the_post())
            @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
          
            @if (is_singular(['ebooks', 'news']))
                @include('partials.content-blocks')
            @endif
        @endwhile
    </div>
    @if (is_singular('post'))
        <div class="col sidebar-wrapper d-none d-lg-block">
            @include('partials.sidebar')
        </div>
    @endif
    </div>
    </div>
    @if (!wp_is_mobile() and !is_singular('post'))
        @include('partials.content-contact-form')
    @endif
    </div>
@endsection
