<?php

function echoBreadcrumbs($ancestorIDs) {
    $ancestorIDsCorrectOrder = array_reverse($ancestorIDs);
    ?>
    <ul id='breadcrumbsList' class='fullWidth'>
        <li><a href=<?=home_url()?>>Home</a></li>
        <?php
        foreach($ancestorIDsCorrectOrder as $ID) {
            $title = get_the_title($ID);
            $permalink = get_permalink($ID);
            ?>
            <li>
                <a href=<?=$permalink?>><?=$title?></a>
            </li>
            <?php
        }
        ?>
        <li><?=the_title()?></li>
    </ul>
    <?php                        
};

function Breadcrumbs() {
    $ancestorIDs = get_post_ancestors($ID);
    echoBreadcrumbs($ancestorIDs);
}