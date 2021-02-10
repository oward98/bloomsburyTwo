<?php 

require get_template_directory() . '/Components/PostsSidebar/PostsSidebar.php';
require get_template_directory() . '/Components/InfoSidebar/InfoSidebar.php';
require get_template_directory() . '/Components/BodyHeader/BodyHeader.php';

get_header() 

?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
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
            <section class='fullWidth'>
                <div id='postMain'>
                    <aside id='infoSidebar'>
                        <?= InfoSidebar() ?>
                    </aside>
                    <article id='postContent'>
                        <?=the_content()?>
                    </article>
                    <?= PostsSidebar(6) ?>
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