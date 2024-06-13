@if (get_row_layout() == 'two_columns_block_form')
    @php
        $background_image = get_sub_field('background_image');
        $logo_image = get_sub_field('logo_image');
        $gravity_forms_shortcode_us = get_sub_field('gravity_forms_shortcode');
    @endphp
    <section class="block block-form py-0 in-page-section" id="form-{{ get_row_index() }}" data-section-name="">
        <div class="container-fluid mt-0">
            <div class="row">
                <!-- Left Column -->
                <div class="col-lg-4 left-column p-4 d-none d-lg-block"
                    style="background-image: url(<?php echo $background_image; ?>);">
                    <div>
                        <h1 class="text-white text-start"><?php the_sub_field('h1_title'); ?></h1>
                        <p class="text-white text-start"><?php the_sub_field('left_description'); ?></p>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-8 p-5 px-xs-4 right-column ">
                    <div class="d-none">
                        <h1><?php the_sub_field('h1_title'); ?></h1>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                    <h2 class="eyebrow-text mb-2"><?php the_sub_field('eyebrow_title'); ?></h2>
                    @if ($logo_image)
                        @php
                            $logo_url = $logo_image['url'];
                            $logo_alt = $logo_image['alt'];
                        @endphp
                        <img class="form-logo-image pb-2" src="{{ esc_url($logo_url) }}"
                            alt="{{ esc_attr($logo_alt) }}" />
                    @endif
                    <p class="my-3">@php the_sub_field('form_description') @endphp</p>
                    @php echo do_shortcode($gravity_forms_shortcode_us) @endphp
                </div>
            </div>
        </div>
    </section>
@endif