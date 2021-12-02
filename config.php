<?php

use humhub\modules\stepstone_announcements\Module;
use humhub\modules\stepstone_announcements\Events;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'stepstone_announcements',
    'class' => 'humhub\modules\stepstone_announcements\Module',
    'namespace' => 'humhub\modules\stepstone_announcements',
    'events' => [
        [Sidebar::class, Sidebar::EVENT_INIT, [Events::class, 'addAnnouncementsDashboard']],
        //['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => [Events::class, 'addAnnouncementsDashboard']],
        [AdminMenu::class, AdminMenu::EVENT_INIT, [Events::class, 'onAdminMenuInit']]
    ],
];
