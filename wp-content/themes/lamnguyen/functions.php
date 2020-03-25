<?php 

function load_stylesheets(){
    wp_register_style('bootstrap', get_template_directory_uri().'/cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css', array(),1,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('animate', get_template_directory_uri().'/cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', array(),1,'all');
    wp_enqueue_style('animate');

    wp_register_style('dropdownhover', get_template_directory_uri().'/css/bootstrap-dropdownhover.min.css', array(), 1, 'all');
    wp_enqueue_style('dropdownhover');

    wp_register_style('all', get_template_directory_uri().'/use.fontawesome.com/releases/v5.3.1/css/all.css', array(), 1, 'all');
    wp_enqueue_style('all');

    wp_register_style('fontastic', get_template_directory_uri().'/css/fontastic.css', array(), 1, 'all');
    wp_enqueue_style('fontastic');

    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,500,700,900', array(), 1, 'all');
    wp_enqueue_style('fonts');

    wp_register_style('lity', get_template_directory_uri().'/cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.min.css', array(), 1, 'all');
    wp_enqueue_style('lity');
    
    wp_register_style('carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(), 1, 'all');
    wp_enqueue_style('carousel');

    wp_register_style('styles', get_template_directory_uri().'/css/styles.css', array(), 1, 'all');
    wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts','load_stylesheets');

function add_all_attributes( $html, $handle ) {
    if ( 'all' === $handle ) {
        return str_replace( "media='all'", "media='all' integrity='sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU' crossorigin='anonymous'", $html );
    }
    return $html;
}
add_filter( 'style_loader_tag', 'add_all_attributes', 10, 2 );

function addjs(){
    wp_register_script('email', get_template_directory_uri().'/js/email-decode.min.js', array(), 1, 1, 1);
    wp_enqueue_script('email');

    wp_register_script('jquery1', get_template_directory_uri().'/cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery1');

    wp_register_script('bootstrap1', get_template_directory_uri().'/cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap1');

    wp_register_script('dropdownhover', get_template_directory_uri().'/js/bootstrap-dropdownhover.min.js', array(), 1, 1, 1);
    wp_enqueue_script('dropdownhover');

    wp_register_script('lity', get_template_directory_uri().'/cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.min.js', array(), 1, 1, 1);
    wp_enqueue_script('lity');

    wp_register_script('carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue_script('carousel');

    wp_register_script('script', get_template_directory_uri().'/js/script.js', array(), 1, 1, 1);
    wp_enqueue_script('script');

}

add_action('wp_enqueue_scripts','addjs');
?>
