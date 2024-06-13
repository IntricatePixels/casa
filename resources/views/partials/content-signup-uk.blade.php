@php the_content() @endphp

<div class="container container-sign-up">
    <div class="row row-eq-height m-0">
        <div class="col col-lg-4 col-sm-12 col-splash align-self-center p-5 border-right">
            <h2 class="print-better-header">Print Better</h2>
            <p>Empower your team to build, print, and deliver documents on demand, when and where they need them, as
                early as the next day.</p>
            <p class="login-link account-login-button">
                <a href="https://my.mimeo.co.uk/Login.aspx?ReturnUrl=%2f">Already have an account?</a>
            </p>
        </div>

        <div class="col col-lg-8 col-sm-12 form-column ">
            <h1 class="hero-heading">Sign Up for Mimeo Print</h1>
            <p>Say goodbye to email chains and hello to effortless business printing.</p>
            <div class="signup-form-wrapper">
                <?php 
                  // UK Sign Up Form ID
                  echo do_shortcode("[gravityform id='2' title='false']"); 
                ?>
            </div>
        </div>
    </div>
</div>
