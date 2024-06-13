@if (get_row_layout() == 'big_cta_digital')
    <section class="block block-big-cta px-4 py-4 mb-0 digital-bg" id="blockMP-@php echo get_row_index() @endphp">
        <div class="container">
            <div class="d-lg-flex align-items-lg-start justify-content-lg-between">
                <div class="d-lg-flex">
                    <img src="@asset('images/Digital-Logo-1.svg')" alt="Mimeo Digital Logo" width="80" height="80"
                        style="width: 80px; height: 80px;" class="me-lg-4 mb-4 mb-lg-0">
                    <div>
                        <h2 class="mb-2 p-0 text-lg-start font-black fs-4">Mimeo Digital Mimeo Digital: The First
                            Courseware Distribution Platform</h2>
                        <p class="mb-0 text-lg-start fs-6">Empower your learners, encourage collaboration, and deliver
                            content in any format, to any device, anywhere in the world. <br class="desktop-break">You
                            keep control of the content while providing your end-users an easy, high-end virtual content
                            experience.</p>
                    </div>
                </div>
                <div class="d-grid gap-2 d-xl-flex justify-content-xl-start">
                  <a class="btn btn-outline-dark border-green text-white border-white px-3 mt-3"
                    href="{{ site_url('/platforms/mimeo-digital/') }}" target="_self">Explore Digital</a>
                </div>
            </div>
        </div>
    </section>
@endif
