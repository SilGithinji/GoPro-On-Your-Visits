<?php
function your_theme_prefix_enqueue_scripts() {
    // Enqueue Google Maps API script
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=your-google-maps-api-key&libraries=places', array(), '1.0', true);

    // Enqueue your theme scripts
    wp_enqueue_script('your-theme-prefix-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'google-maps'), '1.0', true);

    // Pass the ajax_url to script.js
    wp_localize_script('your-theme-prefix-scripts', 'your_theme_prefix_ajax', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'your_theme_prefix_enqueue_scripts');
?>
