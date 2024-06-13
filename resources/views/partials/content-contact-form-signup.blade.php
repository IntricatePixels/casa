<?php
        
        // Used for LP and the sign up page on the Google Ads Get Started LP

        $contact_form_options = get_field('contact_form_options');

        if(empty($contact_form_recaptcha_id)) {
            $contact_form_recaptcha_id = "6LflI74UAAAAAMutenpJJmMpup3n-xfgSdOtwkGB";
        }

        if( $contact_form_options ): // first check to make sure the form options exist
            $hide_contact_form = $contact_form_options['hide_contact_form'];
            $form_title = $contact_form_options['form_title'];
            $form_subtitle = $contact_form_options['form_subtitle'];
            $contact_form_theme = $contact_form_options['contact_form_theme'];
            $form_embed_code = $contact_form_options['form_embed_code'];
            $className = "";

            if( !empty($contact_form_theme) ) { // set form block colors
                $className .= ' block-theme ' . $contact_form_theme . '-theme';
            }

            if (!empty($mimeo_current_lang_id)) {
              if (empty($form_embed_code)) { // and if no form code was entered manually
                // set form ids automatically by country
                if ($mimeo_current_lang_id === "6") {
                  $contact_form_id = "1359";
                }
                else if ($mimeo_current_lang_id === "4") {
                  $contact_form_id = "2437";
                }
                else if ($mimeo_current_lang_id === "3") {
                  $contact_form_id = "1970";
                }
                else if ($mimeo_current_lang_id === "1") {
                  $contact_form_id = "1062";
                }
              } else { // if form was entered manually in backend
                $contact_form_id = $form_embed_code;
              }
            }
        ?>

