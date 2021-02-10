<?php

require get_template_directory() . '/Components/HeaderNav/HeaderNav.php';
require get_template_directory() . '/Components/HeaderNavMobile/HeaderNavMobile.php';

function SiteHeader() {
?>
<header id='siteHeader'>
    <div id='topBar'>
    <h1>
        <?= get_custom_logo(); ?>
    </h1>
    <?=HeaderNavMobile()?>
    <?php
    if ( is_active_sidebar( 'header-widget' ) ) {
        dynamic_sidebar( 'header-widget' );
    }
    ?>
    </div>
    <?=HeaderNav()?>
</header>
<?php
}

