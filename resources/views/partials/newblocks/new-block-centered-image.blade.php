@if (get_row_layout() == 'centered_image')
<section class="block new block-centered-image px-4 px-md-0 py-5 mt-5 in-page-section" id="product-grid-{{ get_row_index() }}" data-section-name="">
  <div class="container">
    <div class="col-12">
      <p class="hero-eyebrow">{{ the_sub_field('behind_header_text') }}</p>
      <h2 class="mb-3 mt-0 pt-0 font-black">
        {{ the_sub_field('header') }}</h2>
      <div class="block-subheader mb-lg-5">{{ the_sub_field('subhead') }}</div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <!-- Left Boxyes -->
      <div class="col-lg-3 pt-lg-5">
        <div class="boxy boxy1 p-lp-4 mb-3 animated-text-left">
          <h3 class="mb-3 pt-0">{{ the_sub_field('box1_header') }}</h3>
          <p>{{ the_sub_field('box1_text') }}</p>
          <img height="26" class="d-none d-lg-block line" src="@asset('images/line-top-left-side.svg')"
            alt="line pointing to bottle from top" loading="lazy">
        </div>
        <div class="boxy boxy2 p-lp-4 animated-text-left">
          <h3 class="mb-3 pt-0">{{ the_sub_field('box2_header') }}</h3>
          <p>{{ the_sub_field('box2_text') }}</p>
          <img width="105" height="21" class="d-none d-lg-block line" src="@asset('images/line-straight-left-side.svg')"
            alt="line pointing to bottle from top" loading="lazy">
        </div>
      </div>

      <!-- Center Image -->
      <div class="col-lg-6 text-center d-none d-md-block">
        @php $image = get_sub_field('image'); @endphp
        @if ($image)
        <img width="636" height="654" style="width: 640px; height: auto; margin:0 auto; text-align: center; display: block;"
          src="{{ esc_url($image['url']) }}" alt="{{ esc_attr($image['alt']) }}"
          class="product-block size-product-block scroll-triggered-image img-fluid" loading="lazy" />
        @endif
      </div>

      <div class="col-lg-6 text-center d-block d-md-none py-5">
          @php $image_small = get_sub_field('image_small'); @endphp
          @if ($image_small)
            <img width="469" height="755" style="height: auto;" src="{{ esc_url($image_small['url']) }}" alt="{{ esc_attr($image_small['alt']) }}" class="product-block size-product-block scroll-triggered-image img-fluid" loading="lazy" />
          @endif
      </div>

      <!-- Right Boxyes -->
      <div class="col-lg-3 pt-lg-5">
        <div class="boxy boxy3 p-lp-4 mb-3 animated-text-right ">
          <img width="105" height="21" class="d-none d-lg-block line" src="@asset('images/line-top-right-side.svg')"
            alt="line pointing to bottle from top" loading="lazy">
          <h3 class="mb-3 pt-0">{{ the_sub_field('box3_header') }}</h3>
          <p>{{ the_sub_field('box3_text') }}</p>
        </div>
        <div class="boxy boxy4 p-lp-4 animated-text-right ">
          <img width="105" height="21" class="d-none d-lg-block line" src="@asset('images/line-straight-right-side.svg')"
            alt="line pointing to bottle from top" loading="lazy">
          <h3 class="mb-3 pt-0">{{ the_sub_field('box4_header') }}</h3>
          <p>{{ the_sub_field('box4_text') }}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
<script>
  // Ensure DOM content is loaded
  document.addEventListener("DOMContentLoaded", function () {
    // Select all elements with class .animated-text-left
    const leftElements = document.querySelectorAll(".animated-text-left");

    // Loop through each element and create a timeline for each
    leftElements.forEach((element) => {
      const leftAnimation = gsap.timeline({
        scrollTrigger: {
          trigger: element,
          start: "top center",
          end: "bottom center",
          scrub: true,
        },
      });

      leftAnimation.from(element, {
        opacity: 0,
        x: "-300px",
      })
        .to(element, {
          opacity: 1,
          x: "0%",
        });
    });

    // Repeat the same process for .animated-text-right if needed
    const rightElements = document.querySelectorAll(".animated-text-right");

    rightElements.forEach((element) => {
      const rightAnimation = gsap.timeline({
        scrollTrigger: {
          trigger: element,
          start: "top center",
          end: "bottom center",
          scrub: true,
        },
      });

      rightAnimation.from(element, {
        opacity: 0,
        x: "300px",
      })
        .to(element, {
          opacity: 1,
          x: "0%",
        });
    });
  });

</script>

@endif