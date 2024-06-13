<script>
if (!localStorage.visitorcountry)
{
jQuery.get("https://ipinfo.io", function (response) {
    jQuery("#ip").html("IP: " + response.ip);
    if( response.country == "AL") {
        jQuery("#address, #countryButton").html("Albania");
    }
    else if( response.country == "GB") {
        jQuery("#address, #countryButton").html("United Kingdom");
        jQuery("#countryButton").attr("href", "/business/en_uk/" );
    }
    else if( response.country == "DE") {
        jQuery("#address, #countryButton").html("Germany");
        jQuery("#countryButton").attr("href", "/business/de/" );

    }
    else if( response.country == "IN") {
        jQuery("#address, #countryButton").html("India");
    }
    else {
        jQuery("#address, #countryButton").html( response.city + ", " + response.country);
    }
    localStorage.visitorcountry = jQuery('#address').html();

    jQuery("#details").html(JSON.stringify(response, null, 4));
}, "jsonp");

// next, load location modal window
jQuery(window).load(function() {
    jQuery("#exampleModal").modal('show');
});
}

    // Get location data from localStorage
    if (localStorage.visitorcountry == "Albania")
    {
        console.log("it's albania");
    }
    else if (localStorage.visitorcountry == "Germany")
    {
        console.log("it's germany");
    }
</script>

    
    <script type="text/javascript">
    function selectCountry(){
        var urlString = "https://www.mimeo.com/business/";
        var websiteLocation = document.getElementById('websiteLocation');
        var selecteSite = websiteLocation.options[websiteLocation.selectedIndex];
        if (selecteSite.value != "nothing"){
                window.location = urlString + selecteSite.value;
        }
    }
</script>


<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">-->
      <!--  <h5 class="modal-title" id="exampleModalLabel">Location Info</h5>-->
      <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
      <!--    <span aria-hidden="true">&times;</span>-->
      <!--  </button>-->
      <!--</div>-->
      <div class="modal-body">
            <p style="font-size: 22px; color: #666; font-weight: 500; padding: 10px 30px ; line-height: 1.4;">We think you are located in <span id="address"></span>. Update your location?</p>
      </div>
      <div class="modal-footer">
        <a id="countryButton" href="https://www.mimeo.com/en_uk/business/" type="button" class="btn btn-secondary" data-dismiss="modal">Location Unknown</a>
        <select name="websiteLocation" id="websiteLocation" onchange="selectCountry()">
          <option value="us">United States</option>
          <option value="en_uk">United Kingdom</option>
          <option value="de">Germany</option>
          <option value="euro">European Union</option>
          <option value="">Other</option>
        </select>
        <!--<button data-bs-dismiss="modal" type="button" class="btn btn-secondary">United States</button>-->
      </div>
    </div>
  </div>
</div>