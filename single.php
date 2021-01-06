<?php get_header() ?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <header class='pageHeader'>
                <div id='pageHeaderText' class='fullWidth'>
                    <h2 class='pageTitle'><?=the_title()?></h2>
                    <span><?=the_date()?></span>
                </div>
                <div class='postBanner'>
                    <div class='postBannerBackground'>
                        <div class='coverImage'>
                            <?=get_the_post_thumbnail($ID, 'full');?>
                        </div>
                        <div class='bannerImageDescription'>
                            <p>
                                <?php
                                    $thumbnail_id = get_post_thumbnail_id($post->ID);
                                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                    echo $alt;
                                ?>
                            </p>
                        </div>
                    </div>
                </div> 
            </header>
                <main class='fullWidth'>
                    <div id='postMain'>
                        <aside id='infoSidebar'>
                            <!--METADATA HERE -->
                        </aside>
                        <article id='postContent'>
                            <?=the_content()?>
                        </article>
                        <aside id='postsSidebar'>
                            <?=require 'latest_posts/latest_posts.php'?>
                        </aside>
                    </div>
                </main>   
        </div>
            <?php
        }
    }
    ?>
</main>
<div id="backgroundImageDiv">
    <?=the_post_thumbnail('full')?>
</div>

<?php get_footer() ?>