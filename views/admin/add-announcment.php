<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

\humhub\modules\stepstone_announcements\assets\Assets::register($this);

/* @var $this yii\web\View */
/* @var $model app\models\VendorAreas */

$this->title = 'Add New Announcement';
$this->params['breadcrumbs'][] = ['label' => 'Announcements', 'url' => ['admin/index']];
$this->params['breadcrumbs'][] = 'Add';

?>
<div class="tag-update">

    <?= $this->render('_announcementform', [
        'model' => $model,
    ]) ?>

</div>
