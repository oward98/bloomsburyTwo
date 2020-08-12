<?php

require 'get_email_addresses.php';
require 'send_email.php';

function send_to_all($subject, $content) {
    $email_addresses = get_email_addresses();
    foreach ($email_addresses as $email_address) {
        send_email($email_address, $subject, $content);
    }
}