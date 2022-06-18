<?php

use App\Core\Adapters\Theme;

return array(
    'aside_tabs' => array(
        array(
            'link'    => 'kt_aside_nav_tab_projects',
            'icon'    => 'icons/duotone/Layout/Layout-4-blocks.svg',
            'tooltip' => 'Projects',
            'view'    => 'layout/aside/__tab-contents/__projects',
        ),

        array(
            'link'    => 'kt_aside_nav_tab_menu',
            'icon'    => 'icons/duotone/Communication/Group.svg',
            'tooltip' => 'Menu',
            'view'    => 'layout/aside/__tab-contents/__menu',
        ),

        array(
            'link'    => 'kt_aside_nav_tab_subscription',
            'icon'    => 'icons/duotone/Media/Equalizer.svg',
            'tooltip' => 'Subscription',
            'view'    => 'layout/aside/__tab-contents/__subscription',
        ),

        array(
            'link'    => 'kt_aside_nav_tab_tasks',
            'icon'    => 'icons/duotone/General/Shield-check.svg',
            'tooltip' => 'Tasks',
            'view'    => 'layout/aside/__tab-contents/__tasks',
        ),

        array(
            'link'    => 'kt_aside_nav_tab_notifications',
            'icon'    => 'icons/duotone/Home/Library.svg',
            'tooltip' => 'Notifications',
            'view'    => 'layout/aside/__tab-contents/__notifications',
        ),

        array(
            'link'    => 'kt_aside_nav_tab_authors',
            'icon'    => 'icons/duotone/Files/File-Plus.svg',
            'tooltip' => 'Authors',
            'view'    => 'layout/aside/__tab-contents/__authors',
        ),
    ),
);
