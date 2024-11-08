<?php

function dashboard_statistic_card($title, $num)
{
    $template = file_get_contents(BASE_PATH . '/components/templates/dashboard-statistic-card.html');

    $html = str_replace('{{title}}', $title, $template);
    $html = str_replace('{{num}}', $num, $html);

    return $html;
}
