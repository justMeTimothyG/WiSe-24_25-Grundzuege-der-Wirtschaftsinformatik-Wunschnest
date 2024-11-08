<?php

function dashboard_breadcrumb($currentlyDashboard = true, $wishlist = [], $wish = [])
{
    $template = file_get_contents(BASE_PATH . '/components/templates/dashboard-breadcrumb.html');
    $template_crumbs = file_get_contents(BASE_PATH . '/components/templates/dashboard-breadcrumb-item.html');
    $crumbs = '';
    $html = '';

    if ($currentlyDashboard) {
        $html = str_replace('{{dashboardLink}}', '#', $template);
        $html = str_replace('{{crumbs}}', '', $html);

        return $html;
    }

    $html = str_replace('{{dashboardLink}}', '/index.php?page=dashboard', $template);

    if (!empty($wishlist)) {
        $crumbs .= str_replace('{{text}}', $wishlist['name'], $template_crumbs);
        $crumbs = str_replace('{{link}}', '/index.php?page=wishlist&wishlist_id=' . $wishlist['wishlist_id'], $crumbs);
    } else if (!empty($wish) && !empty($wishlist)) {
        $crumbs .= str_replace('{{text}}', $wish['name'], $template_crumbs);
        $crumbs = str_replace('{{link}}', '#', $crumbs);
    }

    $html = str_replace('{{crumbs}}', $crumbs, $html);

    return $html;
}
