<?php

function wishlistCardItem($name, $price, $description, $category_name, $link = null, $image_src = null)
{
    $template = file_get_contents(BASE_PATH . '/components/templates/wishlist-card-item.html');

    $link = $link == null ? '': $link;
    $image_src = $image_src == null ? '' : $image_src;

    $html = str_replace('{{image_src}}', $image_src, $template);
    $html = str_replace('{{link}}', $link, $html);
    $html = str_replace('{{name}}', $name, $html);
    $html = str_replace('{{category_name}}', $category_name, $html);
    $html = str_replace('{{description}}', $description, $html);
    $html = str_replace('{{price}}', $price, $html);

    return $html;
}
