<div class="offcanvas offcanvas-end offcanvas-menu" tabindex="-1" id="offcanvasmenu">
    <div class="offcanvas-body d-flex flex-column p-3">
        <div class="flex-fill">
            @if (has_nav_menu('primary_navigation_mobile'))
                {!! wp_nav_menu([
                    'theme_location' => 'primary_navigation_mobile',
                    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                    'echo' => false,
                    'walker' => new Mobile_Nav_Walker(),
                ]) !!}
            @endif
        </div>
        <button class="btn btn-primary-gradient btn-login-mobile d-sm-none d-block mx-2 mt-4 mb-2 small" id="loginLinkButton"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogins" aria-controls="offcanvasLogins">
            Login to Mimeo
        </button>
    </div>
</div>
