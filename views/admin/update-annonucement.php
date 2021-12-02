<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

\humhub\modules\stepstone_announcements\assets\Assets::register($this);

$this->title = 'Update Announcment: ' . $model->announcment_title;
$this->params['breadcrumbs'][] = ['label' => 'Announcements', 'url' => ['admin/index']];
$this->params['breadcrumbs'][] = ['label' => $model->announcment_title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

?>
<div class="announcment-update">

    <?= $this->render('_announcementform', [
        'model' => $model,
    ]) ?>

</div>
