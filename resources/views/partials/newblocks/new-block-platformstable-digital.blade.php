@if (get_row_layout() == 'platforms_table_digital')
    <section class="px-lg-4 px-4 px-md-0 py-5 my-5 in-page-section" id="table-digital-{{ get_row_index() }}" data-section-name="">
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
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="table">
                        <table class="table">
                            <thead class="thead" style="background-color: #59397a; color: #fff;text-align: center;">
                                <tr style="font-weight: bold;">
                                    <th scope="col">Attribute</th>
                                    <th scope="col">File Sharing</th>
                                    <th scope="col">CDP</th>
                                    <th scope="col">DRM</th>
                                    <th scope="col">LMS</th>
                                </tr>
                            </thead>
                            <tbody style="border-bottom: 1px solid #dee2e6;">
                                @if (have_rows('list'))
                                    @while (have_rows('list')) @php the_row() @endphp
                                           
                                    @php 
                                      $file_sharing = get_sub_field('file_sharing');
                                      $cdp = get_sub_field('cdp');
                                      $drm = get_sub_field('drm');
                                      $lms = get_sub_field('lms');
                                    @endphp

                                        <tr>
                                            <th scope="row">{{ the_sub_field('option') }}</th>
                                            <td>
                                              @if ($file_sharing == 'YES')
                                                <img alt="table-icon" loading="lazy" class="table-icon icon-blue" src="@asset('images/circle-check-solid.svg')">
                                              @elseif ($file_sharing == 'NO')
                                                <img alt="table-icon" loading="lazy" class="table-icon icon-red" src="@asset('images/circle-xmark-solid.svg')">
                                              @else 
                                                {{ $file_sharing  }}
                                              @endif
                                            </td>
                                            <td>
                                              @if ($cdp == 'YES')
                                                <img alt="table-icon" loading="lazy" class="table-icon icon-blue" src="@asset('images/circle-check-solid.svg')">
                                              @elseif ($cdp == 'NO')
                                                <img alt="table-icon" loading="lazy" class="table-icon icon-red" src="@asset('images/circle-xmark-solid.svg')">
                                              @else 
                                                {{ $cdp  }}
                                              @endif
                                            </td>
                                            <td>
                                              @if ($drm == 'YES')
                                                <img alt="table-icon" loading="lazy" class="table-icon icon-blue" src="@asset('images/circle-check-solid.svg')">
                                              @elseif ($drm == 'NO')
                                                <img alt="table-icon" loading="lazy" class="table-icon icon-red" src="@asset('images/circle-xmark-solid.svg')">
                                              @else 
                                                {{ $drm  }}
                                              @endif
                                            </td>
                                            <td>
                                              @if ($lms == 'YES')
                                                <img alt="table-icon" loading="lazy" class="table-icon icon-blue" src="@asset('images/circle-check-solid.svg')">
                                              @elseif ($lms == 'NO')
                                                <img alt="table-icon" loading="lazy" class="table-icon icon-red" src="@asset('images/circle-xmark-solid.svg')">
                                              @else 
                                                {{ $lms  }}
                                              @endif
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
