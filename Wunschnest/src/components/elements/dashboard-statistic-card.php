<?php

function dashboard_statistic_card($title, $num)
{
    $template = file_get_contents(BASE_PATH . '/components/templates/dashboard-statistic-card.html');

    # Fall $num Null ist mache daraus 0
    if ($num == NULL) {
        $num = 0;
    }

    $html = str_replace('{{title}}', $title, $template);
    $html = str_replace('{{num}}', $num, $html);

    return $html;
}
