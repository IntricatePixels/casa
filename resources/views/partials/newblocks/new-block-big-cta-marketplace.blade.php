@if (get_row_layout() == 'big_cta_marketplace')
    <section class="block block-big-cta px-4 py-4 mb-0 marketplace-bg" id="blockMP-@php echo get_row_index() @endphp">
        <div class="container">
            <div class="row gx-5">
                <div class="d-lg-flex align-items-lg-start justify-content-lg-between">
                    <div style="flex: 0 0 100px;">
                        <img src="@asset('images/Marketplace-Logo-1.svg')" alt="Mimeo Marketplace Logo" width="80" height="80" style="width: 80px; height: 80px;" class="me-lg-4 mb-4 mb-lg-0">
                    </div>
                    <div style="flex: 1;">
                        <h2 class="mb-2 p-0 text-lg-start font-black fs-4">Integrate A Branded Storefront: Mimeo Marketplace</h2>
                        <p class="mb-0 text-lg-start fs-6">Empower your audience with the ability to order what they need when they want.<br class="desktop-break">Publish your on demand print, digital or warehoused items to a custom storefront.</p> 
                    </div>
                    <div class="d-grid gap-2 d-xl-flex justify-content-xl-start">
                      <a class="btn btn-outline-dark border-green text-white border-white px-3 mt-3" href="{{ site_url('/platforms/mimeo-marketplace/') }}" target="_self">Explore Marketplace</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
