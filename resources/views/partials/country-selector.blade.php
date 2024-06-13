    <div class="dropdown dropdown-country-switcher">
        <a data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            class="dropdown-toggle nav-link nav-country-top px-1 pe-3">
            @php
                switch ($mimeo_current_lang_id) {
                    case '1':
                        $country_name = 'English';
                        break;
                    case '1':
                        $country_name = 'Albanian';
                        break;
                    default:
                        $country_name = 'English';
                }
            @endphp
            <img src="@asset('images/icon_header_location_new.svg')" alt="Choose Your Location" width="13" height="17">
            <span class="country-name text-white ps-1"><?php echo $country_name; ?></span>
        </a>
        <div id="websiteLocationdropdown" class="dropdown-menu dropdown-menu-end dropdown-country mt-1 dropdown-menu-country p-2"
            aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item small" href="/" location="/" onclick="selectCountrydropdown(this.href)">
                <img src="@asset('images/flags/us.svg')" alt="Mimeo Business USA">
                <span class="ps-1">United States</span>
            </a>
            <a class="dropdown-item small" href="/uk-en/" location="/uk-en/" onclick="selectCountrydropdown(this.href)">
                <img src="@asset('images/flags/gb.svg')" alt="Mimeo Business United Kingdom">
                <span class="ps-1">United Kingdom</span>
            </a>
            <a class="dropdown-item small" href="/de/" location="/de/" onclick="selectCountrydropdown(this.href)">
                <img src="@asset('images/flags/de.svg')" alt="Mimeo Business Germany">
                <span class="ps-1">Germany</span>
            </a>
            <a class="dropdown-item small" href="/eu-en/"  location="/eu-en/" onclick="selectCountrydropdown(this.href)"">
                <img src="@asset('images/flags/eu.svg')" alt="European Union">
                <span class="ps-1">European Union</span>
            </a>
        </div>
    </div>

<script>
  function selectCountrydropdown(val) {
    	var countryValue = val;
      localStorage.visitorcountry = countryValue;
  }
</script>


