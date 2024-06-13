

<?php
global $post;
$post_id_array = array( 200013, 230631, 242070, 243253, 207036, 207013, 230794, 230206, 230182, 230205, 226268, 230884, 234826, 234826, 230534 ); // hide from this pages: contact, sign up internal
$post_id_array_digital = array( 243380, 243689, 229311, 207434, 158571 ); // digital pages

$post_type = get_post_type();

if ( $post_type != 'webinar' && $post_type != 'case_studies' && $post_type != 'ebooks' ) {
  if (!is_page( $post_id_array ) && !is_single( $post_id_array )) {
      if ( $post->ID == 200013 ) { // sign up and get started pages that use sign up form
  ?>
<script>
    function q(a) {
        return function() {
            ChiliPiper[a].q = (ChiliPiper[a].q || []).concat([arguments])
        }
    }
    window.ChiliPiper = window.ChiliPiper || "submit scheduling showCalendar submit widget bookMeeting".split(" ")
        .reduce(function(a, b) {
            a[b] = q(b);
            return a
        }, {});
    ChiliPiper.scheduling("mimeo", "inbound-signups", {
        map: true
    })
</script>
<script src="https://js.chilipiper.com/marketing.js" type="text/javascript" async=""></script>
<?php }
    else if ( is_page( $post_id_array_digital ) ) { ?>
<script>
    function q(a) {
        return function() {
            ChiliPiper[a].q = (ChiliPiper[a].q || []).concat([arguments])
        }
    }
    window.ChiliPiper = window.ChiliPiper || "submit scheduling showCalendar submit widget bookMeeting".split(" ")
        .reduce(function(a, b) {
            a[b] = q(b);
            return a
        }, {});
    ChiliPiper.scheduling("mimeo", "inbound-digital", {
        title: "Thanks! What time works best for a quick call?"
    })
</script>
<script src="https://js.chilipiper.com/marketing.js" type="text/javascript" async></script>
<?php }
      else { // rest of pages ?>
<script>
    function q(a) {
        return function() {
            ChiliPiper[a].q = (ChiliPiper[a].q || []).concat([arguments])
        }
    }
    window.ChiliPiper = window.ChiliPiper || "submit scheduling showCalendar submit widget bookMeeting".split(" ")
        .reduce(function(a, b) {
            a[b] = q(b);
            return a
        }, {});
    ChiliPiper.scheduling("mimeo", "inbound-router", {
        map: true
    })
</script>
<script src="https://js.chilipiper.com/marketing.js" type="text/javascript" async=""></script>
<?php
    }
  }
}
?>
