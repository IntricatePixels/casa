<link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">

<nav class="navbar sticky-top p-0 navbar-expand-xl position-absolute w-100">
    <div class="header-container mt-3 mb-3 mt-lg-2 mb-lg-2">
        <div class="header-logo">
            @include('sections/header-logos')
        </div>
        <div class="collapse navbar-collapse ms-5 d-lg-flex align-items-center justify-content-end" id="navbarSupportedContent">
            @if (has_nav_menu('primary_navigation'))
            <nav class="navbar navbar-expand-lg navbar-light navbar-megamenu" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                'echo' => false,
                'walker' => new Mimeo_Navwalker(),
                ]) !!}
            </nav>
            @endif
        </div>
        <div class="d-flex align-items-center justify-content-end">
            <div class="px-3">
                <a class="text-white font-bold pe-1" href="/">AL</a>
                <a class="text-white" href="/en/"><span>EN</span></a>
            </div>

            <div class="d-block d-lg-none">
                @if ($mimeo_current_lang_id == '1')
                    <a href="{{ esc_url(home_url('/')) }}kontakt/" title="Kontakt"
                        class="header-search-icon px-md-2">
                        <img class="header-contact-icon no-lazy" width="16" height="12" src="@asset('images/icon_header_envelope_new.svg')"
                            alt="Kontakt mimeo"><span class="d-none d-md-block ps-1 text-white">Kontakt</span></a>
                @else
                    <a href="{{ esc_url(home_url('/')) }}contact/" class="header-contact-icon px-md-2"
                        title="Contact Us">
                        <img class="header-contact-icon" width="16" height="12" src="@asset('images/icon_header_envelope_new.svg')"
                            alt="contact mimeo"><span class="d-none d-md-block ps-1 text-white">Contact</span></a>
                @endif
            </div>

            <!-- <a class="d-lg-block d-none btn btn-outline-secondary text-white border border-white me-sm-2 py-0 px-3 d-flex align-items-center" href="#contact" id="signUpButtonLink">
                <span>Kontakt</span>
            </a> -->
            <style>
      
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }
    </style>
            
            <button id="mobileNavToggleBtn" class="navbar-toggler ms-3 p-1 collapsed border-white"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasmenu"
                    aria-controls="offcanvasmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>

{{-- Display Yoast Breadcrumb everywhere but main Mimeo Big homepage --}}
<!--
@if (!is_front_page())
@if (function_exists('rank_math_the_breadcrumbs'))
<section class="breadcrumb bg-lighter">
    <div class="header-container">
        {{ rank_math_the_breadcrumbs('<p id="breadcrumbs">', '</p>') }}
    </div>
</section>
@endif
@endif
-->
