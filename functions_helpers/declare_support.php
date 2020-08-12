<?php

function declare_support() {
    add_theme_support('custom-logo');
    add_post_type_support('page', 'excerpt');
    add_theme_support('post-thumbnails');
};

add_action('after_setup_theme', 'declare_support');