<?php

namespace humhub\modules\stepstone_announcements\widgets;

use Yii;
use yii\helpers\Url;
use yii\db\Query;
use humhub\components\Widget;
use humhub\modules\stepstone_announcements\models\SsAnnouncements;

/**
 *
 * @author Felli
 */
class AnnouncementsDashboard extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run() {
      
      $announcements = (new Query())
              ->select('ss_announcements.*')
              ->from('ss_announcements')
              ->where(['display' => 1])
              ->orderBy(['date_created' => SORT_DESC])
              ->limit(3)
              ->all();
               
      return $this->render('announcementsdashboard', ['announcements' => $announcements]);
    }
}
