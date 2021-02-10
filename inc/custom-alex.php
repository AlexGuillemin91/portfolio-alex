<?php

// function portfolio_alex_style() {
// 	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );

// 	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js');

// }
// add_action( 'wp_enqueue_scripts', 'portfolio_alex_style' );

register_nav_menus(
    array(
        "main-menu" => "Menu principal du site"
    )
);