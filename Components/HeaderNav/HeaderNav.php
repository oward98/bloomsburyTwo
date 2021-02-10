<?php

function HeaderNav() {
    ?>
        <nav id='headerNav'>
            <?= wp_nav_menu(array('menu' => 'main', )) ?>
        </nav>
    <?php
}