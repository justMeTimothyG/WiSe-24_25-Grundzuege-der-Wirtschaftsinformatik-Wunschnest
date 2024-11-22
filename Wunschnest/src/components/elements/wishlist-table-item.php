<?php

function wishlistTableItem($name, $category, $price, $link = null)
{
    $template = file_get_contents(BASE_PATH . '/components/templates/wishlist-table-item.html');

    # Hole Basedomain von link

    #Prepare link for table item
    if ($link == null) {
        $link = "";
    } else {
        // parsen der URL
        $parsedUrl = parse_url($link);

        // hole des Host teil, also die base domain
        $host = $parsedUrl['host'] ?? '';

        # Entferne 'www.' prefix wenn vorhanden
        if (strpos($host, 'www.') === 0) {
            $host = substr($host, 4);
        }

        $link = '<a class="hover:text-orange-500 flex gap-2" href="' . $link . '" target="_blank" class="text-blue-600 hover:underline dark:text-blue-500">' . $host . '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><g fill="none" fill-rule="evenodd"><path d="M18 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h5M15 3h6v6M10 14L20.2 3.8"/></g></svg></a>';
    }

    $html = str_replace('{{name}}', $name, $template);
    $html = str_replace('{{category}}', $category, $html);
    $html = str_replace('{{price}}', $price, $html);
    $html = str_replace('{{link}}', $link, $html);


    return $html;
}
