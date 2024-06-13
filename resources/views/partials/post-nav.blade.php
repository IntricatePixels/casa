

@php $mimeo_current_lang = get_field('site_id', 'option'); @endphp
<div class="post-type-list">
    <a href="<?php if ($mimeo_current_lang_id != '1') {
        echo trim('/' . $mimeo_current_lang);
    } ?>/news-and-perspectives/" class="post-type-item <?php echo ($_SERVER['PHP_SELF'] == '/news-and-perspectives/' ? ' active' : '');?>">Articles</a>
    <a href="<?php if ($mimeo_current_lang_id != '1') {
        echo trim('/' . $mimeo_current_lang);
    } ?>/webinars/" class="post-type-item <?php echo ($_SERVER['PHP_SELF'] == '/webinars/' ? ' active' : '');?>">Webinars</a>
    <a href="<?php if ($mimeo_current_lang_id != '1') {
        echo trim('/' . $mimeo_current_lang);
    } ?>/case-studies/" class="post-type-item <?php echo $_SERVER['PHP_SELF'] == '/case-studies/' ? ' active' : ''; ?>">Case Studies</a>
    <a href="<?php if ($mimeo_current_lang_id != '1') {
        echo trim('/' . $mimeo_current_lang);
    } ?>/ebooks/" class="post-type-item <?php echo ($_SERVER['PHP_SELF'] == '/ebooks/' ? ' active' : '');?>">Ebooks</a>
    <a href="<?php if ($mimeo_current_lang_id != '1') {
        echo trim('/' . $mimeo_current_lang);
    } ?>/news/" class="post-type-item <?php echo ($_SERVER['PHP_SELF'] == '/news/' ? ' active' : '');?>">News</a>
</div>

<script>
jQuery(function() {
  var aurl = window.location.href; // Get the absolute url
  jQuery('.post-type-list a').filter(function() {
      return jQuery(this).prop('href') === aurl;
  }).addClass('active');
});
</script>