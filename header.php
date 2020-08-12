<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <title><?php bloginfo("name") | wp_title(); ?></title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta name="description" content="<?=wp_strip_all_tags(get_the_excerpt(), true)?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <header id='siteHeader'>
            <div id='topBar'>
            <h1>
                <?= get_custom_logo(); ?>
            </h1>
            <?php
            if ( is_active_sidebar( 'header-widget' ) ) {
                dynamic_sidebar( 'header-widget' );
            }
            ?>
            </div>
            <nav>
                <?= wp_nav_menu(array('menu' => 'main', )) ?>
            </nav>
        </header>