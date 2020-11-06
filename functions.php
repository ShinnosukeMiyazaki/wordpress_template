<?php

function add_css_js()
{
    //CSSの読み込みはここから
    wp_enqueue_script('mainJs', get_template_directory_uri() . '/assets/js/app.bundle.js', [], '1.0', true);
    wp_enqueue_style('mainCss', get_template_directory_uri() . '/assets/css/style.css');

    /*
    * HomeページとAboutページのみ読み込み
    if (is_page('home') | is_page('about')) {
    }*/
}
add_action('wp_enqueue_scripts', 'add_css_js');
