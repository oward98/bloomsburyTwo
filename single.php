<?php get_header() ?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <header class='bodyHeader'>
                <h2 class='bodyTitle'><?=the_title()?></h2>
                <span><?=the_date()?></span>
            </header>
            <section class='bodyBanner'>
                <div class='bodyBannerBackground'>
                    <div class='bodyBannerImage'>
                        <?=get_the_post_thumbnail($ID, 'full');?>
                    </div>
                    <div class='bodyBannerDescription'>
                        <p>
                            <?php
                                $thumbnail_id = get_post_thumbnail_id($post->ID);
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                echo $alt;
                            ?>
                        </p>
                    </div>
                </div>
            </section>
            <section class='fullWidth'>
                <div id='postMain'>
                    <aside id='infoSidebar'>
                        <?php require 'infoSidebar/infoSidebar.php' ?>
                    </aside>
                    <article id='postContent'>
                        <?=the_content()?>
                    </article>
                    <aside id='postsSidebar'>
                        <?=require 'latest_posts/latest_posts.php'?>
                    </aside>
                </div>
            </section>
            <?php
        }
    }
    ?>
</main>
<div id="backgroundImageDiv">
    <?=the_post_thumbnail('full')?>
</div>

<?php get_footer() ?>