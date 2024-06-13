<link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">

<nav class="navbar sticky-top p-0 navbar-expand-xl position-absolute w-100">
    
    <div class="header-container mt-3 mb-3 mt-lg-2 mb-lg-2">
        <div class="header-logo">
            @include ('sections/header-logos')
        </div>
        <div class="collapse navbar-collapse ms-5 d-flex align-items-center justify-content-end" id="navbarSupportedContent">
            @if (has_nav_menu('primary_navigation'))
                <nav class="navbar navbar-expand-lg navbar-light navbar-megamenu"
                    aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
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
            <a class="btn btn-outline-secondary text-white border border-white me-sm-2 py-0 px-3 d-flex align-items-center" href="#contact"
                id="signUpButtonLink">
                <span>Contact Us</span>
            </a>
         
            <button id="mobileNavToggleBtn" class="navbar-toggler ms-2 pe-0 collapsed" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasmenu" aria-controls="offcanvasmenu"
                aria-expanded="false" aria-label="Toggle navigation">
            </button>
            
        </div>
       
    </div>
</nav>
{{-- Display Yoast Breadcrumb everywhere but main Mimeo Big homepage --}}
<!-- @if (!is_front_page())
    @if (function_exists('rank_math_the_breadcrumbs'))
        <section class="breadcrumb bg-lighter">
            <div class="header-container">
                {{ rank_math_the_breadcrumbs('<p id="breadcrumbs">', '</p>') }}
            </div>
        </section>
    @endif
@endif -->
