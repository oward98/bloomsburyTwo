<?php get_header() ?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <header class='pageHeader'>
                <h2 class='pageTitle'><?=the_title()?></h2>
                <?=the_excerpt()?>
            </header>
            <article id='pageContent'>
                <?=the_content()?>
            </article>
            <?php
        }
    }
    ?>
    <div id="backgroundImageDiv">
        <?=the_post_thumbnail('full')?>
    </div>
</main>

<?php get_footer() ?>