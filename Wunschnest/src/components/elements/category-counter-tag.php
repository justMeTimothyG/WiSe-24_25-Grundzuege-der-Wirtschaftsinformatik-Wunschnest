<?php

function categoryCounterTag($category, $count)
{
    $template = file_get_contents(BASE_PATH . '/components/templates/category-counter-tag.html');

    $html = str_replace('{{category}}', $category, $template);
    $html = str_replace('{{count}}', $count, $html);

    return $html;
}
