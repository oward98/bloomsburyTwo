<?php
$posts_args = Array (
    'numberposts' => 4
);
$posts = get_posts($post_args);
foreach($posts as $post) {
    echo $post->post_title;
};
?>