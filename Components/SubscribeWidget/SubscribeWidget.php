<?php

function SubscribeButton() {
    ?>
    <button id='subscribeButton'>Sub</button>
    <?php
}

function SubscribeWidget() {
    if ( is_active_sidebar( 'header-widget' ) ) {
        dynamic_sidebar( 'header-widget' );
    }
}

function HeaderWidget() {
    SubscribeButton();
    SubscribeWidget();
}

