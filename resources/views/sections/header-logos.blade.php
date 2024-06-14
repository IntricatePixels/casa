@php
    // Retrieve the logo URL from the Customizer setting
    $logoUrl = get_theme_mod('kube_logo');
@endphp

@if ($logoUrl)
    <!-- <a href="{{ esc_url(home_url('/')) }}" rel="home"> -->
    <a href="/" rel="home">
        <img src="{{ esc_url($logoUrl) }}" alt="{{ esc_attr(get_bloginfo('name')) }}">
    </a>
@else
    <h1><a href="{{ esc_url(home_url('/')) }}" rel="home">{{ bloginfo('name') }}</a></h1>
    <p>{{ bloginfo('description') }}</p>
@endif