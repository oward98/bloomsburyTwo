<?php

function get_email_addresses() {
    global $wpdb;
    $subscribers = $wpdb->get_results("SELECT * FROM subscribers");
    $emails = array_map(function($subscriber) {
        return $subscriber->EMAIL;
    }, $subscribers);
    return $emails;
}