@extends('layouts.lp')

<?php
global $post;
$post_id_is = $post->ID;
?>
@section('content')
    @include('partials.content-blocks')
    @while (have_posts())
        @php the_post() @endphp
        @include('partials.content-single-lp')
        <?php
      if( $post_id_is != 243253 && $post_id_is != 243380 && $post_id_is != 230631 && $post_id_is != 245997 && $post_id_is != 245996 && $post_id_is != 246003 && $post_id_is != 246002 ) { ?>
        @include('partials.content-contact-form')
        <?php }?>
        <?php
     /**
     * Get Started LP (page id 230631) used in Google Ads that uses a Sign Up form ID 2767
     * Instead of regular form https://www.mimeo.com/lp/get-started/
     **/
    if( $post_id_is == 230631 ) { ?>
        @include('partials.content-contact-form-signup')
    <?php }?>
    @endwhile
@endsection
