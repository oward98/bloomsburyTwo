<?php

function return_latest_posts_html() {
    $latest_posts = get_posts(array('numberposts' => 4));
    foreach($latest_posts as $post) {
        $ID = $post->ID;

        $title = $post->post_title;
        $date = get_the_date('', $ID);
        $excerpt = $post->post_excerpt;
        $permalink = get_permalink($ID);

        $thumbnail = get_the_post_thumbnail($ID, 'medium');

        ?>
        <a href=<?=$permalink?> class='pagePreview'>
            <div class='pageThumbnailContainer'>
                <?=$thumbnail?>
            </div>
            <summary>
                <h3><?=$title?></h3>
                <span><?=$date?></span>
            </summary>
        </a>
        <?php
    }
}

return_latest_posts_html();