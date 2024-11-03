<?php

function wunschlistenAlternative($title, $daysUntil, $count, $shared)
{
    $template = file_get_contents(BASE_PATH . '/components/templates/wunschlisten.html');

    $html = str_replace('{{title}}', $title, $template);
    $html = str_replace('{{daysUntil}}', $daysUntil, $html);
    $html = str_replace('{{count}}', $count, $html);

    # Überprüfe ob die Liste bereits geteilt ist und füge die Klasse border-green-600 hinzu, sonst border-transparent
    if ($shared) {
        $html = str_replace('{{shared}}', 'border-green-600', $html);
    } else {
        $html = str_replace('{{shared}}', 'border-transparent', $html);
    }

    return $html;
}
