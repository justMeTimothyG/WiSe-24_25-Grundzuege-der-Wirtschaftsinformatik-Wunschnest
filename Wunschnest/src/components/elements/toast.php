<?php

function toast($type, $message)
{
    # Check in a switch statement what type of toast it musst be (success or error)
    switch ($type) {
        case 'success':
            $template = file_get_contents(BASE_PATH . '/components/templates/toast_check.html');
            break;
        case 'error':
            $template = file_get_contents(BASE_PATH . '/components/templates/toast_error.html');
            break;
            # Beim Standard Nutze info
        default:
            $template = file_get_contents(BASE_PATH . '/components/templates/toast_info.html');
    }

    $html = str_replace('{{message}}', $message, $template);

    return $html;
}
