@php the_content() @endphp

<div class="container container-sign-up">
    <div class="row row-eq-height m-0">
        <div class="col col-lg-4 col-sm-12 col-splash align-self-center p-5 border-right">
            <h2 class="print-better-header">Legen Sie Jetzt Los</h2>
            <p>Verwalten und verteilen Sie gedruckte und digitale Inhalte auf einfache Art und Weise. Unsere Plattform ist einfach zu bedienen, bietet Ihnen eine transparente Preisgestaltung und unterstützt Sie durch einen exzellenten Kundenservice.</p>
            <p class="login-link account-login-button">
                <a href="https://my.mimeo.de/Login.aspx?ReturnUrl=%2f">Sie haben bereits ein Konto?</a>
            </p>
        </div>

        <div class="col col-lg-8 col-sm-12 form-column ">
            <h1 class="hero-heading">Registrieren</h1>
            <p>Verabschieden Sie sich von E-Mail-Ketten und begrüßen Sie das mühelose Geschäftsdrucken.</p>
            <div class="signup-form-wrapper">
                <?php 
                  // DE Sign Up Form ID
                  echo do_shortcode("[gravityform id='2' title='false']"); 
                ?>
            </div>
        </div>
    </div>
</div>
