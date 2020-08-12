<?php

function email_page_html() {
    $action = get_template_directory_uri() . '/subscriptions/handle_email_submit.php';
    ?>
    <div class='wrap'>
        <h1 class='wp-heading-inline'>Email</h1>
        <form id='email-form' action="http://localhost/BCA/wp-admin/admin-post.php" method='post'>
            <input type="hidden" name="action" value="send_email">
            <textarea name='email-content' style="width: 100%; min-height: 500px;"></textarea>
            <input type='submit'>
        </form>
    </div>
    <?php
}

add_menu_page("Email", "Email", "administrator", "email", 'email_page_html', 'none', 6);