<?php if(($hide_contact_form)) : ?>
<section class="main-form border-top-light section-background-image <?php echo esc_attr($className); ?>">
    <div class="container text-center">
        {{-- container inside container ? --}}
        <div class="container contact-form bg-color" id="mainContactForm">
            <div class="row">
                <div class="col">
                    <h2 class="mb-3" style="margin: 0 auto;"><?php echo esc_html($form_title); ?></h2>
                    <?php if( !empty($form_subtitle) ) { ?>
                    <p class="pb-4" style="margin: 0 auto;"><?php echo esc_html($form_subtitle); ?></p>
                    <?php }
              ?>

                    <script type="text/javascript">
                        var onloadCallback = function() {
                            grecaptcha.render('g-recaptcha', {
                                'sitekey': '6LflI74UAAAAAMutenpJJmMpup3n-xfgSdOtwkGB'
                            });
                        };
                    </script>

                    <script src="//app-ab26.marketo.com/js/forms2/js/forms2.min.js"></script>
                    <div class="main-contact-form">
                        <form id="mktoForm_<?php echo $contact_form_id; ?>"></form>
                        <div id="g-recaptcha" class="g-recaptcha"></div>
                        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
                        <script>
                            // localize this php variable ($contact_form_id) using wp_localize_script and add as seperperate js so it does not break code flow
                            MktoForms2.loadForm("//app-ab26.marketo.com", "207-ODZ-857", <?php echo $contact_form_id; ?>);
                            MktoForms2.whenReady(function(form) {

                                document.getElementById('marketoPass').type = 'password';
                                var formEl = document.getElementById("mktoForm_2767"),
                                    emailEl = formEl.querySelector('#Email'),
                                    //submitEl = formEl.querySelector("BUTTON[type=submit]"),
                                    mktoButtonRow = formEl.querySelector('.mktoButtonRow'),
                                    recaptchaEl = document.querySelector('.g-recaptcha');

                                var invalidDomains = ["gmail.","@yahoo.","@hotmail.","@live.","@aol.","@outlook.","@icloud.", "@me.", "@mac.", "@msn."];
                                formEl.insertBefore(recaptchaEl, mktoButtonRow);

                                form.onValidate(function(builtInValid) {
                                    var vals = form.vals();
                                    var email = form.vals().Email;

                                    if (!builtInValid) return;
                                    form.submittable(true);

                                    var pwRegExp =
                                        /^(?=.*[0-9!@#$%^&*:<>,.?/:;"'|\()_=+~])[a-zA-Z0-9!@#$%^&*:<>,.?/:;"'|\()_=+~]{7,25}$/;
                                    var validPassword = pwRegExp.test(vals.marketoPass);
                                    pwExtendedValidationError =
                                        'Invalid Password - Must be 7 to 25 characters long with one number or special character',
                                        pwField = 'marketoPass',
                                        pwFieldSelector = '#' + pwField;

                                    var recaptchaResponse = grecaptcha.getResponse();

                                    if (!recaptchaResponse) {
                                        recaptchaEl.classList.add('mktoInvalid');
                                    } else {
                                        recaptchaEl.classList.remove('mktoInvalid');
                                        form.addHiddenFields({
                                            lastRecaptchaUserInput: recaptchaResponse,
                                            lastRecaptchaEnabledFormID: formEl.id
                                        });
                                        form.submittable(true);
                                    }

                                    //if (!recaptchaResponse) {
                                        //recaptchaEl.classList.add('mktoInvalid');
                                    //} else 
                                    if (email) {
                                        if (!isEmailGood(email)) {
                                            form.submitable(false);
                                            var emailElem = form.getFormElem().find("#Email");
                                            form.showErrorMessage("Must be Business email.", emailElem);
                                        } else {
                                            form.submittable(true);
                                        }
                                    } else {
                                        recaptchaEl.classList.remove('mktoInvalid');
                                        form.addHiddenFields({
                                            lastRecaptchaUserInput: recaptchaResponse,
                                            lastRecaptchaEnabledFormID: formEl.id
                                        });
                                        form.submittable(true);
                                    }

                                    if (!validPassword) {
                                        form.showErrorMessage(pwExtendedValidationError,
                                            form.getFormElem().find(pwFieldSelector)
                                        );
                                        form.submittable(false);
                                    }
                                });

                                //add an onSubmit handler
                                form.onSubmit(function() {
                                    //get the form field values
                                    var vals = form.vals();
                                    //You may wish to call other function calls here, for example to fire google analytics tracking or the like.
                                    //callSomeFunction(vals);
                                    //We'll just alert them to show the principle.
                                    //alert("Submitted values: " + JSON.stringify(vals));
                                });

                                //Add an onSuccess handler
                                form.onSuccess(function(values, followUpUrl) {
                                    // Take the lead to a different page on successful submit, ignoring the form's configured followUpUrl
                                    // Return false to prevent the submission handler continuing with its own processing
                                    post('https://my.mimeo.com/SignUpNow.aspx', {
                                        FirstName: '' + values.FirstName + '',
                                        LastName: '' + values.LastName + '',
                                        Email: '' + values.Email + '',
                                        MimeoPassword: '' + values.marketoPass + '',
                                        MarketingCompanyName: '' + values.MarketingCompanyName + '',
                                        MarketingContactNumber: '' + values.MarketingContactNumber + '',
                                        PromoCode: '' + values.commentCapture
                                    });

                                    return false;
                                });

                                // Check against personal emails
                                function isEmailGood(email) {
                                    for (var i = 0; i < invalidDomains.length; i++) {
                                        var domain = invalidDomains[i];
                                        if (email.indexOf(domain) != -1) {
                                            return false;
                                        }
                                    }
                                    return true;
                                }
                            });


                            function post(path, params, method) {
                                method = method || "post"; // Set method to post by default if not specified.
                                // The rest of this code assumes you are not using a library.
                                // It can be made less wordy if you use one.
                                var form = document.createElement("form");
                                form.setAttribute("method", method);
                                form.setAttribute("action", path);

                                for (var key in params) {
                                    if (params.hasOwnProperty(key)) {
                                        var hiddenField = document.createElement("input");
                                        hiddenField.setAttribute("type", "hidden");
                                        hiddenField.setAttribute("name", key);
                                        hiddenField.setAttribute("value", params[key]);

                                        form.appendChild(hiddenField);
                                    }
                                }

                                document.body.appendChild(form);

                                form.submit();
                            }
                        </script>

                        <p class="contact-form-privacy"
                            style="margin: 10px auto; text-align: left; max-width: 500px; color: #aaa; font-size: 10px; line-height: 12px;">
                            By submitting this form, you hereby accept that your personal data will be collected and
                            processed
                            for contact purposes. For example, by sharing your name and contact information, we may
                            contact
                            you
                            about upcoming events, educational resources, or product updates. We respect your privacy
                            and do
                            not
                            tolerate spam; please consult our <a href="https://www.mimeo.com/privacy-policy/"
                                target="_blank">Data Privacy Policy</a> for additional information.</p>

                    </div>


                </div>
                <div class="section-background-image"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>
