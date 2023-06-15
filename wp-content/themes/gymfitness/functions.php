<?php

//Includes
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';
function gymfitness_setup(){

    //Imagenes destacadas
    add_theme_support('post-thumbnails');

    //Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup');

function gymfitness_menus(){
        register_nav_menus( array(
            'menu-principal' => __('Menu Principal', 'gymfitnesss')
        ));
}


add_action('init', 'gymfitness_menus'); //cuando wordpress inicie se ejecuta ésta función

function gymfitness_scripts_styles(){
    // Archivos CSS
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    if(is_page('galeria')){
        wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.css', array(), '2.11.4');
    }

    if(is_front_page()){
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.4.0');
    }
   
    
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0'); //funcion para agregarle una hoja de estilos a wordpress

    // Archivos JS
    wp_enqueue_script('jquery');
    if(is_page('galeria')){
        wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.js', array(), '2.11.4', true);
    }
    if(is_front_page()){
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.4.0', true);
        wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2', true);
    }
    
   
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

//Definir zona de widgets
function gymfitness_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ) );
}
add_action('widgets_init', 'gymfitness_widgets');

// Crear Shorcode
function gymfitness_ubicacion_shortcode() {
    ?>
    <div class="mapa">
        <?php
            if(is_page('contacto')) {
                the_field('ubicacion');
            }
        ?>
    </div>

    <h2 class="text-center text-primary">Formulario de Contacto</h2>
    <?php
    echo do_shortcode('[contact-form-7 id="78" title="Formulario de contacto 1"]');
}
add_shortcode('gymfitness-ubicacion', 'gymfitness_ubicacion_shortcode');

/** Imagenes dinamicas como BG **/
function gymfitness_hero_imagen() {
    //Obtener el ID de la pagina de Inicio
    $front_id= get_option('page_on_front');

    //Obtener la imagen
    $id_imagen = get_field('hero_imagen', $front_id);

    //Obtener la ruta de la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

    //Crear CSS
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada_css= "
        body.home .header {
            background-image: linear-gradient( rgb(0 0 0 / .75), rgb(0 0 0 / .75)), url($imagen);
        }    
    ";
    //Inyectar CSS
    wp_add_inline_style('custom', $imagen_destacada_css);

}
add_action('init', 'gymfitness_hero_imagen');




?>

