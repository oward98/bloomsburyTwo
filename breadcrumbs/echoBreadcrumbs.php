<?php
    function echoBreadcrumbs($ancestorIDs) {
        $ancestorIDsCorrectOrder = array_reverse($ancestorIDs);
        ?>
        <ul id='breadcrumbsList'>
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
    $ancestorIDs = get_post_ancestors($ID);
    echoBreadcrumbs($ancestorIDs);