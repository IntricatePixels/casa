

<div class="dropdown dropdown-country-switcher ps-3 pe-xl-3 d-none d-xl-block">
    <a data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
        class="dropdown-toggle nav-link nav-country-top align-items-center">
        @php
            switch ($mimeo_current_lang_id) {
                case '6':
                    $country_name = 'English EN';
                    break;
                case '3':
                    $country_name = 'Deutsch - DE';
                    break;
                case '2':
                    $country_name = 'Française - FR';
                    break;
                default:
                    $country_name = 'English - EN';
            }
        @endphp
        <span class="caret d-none d-lg-block country-name"><?php echo $country_name; ?></span>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-country dropdown-menu-country animate slidein"
        aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/mimeo-schools/" rel="nofollow">
            <span>English - EN</span>
        </a>
        <a class="dropdown-item" href="/de/mimeo-schools/" rel="nofollow">
            <span>Deutsch - DE</span>
        </a>
        <a class="dropdown-item" href="/eu-en/mimeo-schools/" rel="nofollow">
            <span>Française - FR</span>
        </a>
    </div>
</div>
