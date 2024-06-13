<div class="modal" id="yourLocationModal" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Please select your preferred location below:</h5>
            </div>
            <div class="modal-body location-popup">
                <p class="my-2">
                    You are currently viewing the US website. <br />
                    If you would like to update your location, please select below:<br>
                </p>
                <select class="form-select" name="websiteLocationModal" id="websiteLocationModal"
                    style="margin: 1rem 0;">
                    <option value="/">United States - Global</option>
                    <option value="/uk-en/">United Kingdom</option>
                    <option value="/de/">Germany</option>
                    <option value="/eu-en/">European Union</option>
                </select>
            </div>
            <div class="modal-footer">
                <button id="selectCountrybutton" type="button" onclick="selectCountryModal()"
                    class="btn btn-primary-gradient">
                    Select</button>
            </div>
        </div>
    </div>
</div>

<script>
    function selectCountryModal() {
        var websiteLocationModal = document.getElementById('websiteLocationModal');
        localStorage.visitorcountry = websiteLocationModal.value;
        localStorage.openpanel = "open";
        window.location = websiteLocationModal.value;
    }
</script>
