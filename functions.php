<?php
function lpisabel_enqueue_scripts() {
    // Carrega o style.css principal do tema
    wp_enqueue_style('lpisabel-style', get_stylesheet_uri());

    // Carrega o script.js no final da página
    wp_enqueue_script('lpisabel-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'lpisabel_enqueue_scripts');