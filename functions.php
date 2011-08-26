<?php
if ( function_exists('register_sidebar') ) {
  register_sidebars((3),array(
                              'before_widget' => '<div id="%1$s" class="widget %2$s">',
                              'after_widget' => '</div>',
                              'before_title' => '<h3>',
                              'after_title' => '</h3>',
                              ));
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'replacement_custom_trim_excerpt');

function replacement_custom_trim_excerpt($text) {
  $raw_excerpt = $text;
  if ( '' == $text ) {
    $text = get_the_content('');

    $text = strip_shortcodes( $text );

    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = strip_tags($text, '<a><p><img>');
    $excerpt_length = apply_filters('excerpt_length', 55);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
      array_pop($words);
      $text = implode(' ', $words);
      $text = $text . $excerpt_more;
    } else {
      $text = implode(' ', $words);
    }
  }
  return apply_filters('replacement_wp_trim_excerpt', $text, $raw_excerpt);
}

?>