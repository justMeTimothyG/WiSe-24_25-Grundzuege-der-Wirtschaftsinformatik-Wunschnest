<?php

function wishlistTableItem($name, $category, $price)
{
    $template = file_get_contents(BASE_PATH . '/components/templates/wishlist-table-item.html');

    $html = str_replace('{{name}}', $name, $template);
    $html = str_replace('{{category}}', $category, $html);
    $html = str_replace('{{price}}', $price, $html);


    return $html;
}
