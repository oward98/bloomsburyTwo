<?php

function add_subscriber($email) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'subscribers';
    $wpdb->insert(
        $table_name,
        array (
            'EMAIL' => $email
        )
    );
}