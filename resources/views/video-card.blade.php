<div class="col-lg-4 mb-3">
        <div class="border rounded h-100">
            <a href="@php the_permalink() @endphp">
              <?php the_post_thumbnail('blog-block'); ?>
            </a>
            <div class="px-3 text-center">
                <a href="@php the_permalink() @endphp">
                    <h3 class="mt-3"><?php the_title() ?></h3>
                </a>
                    <p><?php the_excerpt() ?></p>
              </div>
        </div>
    </div>