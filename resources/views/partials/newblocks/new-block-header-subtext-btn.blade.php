@if (get_row_layout() == 'header_subtext')
    <section id="header-{{ get_row_index() }}" class="block block-header-subtext py-3 @php the_sub_field('bgcolor') @endphp">
        <div class="container">
            <div class="row">
                <div class="col">
                    @if (get_sub_field('header'))
                        <h2 class="text-center py-5 fs-1">@php the_sub_field('header') @endphp</h2>
                    @endif
                    @if (get_sub_field('subtext'))
                        <div class="max-width-600 mx-auto text-center mb-45">@php the_sub_field('subtext') @endphp</div>
                    @endif
                        @php $link = get_sub_field('button') @endphp
                        @if ($link)
                            @php $link_url = $link['url'] @endphp
                            @php $link_title = $link['title'] @endphp
                            @php $link_target = $link['target'] ? $link['target'] : '_self' @endphp
                            <div class="text-center py-5">
                                <a class="btn btn-gray position-relative" href="@php echo esc_attr( $link_url ) @endphp"
                                    target="@php echo esc_attr( $link_target ) @endphp">@php echo esc_html( $link_title ) @endphp</a>
                            </div>
                            
                        @endif
                </div>
            </div>
        </div>
    </section>
@endif
