<?php

use humhub\libs\Html;
use humhub\widgets\PanelMenu;
use humhub\modules\ui\view\components\View;
use yii\helpers\Url;
use yii\web\UrlManager;


?>

<div class="panel panel-default panel-video" id="panel-announcements">

    <style>
      
      ul#announcements-widget {
        list-style: none;
        margin-bottom: 12px;
        padding-left: 0;
      }      
      
      ul#announcements-widget li {
        width: 100%;
        overflow: hidden;
      }      
      
      .announcment-title {
        font-weight: 700;
        padding-bottom: 5px;
      }
      
      .announcment-details {
        display: block;
        min-height: 22px;
        padding-bottom: 10px;
      }
    </style>

    <?= PanelMenu::widget(['id' => 'panel-announcements']); ?>
    
    <div style="clear:both;"></div>

    <div class="panel-heading">
      <i class="fas fa-bullhorn"></i>&nbsp;</i><strong>Latest Announcements</strong>
    </div>

    <div class="panel-body">
      <ul id="announcements-widget">
        <?php if($announcements) { ?>
          <?php foreach($announcements as $announcement) { ?>
            <li>
              <div class="announcment-title"><?php echo $announcement['announcment_title'] ?></strong></div>
              <div class="announcment-detail"><?php echo $announcement['announcment'] ?></div>
              <?php if(!empty($announcement['button_label']) && !empty($announcement['button'])) { ?>
                <div><a class="btn btn-sm btn-default" href="<?php echo $announcement['button'] ?>" target="_blank"><?php echo $announcement['button_label'] ?></a></div>
              <?php } ?>
            </li>
          <?php } ?>
        <?php } ?>
      </ul>
    </div>
</div>
