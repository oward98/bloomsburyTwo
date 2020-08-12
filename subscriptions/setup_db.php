<?php

function setup_db() {
    global $wpdb;

    if ($wpdb->get_var("SHOW TABLES LIKE 'subscribers'") != 'subscribers') {
        $charset_collate = $wpdb->get_charset_collate();
        
        $sql = "CREATE TABLE subscribers (
            ID INT NOT NULL AUTO_INCREMENT,
            EMAIL VARCHAR (50) NOT NULL
        ) $charset_collate;";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        dbDelta($sql);

        $sql = "INSERT INTO subscribers (email)
            VALUES owenward@outlook.com;";
        
        dbDelta($sql);

    }

    echo "Database:\n";
    echo "<pre>";
    echo $wpdb;
    echo "</pre>";

}