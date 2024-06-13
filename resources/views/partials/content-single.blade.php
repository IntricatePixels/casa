<article @php post_class() @endphp>
    <header>
        <h1 class="entry-title mb-2">{{ the_title() }}</h1>
        <div class="post-subhead">
            @php the_excerpt() @endphp
        </div>
    </header>
    <div class="entry-content">
        @if (is_singular('post'))
        <div class="border-top border-bottom mb-3 py-2">
            <span class="pub-date">
                Published on @php echo get_the_date('j F, Y') @endphp
            </span>
            |
            <span class="pub-date">
                Last modified on @php echo get_the_modified_date('j F, Y') @endphp
            </span>
        </div>
        @endif
        <div class="mb-5">
            @if (is_singular( 'post' ))
              @if ( wp_is_mobile() )
                @php the_post_thumbnail('medium', ['class' => 'blog-featured-image blog-featured-image-mobile mb-3', 'loading' => 'eager']) @endphp
              @else
                @php the_post_thumbnail('medium_large', ['class' => 'blog-featured-image mb-3', 'loading' => 'eager']) @endphp
              @endif
            @endif
            @php the_content() @endphp
        </div>
        @if (is_singular( 'post' ))
        <div class="mb-5">
          @include('partials.content-contact-form')
        </div>
        @php wcr_share_buttons() @endphp
        <div class="d-flex justify-content-between mt-5 mb-3">
            @php next_post_link('%link', 'Next Post') @endphp
            @php previous_post_link('%link', 'Previous Post') @endphp
        </div>
        @include('partials.content-author')
        @endif
</article>
