<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
define('home_url', get_parent_theme_file_uri());
add_theme_support('editor-styles');
add_theme_support('wp-block-styles');
add_theme_support('responsive-embeds');

// Theme support
function pacific_theme_setup()
{
    add_theme_support('menus');

    register_nav_menus(array(
        'main-menu' => __('Main Menu'),
    ));
}
add_action('after_setup_theme', 'pacific_theme_setup');

// Enqueue style
function pacific_enqueue_styles()
{
    wp_enqueue_style('style-css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'pacific_enqueue_styles');

// Shortcode
function pacific_shortcode()
{
    return "<h1>Hello Pacific</h1>";
}
add_shortcode('visal', 'pacific_shortcode');

function my_navigation()
{
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-default fixed-top">
        <div class="container">
            <!-- Brand/logo -->
            <a class="navbar-brand poiret-one-regular" href="<?php echo home_url('/'); ?>">
               Noch
            </a>

            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="main-navbar">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'main-menu',
                    'depth'           => 2, // Support dropdowns
                    'container'       => false,
                    'menu_class'      => 'navbar-nav ms-auto',
                    'fallback_cb'     => '__return_false',
                    'walker'          => new WP_Bootstrap_Navwalker(), // Make sure this is loaded!
                ));
                ?>
            </div>
        </div>
    </nav>

<?php
}
?>