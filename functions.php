<?php 

function esports_files() {
    wp_enqueue_script('bootstrap_js', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '1.0', true);
    wp_enqueue_script('countdown_js', get_theme_file_uri('/js/countdown.js'), NULL, '1.0', true);
    wp_enqueue_script('less_js', get_theme_file_uri('/js/less.js'), NULL, '1.0', true);
    wp_enqueue_script('script_js', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('esports_main_styles', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('ticker_css', get_stylesheet_uri('/ticker-style.css'));
    wp_enqueue_style('style_less', get_template_directory_uri() . '/less/style.less');
    wp_enqueue_style('variables_less', get_template_directory_uri() . '/less/variables.less');

}

add_action('wp_enqueue_scripts', 'esports_files');
