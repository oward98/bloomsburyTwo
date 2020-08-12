<?php

$headers = "From: Bloomsbury Conservation Areas <_www@hannahs-macbook-air.local>\r\n";
$headers .= "Content-type: text/html\r\n";

function send_email($recipient, $subject, $content) {
    mail($recipient, $subject, $content, $headers);
}