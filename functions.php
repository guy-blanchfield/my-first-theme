<?php

// this function gets called by the wp_head() (or maybe immediately before?) call in header.php
// and it's where we enqueue the scripts and styles
function enqueue_helloworld_files() {
    // first arg for wp_enqueue_style is a nickname for the stylesheet we are about to load
    // it's a nickname to associate with the second arg, not something to load or look for
    // wp_enqueue_style('hello-world-reset', get_theme_file_uri('/build/reset.css'));
    wp_enqueue_style('hello-world-style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_script('hello-world-script', get_theme_file_uri('/build/index.js'));

}


// now we've declared this function we need to add it to the wp_enqueue_scripts hook
// this hook fires just before wp_head, and when it fires it calls the function
add_action('wp_enqueue_scripts', 'enqueue_helloworld_files');

?>
