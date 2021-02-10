<?php 

require get_template_directory() . '/Components/PostsSidebar/PostsSidebar.php';
require get_template_directory() . '/Components/Breadcrumbs/Breadcrumbs.php';
require get_template_directory() . '/Components/NavSidebar/NavSidebar.php';
require get_template_directory() . '/Components/BodyHeader/BodyHeader.php';

get_header() 

?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $pageID = get_the_id();
            ?>
            <?= BodyHeader() ?>
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
                <?= Breadcrumbs() ?>
            </nav>
            <section id='pageMain'>
                <div class='gutterFlex'>
                    <aside id='navSidebar'>
                            <?= NavSidebar() ?>
                        </aside>
                    <article id='pageContent'>
                        <?=get_post_field('post_content', $pageID); ?>
                    </article>
                    <?=PostsSidebar(6)?>
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