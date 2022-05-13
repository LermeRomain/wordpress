<?php get_header() ?>
<?php get_footer() ?>
<?php
$url = $_SERVER['REQUEST_URI'];
$splitUrl = substr( $url, 10);
$post = get_page_by_path($splitUrl);
$content = get_the_content(null, false, 2 );
get_block_editor_theme_styles();
// Elementor `archive` location
elementor_theme_do_location( 'archive' );
echo $content;
?>



