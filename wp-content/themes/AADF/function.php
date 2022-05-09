<?php
function AADF_register_assets()
{
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
	wp_enqueue_style('bootstrap');
	wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'AADF_register_assets');

function AADF_supports()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
	register_nav_menu('header', 'En tête du menu');
	register_nav_menu('footer', 'Pied de page');

	add_image_size('post-thumbnail', 350, 215, true);
}
add_action('after_setup_theme', 'AADF_supports');

// Chargement des styles et des scripts Bootstrap sur WordPress
function wpbootstrap_styles_scripts(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
	wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
?>

<?php
function  get_header() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );?>
<?php get_template_part('loop'); ?>
<?php get_footer(); ?>

