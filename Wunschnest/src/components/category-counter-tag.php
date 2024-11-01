<?php

function categoryCounterTag($category, $count)
{
    $template = file_get_contents(__DIR__ . '/category-counter-tag.html');

    $html = str_replace('{{category}}', $category, $template);
    $html = str_replace('{{count}}', $count, $html);

    return $html;
}
