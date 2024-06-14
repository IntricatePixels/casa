<?php
  $contact_form_options = get_field('contact_form_options');
  $default_contact_form_id = get_field('contact_form_id', 'option');
  
  if( $contact_form_options ): // first check to make sure the form options exist
      $hide_contact_form = $contact_form_options['hide_contact_form'];
      $form_title = $contact_form_options['form_title'];
      $form_subtitle = $contact_form_options['form_subtitle'];
      $form_title_eyebrow = $contact_form_options['form_title_eyebrow'];
      $form_copy = $contact_form_options['form_copy'];
      $contact_form_theme = $contact_form_options['contact_form_theme'];
      $className = "";

      $gravity_forms_shortcode = $contact_form_options['gravity_forms_shortcode'];

      $gravity_forms_shortcode_us = '[gravityform id="1" title="true"]';
      $gravity_forms_shortcode_uk = '[gravityform id="1" title="true"]';
      $gravity_forms_shortcode_de = '[gravityform id="1" title="true"]';

      if( !empty($contact_form_theme) ) { // set form block colors
          $className .= ' block-theme ' . $contact_form_theme . '-theme';
      }

     
?>

<?php if(($hide_contact_form)) : ?>
@if ( is_singular('lp') )
<section class="main-form border-top-light px-4 section-background-image <?php echo esc_attr($className); ?>">
    <div class="container text-center">
        <div class="container contact-form bg-color" id="mainContactForm">
            <div class="row">
                <div class="col-12 col-md-6 ps-lg-lg-5">
                    <p class="hero-eyebrow text-start"><?php echo $form_title_eyebrow; ?></p>
                    <h2 class="mb-3 fs-1 font-black text-start"><?php echo $form_title; ?></h2>
                    <?php if( !empty($form_subtitle) ) { ?>
                    <p class="pb-4"><?php echo $form_subtitle;?></p><?php } ?>
                    <div class="pb-4" style="max-width: 350px;"><?php echo $form_copy; ?></div>
                    @if (!is_singular('lp'))
                      @if ($mimeo_current_lang_id == '1' || $mimeo_current_lang_id == '6' || $mimeo_current_lang_id == '2' )
                          <p>Fill out the form to get a 10 minute demo. A representative will be in touch with you in the
                              next 24 hours.</p>
                          <p>It’s easy to print your business documents online with Mimeo.</p>
                          <ul class="form-ul-list">
                              <li>No Order Minimums</li>
                              <li>Print from Wherever You Are</li>
                              <li>Budget-Friendly Prices</li>
                              <li>Overnight Delivery</li>
                              <li>API Integration</li>
                              <li>Warehousing</li>
                          </ul>
                      @endif

                      @if ($mimeo_current_lang_id == '6')
                          <p><strong>Questions? Call us at <a href="tel:+441480410436">+44 (0) 1480 410 436</a></strong>
                          </p>
                      @endif
                    @endif

                </div>
                <div class="col-12 col-md-6 ps-lg-5 block-form">
                    @if (!empty($gravity_forms_shortcode))
                        <?php echo do_shortcode($gravity_forms_shortcode); ?>
                    @elseif ($mimeo_current_lang_id == '1')
                        <?php if(($gravity_forms_shortcode_us)) { ?>
                        <?php echo do_shortcode($gravity_forms_shortcode_us); } ?>
                    @elseif ($mimeo_current_lang_id == '6' || $mimeo_current_lang_id == '2')
                        <?php if(($gravity_forms_shortcode_uk)) { ?>
                        <?php echo do_shortcode($gravity_forms_shortcode_uk); } ?>
                    @elseif ($mimeo_current_lang_id == '3')
                        <?php if(($gravity_forms_shortcode_de)) { ?>
                        <?php echo do_shortcode($gravity_forms_shortcode_de); } ?>

                        @if ($mimeo_current_lang_id == '1')
                            <p class="contact-form-privacy"
                                style="margin: 20px 0 0; text-align: left; color: #81755f; font-size: 12px;">
                                By submitting this form, you hereby accept that your personal data will be collected
                                and processed for contact purposes. For example, by sharing your name and contact
                                information, we
                                may contact you about upcoming events, educational resources, or product updates. We
                                respect your privacy and do
                                not tolerate spam; please consult our <a href="https://www.mimeo.com/privacy-policy/"
                                    target="_blank">Data Privacy Policy</a> for additional information.</p>
                        @endif
                </div>
            </div>
            <div class="section-background-image"></div>
        </div>
    </div>
    </div>
</section>
@endif
@endif

<?php endif; ?>
<?php endif; ?>
