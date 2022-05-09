<?php get_header() ?>
<?php
$url = $_SERVER['REQUEST_URI'];
$splitUrl = substr( $url, 10);
$post = get_page_by_path($splitUrl);
$content = apply_filters('the_content', $post->post_content);
echo $content;
?>
<?php get_footer() ?>


