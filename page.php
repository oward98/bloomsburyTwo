<?php get_header() ?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $pageID = get_the_id();
            ?>
            <header class='bodyHeader'>
                <h2 class='bodyTitle'><?=the_title()?></h2>
                <?=the_excerpt()?>
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
            <nav>
                <?php require 'breadcrumbs/echoBreadcrumbs.php'?>
            </nav>
            <section id='pageMain'>
                <div class='gutterFlex'>
                    <aside id='navSidebar'>
                            <?php require 'navSidebar/navSidebar.php' ?>
                        </aside>
                    <article id='pageContent'>
                        <?=get_post_field('post_content', $pageID); ?>
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
    <div id="backgroundImageDiv">
        <?=the_post_thumbnail('full')?>
    </div>
</main>

<?php get_footer() ?>