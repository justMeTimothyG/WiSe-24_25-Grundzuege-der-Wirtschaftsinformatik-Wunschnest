<?php

function wunschlistenAlternative($title, $daysUntil, $count)
{
    $template = file_get_contents(__DIR__ . '/wunschlisten-alternative-template.html');

    $html = str_replace('{{title}}', $title, $template);
    $html = str_replace('{{daysUntil}}', $daysUntil, $html);
    $html = str_replace('{{count}}', $count, $html);

    return $html;
}
