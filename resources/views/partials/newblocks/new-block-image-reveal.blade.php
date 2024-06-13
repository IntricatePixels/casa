@if (get_row_layout() == 'image_reveal')
    <section class="block new block-products-grid block-image-reveal px-4" id="product-grid-{{ get_row_index() }}">
        <div class="container position-relative">
            <div class="reveal-text-wrapper">
                <div class="row d-flex justify-content-between reveal-text-wrapper-inner py-5">
                    <div class="col-lg-6 top-left text-start">
                        <div class="maxw-450">
                            <div class="hero-eyebrow m-0 text-start">{{ the_sub_field('header_eyebrow') }}</div>
                            <h2 class="m-0 mb-3 pt-0 text-start font-black" data-title="{{ the_sub_field('behind_header_text') }}"
                                style="margin-top:0;">
                                {{ the_sub_field('header') }}</h2>
                            <p class="text-start">{{ the_sub_field('description') }}</p>
                        </div>
                    </div>
                    @if (have_rows('grid'))
                        @while (have_rows('grid'))
                            @php
                                the_row();
                                $justify_blocks = '';

                                switch (get_row_index()) {
                                    case 1:
                                        $justify_blocks = 'justify-content-lg-end';
                                        break;

                                    case 2:
                                        $justify_blocks = 'align-items-lg-end';
                                        break;

                                    case 3:
                                        $justify_blocks = 'justify-content-end align-items-lg-end';
                                        break;
                                }
                            @endphp
                            <div class="col-lg-6 top-{{ get_row_index() }} d-flex {{ $justify_blocks }}">
                                <div class="maxw-350">
                                    <h3 class="prod-grid-title font-bold mt-3 mb-2">{{ the_sub_field('subtitle') }}</h3>
                                    <p class="p-0">{{ the_sub_field('subtext') }}</p>
                                </div>
                            </div>
                        @endwhile
                    @endif
                </div>
            </div>
            <div class="mb-5 mb-lg-0 container-draggable">

                <!-- Image Reveal Desktop -->
                <div class="image-container d-none d-md-block">
                  @php 
                    $image_large_printed = get_sub_field('image_large_printed');
                    $image_large_unprinted = get_sub_field('image_large_unprinted');
                    $image_responsive_printed = get_sub_field('image_responsive_printed');
                    $image_responsive_unprinted = get_sub_field('image_responsive_unprinted');
                  @endphp
                    @if ($image_large_printed)
                      <img width="251" height="408" src="{{ esc_url($image_large_printed['url']) }}" alt="{{ esc_attr($image_large_printed['alt']) }}" class="image-before slider-image" loading="lazy" />
                    @endif
                    @if ($image_large_unprinted)
                      <img width="251" height="408" src="{{ esc_url($image_large_unprinted['url']) }}" alt="{{ esc_attr($image_large_unprinted['alt']) }}" class="image-after slider-image" loading="lazy" />
                    @endif
                </div>

                <!-- Image Reveal Mobile -->
                <div class="image-container d-block d-md-none">
                    @if ($image_responsive_printed)
                      <img width="648" height="864" src="{{ esc_url($image_responsive_printed['url']) }}" alt="{{ esc_attr($image_responsive_printed['alt']) }}" class="image-before slider-image" loading="lazy" />
                    @endif
                    @if ($image_responsive_unprinted)
                      <img width="648" height="864" src="{{ esc_url($image_responsive_unprinted['url']) }}" alt="{{ esc_attr($image_responsive_unprinted['alt']) }}" class="image-after slider-image" loading="lazy" />
                    @endif
                </div>

                <input type="range" min="0" max="100" value="50"
                    aria-label="Percentage of before photo shown" class="slider" />
                <div class="slider-line" aria-hidden="true"></div>
                <div class="slider-button" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none"></rect>
                        <line x1="128" y1="40" x2="128" y2="216" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                        </line>
                        <line x1="96" y1="128" x2="16" y2="128" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                        </line>
                        <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                        <line x1="160" y1="128" x2="240" y2="128" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                        </line>
                        <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <style>
        .block-image-reveal {
            background: #e4e2dc;
        }

        .block-image-reveal img {
            display: block;
            max-width: 100%;
        }

        .reveal-text-wrapper {
            position: relative;
            height: 100%;
        }

        .reveal-text-wrapper-inner {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 9;
            max-width: 1320px;
            display: flex;
            justify-content: space-around;
        }

        .block-image-reveal .container-draggable {
            place-content: center;
            position: relative;
            overflow: hidden;
            --position: 50%;
            touch-action: none;
        }

        .block-image-reveal .image-container {
            max-width: 100%;
        }

        .block-image-reveal .slider-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: left;
        }

        .block-image-reveal .image-before {
            position: absolute;
            inset: 0;
            width: var(--position);
        }

        .block-image-reveal .slider {
            position: absolute;
            inset: 0;
            cursor: pointer;
            opacity: 0;
            /* for Firefox */
            width: 100%;
            height: 100%;
            z-index: 999;
        }

        .block-image-reveal .slider:focus-visible~.slider-button {
            outline: 5px solid black;
            outline-offset: 3px;
        }

        .block-image-reveal .slider-line {
            position: absolute;
            inset: 0;
            width: .2rem;
            height: 100%;
            background-color: #fff;
            /* z-index: 10; */
            left: var(--position);
            transform: translateX(-50%);
            pointer-events: none;
        }

        .block-image-reveal .slider-button {
            position: absolute;
            background-color: #fff;
            color: black;
            padding: .5rem;
            border-radius: 100vw;
            display: grid;
            place-items: center;
            top: 50%;
            left: var(--position);
            transform: translate(-50%, -50%);
            pointer-events: none;
            /* z-index: 100; */
            box-shadow: 1px 1px 1px hsl(0, 50%, 2%, .5);
        }

        @media screen and (min-width: 1200px) {
            .reveal-text-wrapper {
                position: absolute;
                height: 100%;
            }

            .maxw-350 {
                max-width: 350px;
            }

            .maxw-450 {
                max-width: 450px;
            }
        }
    </style>

    <script>
        window.addEventListener('load', function() {
            const container = document.querySelector('.container-draggable');
            const slider = document.querySelector('.slider');
            const sliderButton = document.querySelector('.slider-button');

            slider.addEventListener('input', updateSlider);
            slider.addEventListener('change', updateSlider);

            slider.addEventListener('focus', function() {
                sliderButton.classList.add('focused');
            });

            slider.addEventListener('blur', function() {
                sliderButton.classList.remove('focused');
            });

            function updateSlider(e) {
                container.style.setProperty('--position', `${e.target.value}%`);
            }
        }, false);
    </script>

@endif
