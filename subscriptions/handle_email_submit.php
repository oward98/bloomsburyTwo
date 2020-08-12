<?php

require 'send_to_all.php';

function handle_email_submit() {
    $email_content = $_POST['email-content'];

    if ($email_content) {
        send_to_all('Hello from form', $email_content);
        echo "email sent";
    }

    echo "Received post:";
    echo "<pre>";
    echo print_r($_POST);
    echo "</pre>";
}

add_action('admin_post_send_email', 'handle_email_submit');