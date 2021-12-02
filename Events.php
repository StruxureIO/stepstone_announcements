<?php

namespace humhub\modules\stepstone_announcements;

use humhub\modules\admin\permissions\ManageModules;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\ui\menu\MenuLink;
use humhub\modules\stepstone_announcements\widgets\AnnouncementsDashboard;
use humhub\widgets\TopMenu;
use Yii;
use yii\base\Event;

class Events
{

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event Event
     *
     * @return void
     */
    public static function onAdminMenuInit($event): void
    {
        /** @var AdminMenu $adminMenuWidget */
        $adminMenuWidget = $event->sender;

        $adminMenuWidget->addEntry(new MenuLink([
            'label' => Yii::t('StepstoneAnnouncementsModule.base', 'Announcements'),
            'url' => ['/stepstone_announcements/admin/index'],
            'icon' => 'info-circle',
            'sortOrder' => 1000,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'stepstone_announcements' && Yii::$app->controller->id == 'admin'),
            'isVisible' => Yii::$app->user->can(ManageModules::class)
        ]));
    }
    
    public static function addAnnouncementsDashboard($event){
      
      if (Yii::$app->hasModule('stepstone_announcements')) {      
        $event->sender->addWidget(widgets\AnnouncementsDashboard::class, [], ['sortOrder' => 1]);
      }  
    }
    
}
