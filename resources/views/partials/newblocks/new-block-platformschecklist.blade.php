@if (get_row_layout() == 'platforms_checklist')
    <section class="px-lg-4 px-4 px-md-0 py-5 my-5 in-page-section" id="table-{{ get_row_index() }}"
        data-section-name="">
        <div class="container">

        <div class="row justify-content-lg-center text-md-center mb-5 mb-lg-0 pb-5">
            <div class="pb-lg-5">
                @if (get_sub_field('header_eyebrow'))
                    <h2 class="hero-eyebrow text-sm-start text-md-center mb-3">{{ the_sub_field('header_eyebrow') }}</h2>
                @endif

                @if (get_sub_field('header'))
                    <h3 class="fs-1 font-black mb-3 pt-0 mt-0" data-title="{{ the_sub_field('behind_header_text') }}">
                        {{ the_sub_field('header') }}</h3>
                @endif

                @if (get_sub_field('subhead'))
                    <div>{{ the_sub_field('subhead') }}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Mimeo Print</th>
                            <th scope="col">Local Copy Shop</th>
                            <th scope="col">Internal Facility</th>
                            <th scope="col">Large Legacy Printers</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (have_rows('platform_checklist'))
                            @while (have_rows('platform_checklist'))
                                @php the_row() @endphp
                                <tr>
                                    <th scope="row"><?php the_sub_field('option'); ?></th>
                                    <td>
                                        <?php if ( get_sub_field( 'mimeo_print' ) ): ?>
                                        <img alt="table-icon" loading="lazy" class="table-icon icon-blue"
                                            src="@asset('images/circle-check-solid.svg')">
                                        <?php else:?>
                                        <img alt="table-icon" loading="lazy" class="table-icon icon-red"
                                            src="@asset('images/circle-xmark-solid.svg')">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ( get_sub_field( 'copy_shop' ) ): ?>
                                        <img alt="table-icon" loading="lazy" class="table-icon icon-blue"
                                            src="@asset('images/circle-check-solid.svg')">
                                        <?php else:?>
                                        <img alt="table-icon" loading="lazy" class="table-icon icon-red"
                                            src="@asset('images/circle-xmark-solid.svg')">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ( get_sub_field( 'internal_facility' ) ): ?>
                                        <img alt="table-icon" loading="lazy" class="table-icon icon-blue"
                                            src="@asset('images/circle-check-solid.svg')">
                                        <?php else:?>
                                        <img alt="table-icon" loading="lazy" class="table-icon icon-red"
                                            src="@asset('images/circle-xmark-solid.svg')">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ( get_sub_field( 'large_legacy' ) ): ?>
                                        <img alt="table-icon" loading="lazy" class="table-icon icon-blue"
                                            src="@asset('images/circle-check-solid.svg')">
                                        <?php else:?>
                                        <img alt="table-icon" loading="lazy" class="table-icon icon-red"
                                            src="@asset('images/circle-xmark-solid.svg')">
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            @endwhile
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        </div>
    </section>
@endif
