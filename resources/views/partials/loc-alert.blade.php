<div class="w-100 m-0 py-3 px-2 location-alert alert alert-dismissible fade show" role="alert">
    <div class="d-flex flex-column flex-lg-row align-items-lg-center mx-auto" style="max-width:780px">
        <p class="mb-2 mb-lg-0 me-lg-3 p-0" style="white-space: nowrap; color: #fff; text-align: left;">
            Please select your appropriate Mimeo site experience:
        </p>
        <div class="input-group">
            <select class="dark form-select" name="websiteLocationAlert" id="websiteLocationAlert"
                style="max-width: auto; margin: 0 10px 0 0; border-radius: 3px; font-size: 14px; border-color: #666;">
                <option value="/" selected>United States - Global</option>
                <option value="/uk-en/">United Kingdom</option>
                <option value="/de/">Germany</option>
                <option value="/eu-en/">European Union</option>
            </select>
            <div class="input-group-append">
                <button type="button" class="btn btn-primary-gradient-nav me-sm-2 py-2 px-5 d-flex align-items-center" onclick="selectCountryAlert()">
                    Select
                </button>
            </div>
        </div>
    </div>
    <button type="button" data-bs-dismiss="alert" class="alert-close" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="fffff"
                d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
        </svg>
    </button>
</div>
<script>
    function selectCountryAlert() {
        var websiteLocationAlert = document.getElementById('websiteLocationAlert');
        localStorage.visitorcountry = websiteLocationAlert.value;
        window.location = websiteLocationAlert.value;
    }
</script>
