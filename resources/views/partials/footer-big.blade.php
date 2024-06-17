<footer class="pt-0 bg-casa-light">
    <!-- <a href="https://maps.app.goo.gl/jepNiFabWBbvo7s7A" target="_blank">
        <img src="@asset('images/map_lago.jpg')" alt="Map" width="1000" height="500" class="object-fit" style="height: 500px;">
    </a> -->
    <div class="container mt-4 pt-4">
        <div class="row">
            <!-- Left Column for WordPress Menu -->
            <div class="col-lg-3">
                @if (is_active_sidebar('sidebar-footer'))
                @php dynamic_sidebar('sidebar-footer') @endphp

                @endif
            </div>

            <!-- Right Column for Newsletter Signup and Social Media Icons -->
            <div class="col-lg-9 d-flex justify-content-end flex-column align-items-end">
                <div class="card border-0 bg-transparent">
                        <h3>Newsletter</h3>
                        <!-- Replace with your Contact Form 7 shortcode -->
                        <?php echo do_shortcode('[contact-form-7 id="eb7b80d" title="Newsletter Sign Up"]'); ?>
                        <div class="mt-3">
                    <!-- Social Media Icons with Links -->
                    <a href="https://facebook.com/your-page" class="btn btn-outline-dark me-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://instagram.com/your-page" class="btn btn-outline-dark">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="footer-copyright px-5 mt-5">
        <div class="container">
            <div class="row p-0">
                <p>&copy; All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
