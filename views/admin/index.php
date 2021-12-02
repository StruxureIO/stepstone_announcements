<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

\humhub\modules\stepstone_announcements\assets\Assets::register($this);


$this->title = 'Vendors';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading"><strong>Stepstone</strong> Announcements</div>

        <div class="panel-body">
          
      <?php  echo $this->render('_announcmentsearch', ['model' => $searchModel]); ?>
          
          <div id="vendor-button-row">
            <!--<a class="btn-sm btn btn-default" href="< ?php echo Url::to('admin/add-announcment') ?>">Add Announcement</a>-->        
            <?= Html::a('Add Announcement', ['add-announcment'], ['class' => 'btn-sm btn btn-default']) ?>
          </div>              
        
          <div id="announcement-grid-container">
            
          <?= GridView::widget([
              'dataProvider' => $dataProvider,
              'filterModel' => $searchModel,
              'tableOptions' => ['class' => 'table'],
              'summary'=>'',
              'showFooter'=>false,
              'showHeader' => false,        
              'columns' => [
                  ['class' => 'yii\grid\SerialColumn'],
                    'announcment_title',
                    'date_created',
                  ['class' => 'yii\grid\ActionColumn',
                      'buttons' => [
                        'update'=>function($url,$model,$key)
                        {
                            if (Yii::$app->urlManager->enablePrettyUrl)
                              return Html::a( '<span class="glyphicon glyphicon-pencil"></span>' , Url::to("update-annonucement?id=$key")); 
                            else
                              return Html::a( '<span class="glyphicon glyphicon-pencil"></span>' , Url::to("index.php?r=stepstone_announcements/admin/update-annonucement&id=$key")); 
                        },
                        'delete'=>function($url,$model,$key)
                        {
                            if (Yii::$app->urlManager->enablePrettyUrl)
                              return Html::a( '<span class="glyphicon glyphicon-trash"></span>' , Url::to("delete-annonucement?id=$key") ); //use Url::to() in order to change $url
                            else
                              return Html::a( '<span class="glyphicon glyphicon-trash"></span>' , Url::to("index.php?r=stepstone_announcements/admin/delete-annonucement&id=$key") ); //use Url::to() in order to change $url
                        }],                                        
                    'template'=>'{update} {delete}',
                  ],
                  
              ],
          ]); ?>

          </div>
            
        </div>
    </div>
</div>