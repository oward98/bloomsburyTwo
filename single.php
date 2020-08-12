<?php get_header() ?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <header class='pageHeader'>
                <h2 class='pageTitle'><?=the_title()?></h2>
                <span><?=the_date()?></span>
            </header>
            <main id='postMain'>
                <article id='postContent'>
                    <?=the_content()?>
                </article>
                <aside id='postsSidebar'>
                    <?=require 'latest_posts/latest_posts.php'?>
                </aside>
            </main>
            <?php
        }
    }
    ?>
</main>
<div id="backgroundImageDiv">
    <?=the_post_thumbnail('full')?>
</div>

<?php get_footer() ?>