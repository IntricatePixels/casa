
<div class="offcanvas offcanvas-end offcanvas-login" tabindex="-1" data-bs-backdrop="static" id="offcanvasLogins" aria-labelledby="offcanvasLoginsLabel">
    <div class="offcanvas-header">
        <div class="back-button d-flex align-items-center">
            <a type="button" class="ms-2" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="contentColor"
                        d="M109.3 288L480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288z" />
                </svg>
                Back
            </a>
        </div>
    </div>
    @php
        switch ($mimeo_current_lang_id) {
            case '6':
                $login_button_link = 'https://my.mimeo.co.uk/';
                $login_button_text = 'Mimeo Print';
                $digital_user_text = 'Mimeo Digital for Participants';
                $digital_user_link = 'https://www.mimeo.digital/login';
                $digital_admin_text = 'Mimeo Digital for Admins';
                $digital_admin_link = 'https://digital.mimeo.co.uk/login';
                $marketplace_button_link = 'https://marketplace.mimeo.co.uk/';
                $signup = '/uk-en/central-signup/';
                break;
            case '3':
                $login_button_link = 'https://my.mimeo.de/';
                $login_button_text = 'Anmelden Mimeo Print';
                $digital_user_text = 'Mimeo Digital für Teilnehmer';
                $digital_user_link = 'https://www.mimeo.digital/login';
                $digital_admin_text = 'Mimeo Digital für Systemadministrator';
                $digital_admin_link = 'https://digital.mimeo.de/login';
                $marketplace_button_link = 'https://marketplace.mimeo.de/';
                $signup = '/de/central-signup/';
                break;
            case '2':
                $login_button_link = 'https://my.mimeo.de/Login.aspx?UserLocale=en-GB';
                $login_button_text = 'Mimeo Print';
                $digital_user_text = 'Mimeo Digital for Participants';
                $digital_user_link = 'https://www.mimeo.digital/login';
                $digital_admin_text = 'Mimeo Digital for Admins';
                $digital_admin_link = 'https://digital.mimeo.de/login';
                $marketplace_button_link = 'https://marketplace.mimeo.de/';
                $signup = '/de/central-signup/';
                break;
            default:
                $login_button_link = 'https://my.mimeo.com/';
                $login_button_text = 'Mimeo Print';
                $digital_user_text = 'Mimeo Digital for Participants';
                $digital_user_link = 'https://www.mimeo.digital/login';
                $digital_admin_text = 'Mimeo Digital for Admins';
                $digital_admin_link = 'https://digital.mimeo.com/login';
                $marketplace_button_link = 'https://marketplace.mimeo.com/';
                $signup = '/central-signup/';
        }
    @endphp

    <div class="offcanvas-body p-0">
        <div class="mx-4">
            <p class="login-head">Logins</p>
             @if ($mimeo_current_lang_id == '3')
             <p>Wählen Sie Ihre Plattform aus, um sich anzumelden.</p>
             @else
            <p>Select your platform to login.</p>
            @endif
        </div>
        <div class="d-grid gap-2 mx-4 mb-3">
            <a target="_blank" class="btn btn-outline-primary newlogin print-login" href="<?php echo $login_button_link; ?>">
                <?php echo $login_button_text; ?></a>
            <a target="_blank" class="btn btn-outline-primary newlogin digital-login grey-login"
                href="<?php echo $digital_user_link; ?>">
                <?php echo $digital_user_text; ?>
            </a>
            <a target="_blank" class="btn btn-outline-primary newlogin digital-login grey-login"
                href="<?php echo $digital_admin_link; ?>">
                <?php echo $digital_admin_text; ?>
            </a>
            <a target="_blank" class="btn btn-outline-primary newlogin marketplace-login grey-login"
                href="<?php echo $marketplace_button_link; ?>">
                Mimeo Marketplace
            </a>
            <a target="_blank" class="btn btn-outline-primary newlogin printx-login grey-login"
                href="https://order.hubcast.com/store/account/login/">PrintX</a>
            <a target="_blank" class="btn btn-outline-primary newlogin photos-login grey-login"
                href="https://mimeophotos.com/?source=www">
                Mimeo Photos
            </a>
        </div>
    </div>
</div>
