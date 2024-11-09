<?php

function wunschlistenAlternative($title, $count, $shared, $wishlist_id,  $daysUntil = NULL)
{
    $template = file_get_contents(BASE_PATH . '/components/templates/wunschlisten.html');

    # Prüfe ob Tage_bis NULL ist, dann wird es eine allgemeine Liste sein und passe den Info text an. 
    if ($daysUntil == NULL) {
        $daysUntilString = "";
    } else {
        if ($daysUntil == 0) {
            $daysUntilString = "Heute 🎉  • ";
        } else if ($daysUntil == 1) {
            $daysUntilString = "Morgen 🎉  • ";
        } else if ($daysUntil < 0) {
            $daysUntilString = "seit " . $daysUntil . " Tagen vergangen 🐛 • ";
        } else {
            $daysUntilString = "in " . $daysUntil . " Tagen • ";
        }
    }

    $html = str_replace('{{title}}', $title, $template);
    $html = str_replace('{{daysUntil}}', $daysUntilString, $html);
    $html = str_replace('{{count}}', $count, $html);
    $html = str_replace('{{wishlist_id}}', $wishlist_id, $html);

    # Überprüfe ob die Liste bereits geteilt ist und füge die Klasse border-green-600 hinzu, sonst border-transparent
    if ($shared) {
        $html = str_replace('{{shared}}', 'border-green-600', $html);
    } else {
        $html = str_replace('{{shared}}', 'border-transparent', $html);
    }

    return $html;
}
